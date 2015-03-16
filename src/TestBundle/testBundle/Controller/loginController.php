<?php

namespace TestBundle\testBundle\Controller;

use TestBundle\testBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TestBundle\testBundle\Entity\Posts;
use TestBundle\testBundle\Entity\Comment;

class loginController extends Controller{ 
    
    public function userAction(Request $request) {
    
        $repository = $this->getUserRepository();
        if($request->getMethod()=='POST'){
            $username = $request->get('username');
            $password = $request->get('password');
            
            $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
            
            if($user){
                $session = new session();
                $session->start();
                $session->set('user', $username);
                $posts = $this->getPosts();
                $parameters = array('name'=>$user->getFirstname(),'posts'=>$posts,
                    'username'=>$this->getusername($posts),'likes'=>$this->getlikes($posts),
                    'home'=>'active','user'=>'');
                return $this->render('testBundle:Default:userpage.html.twig',$parameters);
            }
           
            else{
                
                return $this->render('testBundle:Default:index.html.twig',array('error'=>'Invalid Login'));
            }
        }
        else{
            
            $session = new session();
            
            if($session->has('user')){
                
                $username = $session->get('user');
     
                $user = $repository->findOneBy(array('username'=>$username));
                $posts = $this->getPosts();
                $parameters = array('name'=>$user->getFirstname(),'posts'=>$posts,
                    'username'=>$this->getusername($posts),'likes'=>$this->getlikes($posts),
                    'home'=>'active','user'=>'');
                return $this->render('testBundle:Default:userpage.html.twig',$parameters);
            }
            
            return $this->render('testBundle:Default:index.html.twig');
        }
    } 
    
    public function signupAction(Request $request){
        if($request->getMethod()=='POST'){
            
            $user = new Users();
            $username = $request->get('username');
            $firstname = $request->get('firstname');
            $lastname = $request->get('lastname');
            $password = $request->get('password');
            $email = $request->get('email');
            $error = null;
            
            if(($error=$this->Valid($username,$password))==null){
                $user->setUsername($username);
                $user->setPassword($password);
                $user->setFirstname($firstname);
                $user->setLastname($lastname);
                $user->setEmail($email);
                
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $em->flush();
            }
            
            else{
                return $this->render('testBundle:Default:signup.html.twig',array('error'=>$error));
            }
            
            return $this->render('testBundle:Default:index.html.twig',array('name'=>$firstname));
        }
        return $this->render('testBundle:Default:signup.html.twig');
    }
    
    public function Valid($un,$pw){
       
        $repository = $this->getUserRepository();
        
        $username = $repository->findOneBy(array('username'=>$un));
        if($username==null &&  strlen($pw)>=8){
            return null;
        }
        
        else if($username!=null && strlen($pw)>=8){
            return array('Username already exists!');
        }
        
        else if($username==null && strlen($pw)<8){
            return array('Minimum characters for the password is 8');
        }
        else {
            return array('Username already exists!','Minimum characters for the password is 8');
        }
    }
    
    public function postAction(Request $request){
        if($request->getMethod()=='POST'){
            $post = new Posts();
            $postcomment = $request->get('post');
            
            $em = $this->getDoctrine()->getEntityManager();
            $reporitoryUser = $this->getUserRepository();
            
            
            $session = new Session();
            $username = $session->get('user');
            $user = $reporitoryUser->findOneBy(array('username'=>$username));
         
            $post->setUserid($user);
            $post->setPostcontent($postcomment);
            $post->setLikes(0);
            $em->persist($post);
            $em->flush();
            
            $posts = $this->getPosts();
            $parameters = array('name'=>$user->getFirstname(),'posts'=>$posts,
                'username'=>$this->getusername($posts),'likes'=>$this->getlikes($posts),
                'home'=>'active','user'=>'');
            return $this->render('testBundle:Default:userpage.html.twig',$parameters);
            
        }
    }
    
    public function viewprofileAction(){
        
        $repository = $this->getUserRepository();
        $session = new session();
        if($session->has('user')){
            $username = $session->get('user');
            $user = $repository->findOneBy(array('username'=>$username));
            $posts = $this->getPosts();
            $parameters = array('name'=>$user->getFirstname(),'userid'=>$user->getUserid(),
                'posts'=>$posts,'username'=>$this->getusername($posts),'likes'=>$this->getlikes($posts),
                'home'=>'','user'=>'active','profile'=>$user);
            return $this->render('testBundle:Default:userprofile.html.twig',$parameters);
        }
    }
    
    public function getPosts(){
        
        $repositoryPosts = $this->getPostRepository();
        $posts = array();
        $posts = $repositoryPosts->findAll();
        
        return $posts;
        
    }
    
    public function getusername(array $posts){
        $em = $this->getDoctrine()->getEntityManager();
        $arr = array();
        
        $repository = $this->getUserRepository();
        foreach ($posts as $key=>$post) {
            $user = $repository->findOneBy(array('userid'=>$post->getUserid()));
            $arr[$key] = $user->getFirstname()." ".$user->getLastname();
            
        }    
        
        return $arr;
    }
    
    public function getlikes(array $posts){
        
        $arr = array();
        
        foreach($posts as $key=>$post){
            $arr[$key] = $post->getLikes();
        }
        
        return $arr;
    }
    
    public function likeAction($postid){
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $this->getPostRepository();
        
        $post = $repository->findOneBy(array('postid'=>$postid));
        $currentlikes = $post->getLikes();
        $post->setLikes($currentlikes+1);
        
        $em->persist($post);
        $em->flush();
        
        return $this->redirect($this->generateUrl('login_homepage'));
    }
    
    public function viewpostAction($postid){
        
        $session = new Session();
        $name;
        if($session->has('user')){
            $userrepo = $this->getUserRepository();
            $user = $userrepo->findOneByUsername($session->get('user'));
            $name = $user->getFirstname();
        }
        
        $postrepo = $this->getPostRepository();
        $post = $postrepo->findOneByPostid($postid);
        
        $userrepo = $this->getUserRepository();
        $user = $userrepo->findOneByUserid($post->getUserid());
        $fullname = $user->getFirstname()." ".$user->getLastname();
        
        $postcontent = $post->getPostcontent();
        $comments = $this->getComments($postid);
        $commentedby = $this->getusername($comments);
        
        $parameters = array('name'=>$name,'fullname'=>$fullname,'postid'=>$postid,
            'content'=>$postcontent,'comments'=>$comments,'commentor'=>$commentedby,
            'likes'=>$post->getLikes(),'home'=>'','user'=>'');
        return $this->render('testBundle:Default:postpage.html.twig',$parameters);
    }
    
    public function getUserRepository(){
        $em = $this->getDoctrine()->getEntityManager();
        return $em->getRepository('testBundle:Users');
    }
    
    public function getPostRepository(){
        $em = $this->getDoctrine()->getEntityManager();
        return $em->getRepository('testBundle:Posts');
    }
    
    public function getComments($postid){
        $em = $this->getDoctrine()->getEntityManager();
        $commentrepo = $em->getRepository('testBundle:Comment');
        
        $comments = $commentrepo->findByPostid($postid);
        
        return $comments;
    }
    public function commentAction($postid,Request $request){
        
        if($request->getMethod()== 'POST'){
        $commentcontent = $request->get('comment');
        $em = $this->getDoctrine()->getEntityManager();
        
        $userrepo = $this->getUserRepository();
        $user = null;
        $session = new Session();
        if($session->has('user')){
            $username = $session->get('user');
            $user = $userrepo->findOneByUsername($username);
        }
        
        $comment = new Comment();

        $comment->setUserid($user);
        
        $postrepo = $this->getPostRepository();
        $post = $postrepo->findOneByPostid($postid);
        $comment->setPostid($post);
        
        $comment->setCommentcontent($commentcontent);
        $em->persist($comment);
        $em->flush();
        
        return $this->redirect($this->generateUrl('postpage',array('postid'=>$postid)));
        }
        
    }
}

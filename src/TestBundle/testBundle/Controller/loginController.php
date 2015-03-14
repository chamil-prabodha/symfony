<?php

namespace TestBundle\testBundle\Controller;

use TestBundle\testBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TestBundle\testBundle\Entity\Posts;


class loginController extends Controller{ 
    
    public function userAction(Request $request) {
        
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('testBundle:Users');
        if($request->getMethod()=='POST'){
            $username = $request->get('username');
            $password = $request->get('password');
            
            $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
            
            if($user){
                $session = new session();
                $session->start();
                $session->set('user', $username);
                $posts = $this->getPosts();
                return $this->render('testBundle:Default:userpage.html.twig',array('name'=>$user->getFirstname(),'posts'=>$posts,'username'=>$this->getusername($posts)));
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
                return $this->render('testBundle:Default:userpage.html.twig',array('name'=>$user->getFirstname(),'posts'=>$posts,'username'=>$this->getusername($posts)));
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
        
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('testBundle:Users');
        
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
            $postcomment = $request->get('postcomment');
            
            $em = $this->getDoctrine()->getEntityManager();
            $reporitoryUser = $em->getRepository('testBundle:Users');
            
            
            $session = new Session();
            $username = $session->get('user');
            $user = $reporitoryUser->findOneBy(array('username'=>$username));
            
            $userid = $user->getUserid();
            $id = $em->getReference('TestBundle\testBundle\Entity\Users', $userid);
            $post->setUserid($id);
            $post->setPostcontent($postcomment);
            $em->persist($post);
            $em->flush();
            
            $posts = $this->getPosts();
            
            return $this->render('testBundle:Default:userpage.html.twig',array('name'=>$user->getFirstname(),'posts'=>$posts,'username'=>$this->getusername($posts)));
            
        }
    }
    
    public function viewprofileAction(){
        return $this->render('testBundle:Default:userprofile.html.twig',array('name'=>'chamil'));
    }
    
    public function getPosts(){
        $em = $this->getDoctrine()->getEntityManager();
        $repositoryPosts = $em->getRepository('testBundle:Posts');
        
        $repositoryUsers = $em->getRepository('testBundle:Users');
        $posts = array();
        $posts = $repositoryPosts->findAll();
        
        return $posts;
        
        
    }
    
    public function getusername(array $posts){
        $em = $this->getDoctrine()->getEntityManager();
        $arr = array();
        
        $repository = $em->getRepository('testBundle:Users');
        foreach ($posts as $key=>$post) {
            $user = $repository->findOneBy(array('userid'=>$post->getUserid()));
            $arr[$key] = $user->getFirstname()." ".$user->getLastname();
            
        }    
        
        return $arr;
    }
}

<?php

namespace TestBundle\testBundle\Controller;

use TestBundle\testBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TestBundle\testBundle\Controller\basic;

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
                return $this->render('testBundle:Default:userpage.html.twig',array('name'=>$user->getFirstname()));
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
                return $this->render('testBundle:Default:userpage.html.twig',array('name'=>$user->getFirstname()));
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
            
            $user->setUsername($username);
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setPassword($password);
            $user->setEmail($email);
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
            
            return $this->render('testBundle:Default:index.html.twig',array('name'=>$firstname));
        }
        return $this->render('testBundle:Default:signup.html.twig');
    }
}

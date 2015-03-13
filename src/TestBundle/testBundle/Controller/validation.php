<?php

namespace TestBundle\testBundle\Controller;
use TestBundle\testBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class validation extends Controller {
    
    public function usernameValid($string){
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('testBundle:Users');
        
        $username = $repository->findOneBy($string);
        if($username==null){
            return true;
        }
        
        else {
            return false;
        }
    }
}

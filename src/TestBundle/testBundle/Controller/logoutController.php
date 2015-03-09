<?php

namespace TestBundle\testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class logoutController extends Controller
{
    public function outAction()
    {
        $session = new session();
        $session->clear();
        return $this->redirect($this->generateUrl('login_homepage'));
    }

}

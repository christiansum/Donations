<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$slug = $this->get('app.roles')->verify($this->getUser(),'Administrator');
        return $this->render('MainBundle:Default:index.html.twig');
    }

   	public function redirectAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }
}

<?php

namespace AwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="home")
     */
    public function indexAction()
    {
        return $this->render('AwesomeBundle:Default:index.html.twig');
    }

    /**
     * @Route("profile" , name="profile")
     */
    public function profileAction()
    {
        return $this->render('AwesomeBundle:Default:profile.html.twig');
    }

    /**
     * @Route("/page1", name="page1")
     */
    public function page1Action(){
        return $this->render('AwesomeBundle:Default:page1.html.twig');
    }

    /**
     * @Route("/page2", name="page2")
     */
    public function page2Action(){
        return $this->render('AwesomeBundle:Default:page2.html.twig');
    }

    /**
     * @Route("/page3", name="page3")
     */
    public function page3Action(){
        return $this->render('AwesomeBundle:Default:page3.html.twig');
    }



}

<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {   
    
    }
    
    public function MenuAction()
    {
       $em          = $this->getDoctrine()->getManager();

       $categories  = $em->getRepository('BackBundle:Category')->findBy(array('active'=> TRUE));
       return $this->render('front/menu.html.twig',array('categories' => $categories));
    }
    /**
     * @Route("/article/{slug}", name="blog_show")
     */
    public function listarticleAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        
    }
}

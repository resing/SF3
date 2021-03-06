<?php

namespace frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ParameterBag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackBundle\Entity\Comments;
use BackBundle\Entity\Article;
use BackBundle\Entity\Replay;
use UtilisateursBundle\Entity\Utilisateurs;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/accueil",name="Home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('BackBundle:Category')->findOneBySlug('debitis');
        
        return $this->render('front/index.html.twig',array('categories'=>$categories));
    }
    
     /**
     * @Route("/hello/{slug}.{_format}",
     *     defaults = {"_format"="html"},
     *     requirements = { "_format"="html" },
     *     name = "hello"
     * )
     */
    
    public function listAction($slug)
    {
       
        $em = $this->getDoctrine()->getManager();
        $detailArticle = $em->getRepository('BackBundle:Article')->findOneBy(array('slug'=>$slug));
        $comments = new Comments();
        $replay   = new Replay();
        $form = $this->createForm('BackBundle\Form\CommentsType', $comments);
        $form2 = $this->createForm('BackBundle\Form\ReplayType', $replay);
        
        return $this->render('front/detail.html.twig',array('article'=>$detailArticle, 'form' => $form->createView(),'form2' => $form2->createView()));

    }
     /**
     * Creates a new Article entity.
     *
     * @Route("/addpost", name="comments")
     * @Method({"GET", "POST"})
     */
    public  function addcommentsAction(Request $request)
    {
        $comment = new Comments();
        $form    = $this->createForm('BackBundle\Form\CommentsType', $comment);
        $form->handleRequest($request);
        $em        = $this->getDoctrine()->getManager();
        $idArticle = $request->request->get('id');
        $article   = $em->getRepository('BackBundle:Article')->find($idArticle);
        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurs = $em->getRepository('UtilisateursBundle:Utilisateurs')->find('1');
            $comment ->setUtilisateur($utilisateurs);
            $comment ->setArticle($article);
            $em->persist($comment);
            $em->flush();
            
            return $this->redirectToRoute('hello',array('slug'  => $article->getSlug()));
                       
        } else {
        return  $this->render('front/detail.html.twig', array('article'=>$article, 'form' => $form->createView()));
        }
    }
     /**
     * Creates a new replay entity.
     *
     * @Route("/addreplay/{comment}/{article}", name="replays")
     * @Method({"GET", "POST"})
     */
    
    public function addreplayAction(Request $request, Comments $comment, Article $article)
    {
        $replay    = new Replay();
        $form      = $this->createForm('BackBundle\Form\ReplayType', $replay);
        $em        = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurs = $em->getRepository('UtilisateursBundle:Utilisateurs')->find('2');
            
            $replay->setUtilisateur($utilisateurs);
            $replay->setComment($comment);
 
            $em->persist($replay);
            $em->flush();
            return $this->forward('frontBundle:Default:list', array(
                'slug'  => $article->getSlug(),
            )); 
        }else {
        return  $this->render('front/detail.html.twig', array('article'=>$article, 'form' => $form->createView()));
        }

    }
   
}

<?php

namespace Vlbg\Bundle\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VlbgArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}

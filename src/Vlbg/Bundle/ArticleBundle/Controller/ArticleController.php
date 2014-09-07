<?php

namespace Vlbg\Bundle\ArticleBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Hateoas\Representation\CollectionRepresentation;
use Hateoas\Representation\PaginatedRepresentation;
use Symfony\Component\HttpFoundation\Request;
use Vlbg\Bundle\ArticleBundle\Entity\Article;

class ArticleController extends FOSRestController implements ClassResourceInterface
{
    public function cgetAction(Request $request)
    {
        $articles = array();
        $articles[] = new Article('That\'s a great article!', array(), 1, 'Title');
        $articles[] = new Article('That\'s another great article!', array(), 2, 'Another title');

        $view = $this->view(
            new PaginatedRepresentation(
                new CollectionRepresentation($articles),
                'get_articles',
                array(),
                $request->get('page', 1),
                $request->get('pageSize', 10),
                10
            )
        );

        return $this->handleView($view);
    }

    public function getAction($id)
    {
        // load data
        $article = null;
        if ($id == 1) {
            $article = new Article('That\' a great article!', array(), 1, 'Title');
        }

        if ($article) {
            $view = $this->view($article, 200);
        } else {
            $view = $this->view(null, 404);
        }

        return $this->handleView($view);
    }

    public function postAction(Request $request)
    {
        // create new article
        $article = new Article($request->get('article'), array(), 2, $request->get('title'));

        // save the article

        $view = $this->view($article, 200);

        return $this->handleView($view);
    }

    public function putAction(Request $request, $id)
    {
        // load data
        $article = new Article('That\' a great article!', array(), $id, 'Title');

        // assign new data from request
        $title = $request->get('title');

        // save changes
    }

    public function deleteAction($id)
    {
        // delete data
    }
}

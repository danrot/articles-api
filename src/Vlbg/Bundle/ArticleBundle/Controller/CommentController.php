<?php

namespace Vlbg\Bundle\ArticleBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Vlbg\Bundle\ArticleBundle\Entity\Comment;

class CommentController extends FOSRestController implements ClassResourceInterface
{
    public function getAction($parentId, $id)
    {
        // load data
        $comment = new Comment('That\'s a comment', 1);

        return $this->handleView($this->view($comment, 200));
    }
} 

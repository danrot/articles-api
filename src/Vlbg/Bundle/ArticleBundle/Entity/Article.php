<?php

namespace Vlbg\Bundle\ArticleBundle\Entity;

class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $article;

    /**
     * @var Comment[]
     */
    private $comments;

    function __construct($article, $comments, $id, $title)
    {
        $this->article = $article;
        $this->comments = $comments;
        $this->id = $id;
        $this->title = $title;
    }
} 

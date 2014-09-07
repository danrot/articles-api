<?php

namespace Vlbg\Bundle\ArticleBundle\Entity;

use JMS\Serializer\Annotation\Exclude;

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
     * @Exclude
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

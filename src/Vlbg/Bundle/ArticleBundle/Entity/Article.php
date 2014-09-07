<?php

namespace Vlbg\Bundle\ArticleBundle\Entity;

use Hateoas\Configuration\Annotation\Relation;
use Hateoas\Configuration\Annotation\Route;
use JMS\Serializer\Annotation\Exclude;

/**
 * Class Article
 * @package Vlbg\Bundle\ArticleBundle\Entity
 * @Relation("self", href="expr('articles/' ~ object.getId())")
 */
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

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment[] $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
} 

<?php

namespace Vlbg\Bundle\ArticleBundle\Entity;

/**
 * Class Comment
 * @package Vlbg\Bundle\ArticleBundle\Entity
 */
class Comment
{
    private $id;

    private $comment;

    function __construct($comment, $id)
    {
        $this->comment = $comment;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
} 

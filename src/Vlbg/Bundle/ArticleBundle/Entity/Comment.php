<?php

namespace Vlbg\Bundle\ArticleBundle\Entity;

class Comment
{
    private $id;

    private $comment;

    function __construct($comment, $id)
    {
        $this->comment = $comment;
        $this->id = $id;
    }
} 

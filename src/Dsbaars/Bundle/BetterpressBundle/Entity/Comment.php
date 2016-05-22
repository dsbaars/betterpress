<?php

namespace Dsbaars\Bundle\BetterpressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="Dsbaars\Bundle\BetterpressBundle\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="post", type="integer")
     */
    private $post;

    /**
     * @var int
     *
     * @ORM\Column(name="author", type="integer")
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="karma", type="integer")
     */
    private $karma;

    /**
     * @var bool
     *
     * @ORM\Column(name="isApproved", type="boolean")
     */
    private $isApproved;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set post
     *
     * @param integer $post
     *
     * @return Comment
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return int
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set author
     *
     * @param integer $author
     *
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return int
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set karma
     *
     * @param integer $karma
     *
     * @return Comment
     */
    public function setKarma($karma)
    {
        $this->karma = $karma;

        return $this;
    }

    /**
     * Get karma
     *
     * @return int
     */
    public function getKarma()
    {
        return $this->karma;
    }

    /**
     * Set isApproved
     *
     * @param boolean $isApproved
     *
     * @return Comment
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }
}


<?php

namespace Dsbaars\Bundle\BetterpressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Dsbaars\Bundle\BetterpressBundle\Repository\PostRepository")
 */
class Post
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
     * @var \stdClass
     *
     * @ORM\Column(name="author", type="integer")
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="excerpt", type="text")
     */
    private $excerpt;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var bool
     *
     * @ORM\Column(name="allowComments", type="boolean")
     */
    private $allowComments;

    /**
     * @var bool
     *
     * @ORM\Column(name="allowPings", type="boolean")
     */
    private $allowPings;

    /**
     * @var bool
     *
     * @ORM\Column(name="isProtected", type="boolean")
     */
    private $isProtected;

    /**
     * @var array
     *
     * @ORM\Column(name="toPing", type="array", nullable=true)
     */
    private $toPing;

    /**
     * @var array
     *
     * @ORM\Column(name="pinged", type="array", nullable=true)
     */
    private $pinged;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="parent", type="integer")
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=255)
     */
    private $guid;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

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
     * Set author
     *
     * @param \stdClass $author
     *
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \stdClass
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set excerpt
     *
     * @param string $excerpt
     *
     * @return Post
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Post
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set allowComments
     *
     * @param boolean $allowComments
     *
     * @return Post
     */
    public function setAllowComments($allowComments)
    {
        $this->allowComments = $allowComments;

        return $this;
    }

    /**
     * Get allowComments
     *
     * @return bool
     */
    public function getAllowComments()
    {
        return $this->allowComments;
    }

    /**
     * Set allowPings
     *
     * @param boolean $allowPings
     *
     * @return Post
     */
    public function setAllowPings($allowPings)
    {
        $this->allowPings = $allowPings;

        return $this;
    }

    /**
     * Get allowPings
     *
     * @return bool
     */
    public function getAllowPings()
    {
        return $this->allowPings;
    }

    /**
     * Set isProtected
     *
     * @param boolean $isProtected
     *
     * @return Post
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;

        return $this;
    }

    /**
     * Get isProtected
     *
     * @return bool
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * Set toPing
     *
     * @param array $toPing
     *
     * @return Post
     */
    public function setToPing($toPing)
    {
        $this->toPing = $toPing;

        return $this;
    }

    /**
     * Get toPing
     *
     * @return array
     */
    public function getToPing()
    {
        return $this->toPing;
    }

    /**
     * Set pinged
     *
     * @param array $pinged
     *
     * @return Post
     */
    public function setPinged($pinged)
    {
        $this->pinged = $pinged;

        return $this;
    }

    /**
     * Get pinged
     *
     * @return array
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Set parent
     *
     * @param \stdClass $parent
     *
     * @return Post
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \stdClass
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set guid
     *
     * @param string $guid
     *
     * @return Post
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

}


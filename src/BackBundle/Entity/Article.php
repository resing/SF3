<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=false)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", unique=false)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */

    private $author;
    /**
     * @var string
     *
     * @ORM\Column(name="urlvideo", type="string", length=255, nullable=true, unique=false)
     */
    private $urlvideo;
    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;
    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
    * @ORM\JoinColumn(nullable=false)
    */
    private $category;
    /**
    * @Gedmo\Slug(fields={"title"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;
    /**
    * @ORM\OneToMany(targetEntity="Media", mappedBy="article")
    * @ORM\JoinColumn(nullable=false)
    */
    private $medias;
    /**
    * @ORM\OneToMany(targetEntity="Comments", mappedBy="article")
    * @ORM\JoinColumn(nullable=false)
    */
    private $comments;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
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
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set author
     *
     * @param string $author
     *
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }
    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Set urlvideo
     *
     * @param string $urlvideo
     *
     * @return Article
     */
    public function setUrlvideo($urlvideo)
    {
        $this->urlvideo = $urlvideo;
        return $this;
    }
    /**
     * Get urlvideo
     *
     * @return string
     */
    public function getUrlvideo()
    {
        return $this->urlvideo;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Article
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Article
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Article
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set category
     *
     * @param \BackBundle\Entity\Category $category
     *
     * @return Article
     */
    public function setCategory(\BackBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BackBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function __toString()
    {
        return $this->getTitle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add media
     *
     * @param \BackBundle\Entity\Media $media
     *
     * @return Article
     */
    public function addMedias(\BackBundle\Entity\Media $media)
    {
        $this->medias[] = $media;
        return $this;
    }
    /**
     * Remove media
     *
     * @param \BackBundle\Entity\Media $media
     */
    public function removeMedias(\BackBundle\Entity\Media $media)
    {
        $this->medias->removeElement($media);
    }
    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add media
     *
     * @param \BackBundle\Entity\Media $media
     *
     * @return Article
     */
    public function addMedia(\BackBundle\Entity\Media $media)
    {
        $this->medias[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \BackBundle\Entity\Media $media
     */
    public function removeMedia(\BackBundle\Entity\Media $media)
    {
        $this->medias->removeElement($media);
    }

    /**
     * Add comment
     *
     * @param \BackBundle\Entity\Comments $comment
     *
     * @return Article
     */
    public function addComment(\BackBundle\Entity\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \BackBundle\Entity\Comments $comment
     */
    public function removeComment(\BackBundle\Entity\Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}

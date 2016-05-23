<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="description", type="text",nullable=false)
     * @Assert\NotBlank()
     */
    private $description;
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    /**
    * @ORM\OneToMany(targetEntity="BackBundle\Entity\Replay",mappedBy="comment")
    */
    private $replays;
    /**
    * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="comments")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;
    /**
    * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Article", inversedBy="comments")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;
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
     * Set description
     *
     * @param string $description
     *
     * @return Comments
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comments
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
     * Constructor
     */
    public function __construct()
    {
        $this->replays = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add replay
     *
     * @param \BackBundle\Entity\Replay $replay
     *
     * @return Comments
     */
    public function addReplay(\BackBundle\Entity\Replay $replay)
    {
        $this->replays[] = $replay;

        return $this;
    }

    /**
     * Remove replay
     *
     * @param \BackBundle\Entity\Replay $replay
     */
    public function removeReplay(\BackBundle\Entity\Replay $replay)
    {
        $this->replays->removeElement($replay);
    }

    /**
     * Get replays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReplays()
    {
        return $this->replays;
    }

    /**
     * Set utilisateur
     *
     * @param \UtilisateursBundle\Entity\Utilisateurs $utilisateur
     *
     * @return Comments
     */
    public function setUtilisateur(\UtilisateursBundle\Entity\Utilisateurs $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \UtilisateursBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set article
     *
     * @param \BackBundle\Entity\Article $article
     *
     * @return Comments
     */
    public function setArticle(\BackBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BackBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}

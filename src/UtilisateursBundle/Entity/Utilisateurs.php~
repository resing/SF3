<?php

namespace UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
    * @ORM\OneToMany(targetEntity="BackBundle\Entity\Comments",mappedBy="utilisateur")
    */
private $comments;
    /**
    * @ORM\OneToMany(targetEntity="BackBundle\Entity\Replay",mappedBy="utilisateur")
    */
    private $replays;
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add comment
     *
     * @param \BackBundle\Entity\Comments $comment
     *
     * @return Utilisateurs
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

    /**
     * Add replay
     *
     * @param \BackBundle\Entity\Replay $replay
     *
     * @return Utilisateurs
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
}

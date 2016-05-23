<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\MediaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Media
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private   $name;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private  $path;
    
    public $file;
    
    /**
    * @ORM\ManyToOne(targetEntity="Article", inversedBy="medias")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set article
     *
     * @param \BackBundle\Entity\Article $article
     *
     * @return Media
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
    
     protected function getUploadRootDir()
    {
        // le chemin absolu du r�pertoire o� les documents upload�s doivent �tre sauvegard�s
         return __DIR__.'../../../../web/uploads';
    }
    public function getAbsolutePath()
    {
        
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
    
    /**
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updated = new \DateTime();
    }
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile  = $this->getPath();
        $this->updated = new \DateTime();
        if (null !== $this->file) {
            // faites ce que vous voulez pour g�n�rer un nom unique
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }
    public function getAssetPath()
    {
        return 'uploads/'.$this->path;
    }
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null !== $this->file) {
            
            $this->file->move($this->getUploadRootDir(), $this->path);
            unset($this->file);
            if($this->oldFile != null ) unlink ($this->tempFile);
        }
    }
     /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
      
        if(file_exists($this->tempFile)) unlink ($this->tempFile);
        
    }
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Set path
     *
     * @param string $path
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Media
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
     * @return Media
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
}

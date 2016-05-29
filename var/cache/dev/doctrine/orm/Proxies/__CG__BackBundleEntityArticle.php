<?php

namespace Proxies\__CG__\BackBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \BackBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'author', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'urlvideo', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'active', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'created', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'updated', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'category', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'slug', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'medias', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'comments'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'author', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'urlvideo', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'active', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'created', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'updated', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'category', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'slug', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'medias', '' . "\0" . 'BackBundle\\Entity\\Article' . "\0" . 'comments'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlvideo($urlvideo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrlvideo', [$urlvideo]);

        return parent::setUrlvideo($urlvideo);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlvideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrlvideo', []);

        return parent::getUrlvideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\BackBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedias(\BackBundle\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedias', [$media]);

        return parent::addMedias($media);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedias(\BackBundle\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedias', [$media]);

        return parent::removeMedias($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedias', []);

        return parent::getMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function addMedia(\BackBundle\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedia', [$media]);

        return parent::addMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedia(\BackBundle\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedia', [$media]);

        return parent::removeMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\BackBundle\Entity\Comments $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\BackBundle\Entity\Comments $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

}

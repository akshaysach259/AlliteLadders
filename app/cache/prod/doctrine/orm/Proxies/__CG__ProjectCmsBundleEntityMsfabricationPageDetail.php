<?php

namespace Proxies\__CG__\ProjectCmsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MsfabricationPageDetail extends \ProjectCmsBundle\Entity\MsfabricationPageDetail implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'id', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'fabricationName', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'pageUrl', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'pageDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'shortDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'msfcatId', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaTitle', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaKeyword', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'status', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'priority', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'image', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'firstimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'secondimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'thirdimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'forthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'fifthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'sixthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'seventhimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'eightthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'ninthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'tenthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'created', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'updated'];
        }

        return ['__isInitialized__', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'id', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'fabricationName', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'pageUrl', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'pageDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'shortDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'msfcatId', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaTitle', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaDescription', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'metaKeyword', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'status', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'priority', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'image', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'firstimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'secondimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'thirdimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'forthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'fifthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'sixthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'seventhimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'eightthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'ninthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'tenthimage', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'created', '' . "\0" . 'ProjectCmsBundle\\Entity\\MsfabricationPageDetail' . "\0" . 'updated'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MsfabricationPageDetail $proxy) {
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
    public function setFabricationName($fabricationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFabricationName', [$fabricationName]);

        return parent::setFabricationName($fabricationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFabricationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFabricationName', []);

        return parent::getFabricationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPageUrl($pageUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPageUrl', [$pageUrl]);

        return parent::setPageUrl($pageUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getPageUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageUrl', []);

        return parent::getPageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPageDescription($pageDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPageDescription', [$pageDescription]);

        return parent::setPageDescription($pageDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getPageDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageDescription', []);

        return parent::getPageDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortDescription($shortDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortDescription', [$shortDescription]);

        return parent::setShortDescription($shortDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortDescription', []);

        return parent::getShortDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaTitle($metaTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaTitle', [$metaTitle]);

        return parent::setMetaTitle($metaTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTitle', []);

        return parent::getMetaTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', [$metaDescription]);

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', []);

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaKeyword($metaKeyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaKeyword', [$metaKeyword]);

        return parent::setMetaKeyword($metaKeyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaKeyword', []);

        return parent::getMetaKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
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
    public function setMsfcatId(\ProjectCmsBundle\Entity\MsfabricationPage $msfcatId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMsfcatId', [$msfcatId]);

        return parent::setMsfcatId($msfcatId);
    }

    /**
     * {@inheritDoc}
     */
    public function getMsfcatId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMsfcatId', []);

        return parent::getMsfcatId();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstimage(\Application\Sonata\MediaBundle\Entity\Media $firstimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstimage', [$firstimage]);

        return parent::setFirstimage($firstimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstimage', []);

        return parent::getFirstimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecondimage(\Application\Sonata\MediaBundle\Entity\Media $secondimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecondimage', [$secondimage]);

        return parent::setSecondimage($secondimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecondimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecondimage', []);

        return parent::getSecondimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setThirdimage(\Application\Sonata\MediaBundle\Entity\Media $thirdimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThirdimage', [$thirdimage]);

        return parent::setThirdimage($thirdimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getThirdimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThirdimage', []);

        return parent::getThirdimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setForthimage(\Application\Sonata\MediaBundle\Entity\Media $forthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForthimage', [$forthimage]);

        return parent::setForthimage($forthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getForthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForthimage', []);

        return parent::getForthimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setFifthimage(\Application\Sonata\MediaBundle\Entity\Media $fifthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFifthimage', [$fifthimage]);

        return parent::setFifthimage($fifthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getFifthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFifthimage', []);

        return parent::getFifthimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSixthimage(\Application\Sonata\MediaBundle\Entity\Media $sixthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSixthimage', [$sixthimage]);

        return parent::setSixthimage($sixthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getSixthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSixthimage', []);

        return parent::getSixthimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeventhimage(\Application\Sonata\MediaBundle\Entity\Media $seventhimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeventhimage', [$seventhimage]);

        return parent::setSeventhimage($seventhimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeventhimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeventhimage', []);

        return parent::getSeventhimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setEightthimage(\Application\Sonata\MediaBundle\Entity\Media $eightthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEightthimage', [$eightthimage]);

        return parent::setEightthimage($eightthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getEightthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEightthimage', []);

        return parent::getEightthimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setNinthimage(\Application\Sonata\MediaBundle\Entity\Media $ninthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNinthimage', [$ninthimage]);

        return parent::setNinthimage($ninthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getNinthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNinthimage', []);

        return parent::getNinthimage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTenthimage(\Application\Sonata\MediaBundle\Entity\Media $tenthimage = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTenthimage', [$tenthimage]);

        return parent::setTenthimage($tenthimage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTenthimage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTenthimage', []);

        return parent::getTenthimage();
    }

}

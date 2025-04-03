<?php

namespace ProjectCmsBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSubPage
 *
 * @ORM\Table(name="product_sub_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class ProductSubPage
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
     * @ORM\Column(name="pageTitle", type="string", length=255)
     */
    private $pageTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="pageUrl", type="string", length=255)
     */
    private $pageUrl;


    /**
     * @var ProjectCmsBundle\Entity\ProductMainPage
     *
     * @ORM\ManyToOne(targetEntity="ProjectCmsBundle\Entity\ProductMainPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_mainpagecat_id", referencedColumnName="id")
     * })
     */
    private $productmainpagecatId;
 

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", options={"default" = 0})
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="priority",nullable=true, type="integer",options={"default" = 0})
     */
    private $priority;
      /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

   /**
    * To String
    *
    * @return string
    */
   public function __toString() {
      return $this->getPageTitle()."(".$this->getProductmainpagecatId().")";
   }

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
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return ProductSubPage
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set pageUrl
     *
     * @param string $pageUrl
     *
     * @return ProductSubPage
     */
    public function setPageUrl($pageUrl)
    {
        $this->pageUrl = $pageUrl;

        return $this;
    }

    /**
     * Get pageUrl
     *
     * @return string
     */
    public function getPageUrl()
    {
        return $this->pageUrl;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ProductSubPage
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return ProductSubPage
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ProductSubPage
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
     * @return ProductSubPage
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
     * Set productmainpagecatId
     *
     * @param \ProjectCmsBundle\Entity\ProductMainPage $productmainpagecatId
     *
     * @return ProductSubPage
     */
    public function setProductmainpagecatId(\ProjectCmsBundle\Entity\ProductMainPage $productmainpagecatId = null)
    {
        $this->productmainpagecatId = $productmainpagecatId;

        return $this;
    }

    /**
     * Get productmainpagecatId
     *
     * @return \ProjectCmsBundle\Entity\ProductMainPage
     */
    public function getProductmainpagecatId()
    {
        return $this->productmainpagecatId;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return ProductSubPage
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }
}

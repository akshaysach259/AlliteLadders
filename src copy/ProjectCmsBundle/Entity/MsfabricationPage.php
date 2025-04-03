<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MsfabricationPage
 *
 * @ORM\Table(name="main_msfabrication_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class MsfabricationPage
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
     * @var string
     *
     * @ORM\Column(name="metaTitle", type="string", length=255)
     */
    private $metaTitle;


    /**
     * @var string
     *
     * @ORM\Column(name="metaDescription", type="string", length=255)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="metaKeyword", type="string", length=255)
     */
    private $metaKeyword;



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
	return $this->pageTitle;
      }

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
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return ProductMainPage
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
     * @return ProductMainPage
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
     * @return ProductMainPage
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
     * @return ProductMainPage
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
     * @return ProductMainPage
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
     * @return ProductMainPage
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
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return ProductMainPage
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

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return ProductMainPage
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return ProductMainPage
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set metaKeyword
     *
     * @param string $metaKeyword
     *
     * @return ProductMainPage
     */
    public function setMetaKeyword($metaKeyword)
    {
        $this->metaKeyword = $metaKeyword;

        return $this;
    }

    /**
     * Get metaKeyword
     *
     * @return string
     */
    public function getMetaKeyword()
    {
        return $this->metaKeyword;
    }
}

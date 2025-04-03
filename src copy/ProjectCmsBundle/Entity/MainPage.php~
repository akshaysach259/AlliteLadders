<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MainPage
 *
 * @ORM\Table(name="main_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class MainPage
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
     * @var string
     *
     * @ORM\Column(name="pageDescription", type="text",nullable=true)
     */
    private $pageDescription;

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
     * @return MainPage
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
     * @return MainPage
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
     * Set pageDescription
     *
     * @param string $pageDescription
     *
     * @return MainPage
     */
    public function setPageDescription($pageDescription)
    {
        $this->pageDescription = $pageDescription;

        return $this;
    }

    /**
     * Get pageDescription
     *
     * @return string
     */
    public function getPageDescription()
    {
        return $this->pageDescription;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MainPage
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
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
     * @return MainPage
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return int
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
     * @return MainPage
     */
    public function setCreated($created)
    {
       if(!$this->created){
            $this->created = new \DateTime();
        }
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
     * @return MainPage
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
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return MainPage
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
     * @return MainPage
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
     * @return MainPage
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

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return MainPage
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

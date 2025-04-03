<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * BlogPage
 *
 * @ORM\Table(name="blog_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class BlogPage
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
     * @ORM\Column(name="blogTitle", type="string", length=255)
     */
    private $blogTitle;

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
     * @ORM\Column(name="feature",nullable=true, type="integer",options={"default" = 0})
     */
    private $feature;
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
	return $this->blogTitle;
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
     * Set blogTitle
     *
     * @param string $blogTitle
     *
     * @return BlogPage
     */
    public function setBlogTitle($blogTitle)
    {
        $this->blogTitle = $blogTitle;

        return $this;
    }

    /**
     * Get blogTitle
     *
     * @return string
     */
    public function getBlogTitle()
    {
        return $this->blogTitle;
    }

    /**
     * Set pageUrl
     *
     * @param string $pageUrl
     *
     * @return BlogPage
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
     * @return BlogPage
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
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return BlogPage
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
     * @return BlogPage
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
     * @return BlogPage
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
     * Set status
     *
     * @param boolean $status
     *
     * @return BlogPage
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
     * Set feature
     *
     * @param integer $feature
     *
     * @return BlogPage
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return integer
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return BlogPage
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
     * @return BlogPage
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
     * @return BlogPage
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

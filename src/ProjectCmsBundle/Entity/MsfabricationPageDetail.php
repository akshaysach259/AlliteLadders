<?php

namespace ProjectCmsBundle\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * MsfabricationPageDetail
 *
 * @ORM\Table(name="msfabricationdetail_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class MsfabricationPageDetail
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
     * @ORM\Column(name="fabricationName", type="string", length=255)
     */
    private $fabricationName;

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
     * @ORM\Column(name="shortDescription", type="text",nullable=true)
     */
    private $shortDescription;


    /**
     * @var ProjectCmsBundle\Entity\MsfabricationPage
     *
     * @ORM\ManyToOne(targetEntity="ProjectCmsBundle\Entity\MsfabricationPage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="msf_cat_id", referencedColumnName="id")
     * })
     */
    private $msfcatId;

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
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $firstimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $secondimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $thirdimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $forthimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $fifthimage;
     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $sixthimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $seventhimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $eightthimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $ninthimage;

     /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $tenthimage;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

   

    /**
     * Set fabricationName
     *
     * @param string $fabricationName
     *
     * @return MsfabricationPageDetail
     */
    public function setFabricationName($fabricationName)
    {
        $this->fabricationName = $fabricationName;

        return $this;
    }

    /**
     * Get fabricationName
     *
     * @return string
     */
    public function getFabricationName()
    {
        return $this->fabricationName;
    }

    /**
     * Set pageUrl
     *
     * @param string $pageUrl
     *
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return MsfabricationPageDetail
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * @return MsfabricationPageDetail
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
     * Set msfcatId
     *
     * @param \ProjectCmsBundle\Entity\MsfabricationPage $msfcatId
     *
     * @return MsfabricationPageDetail
     */
    public function setMsfcatId(\ProjectCmsBundle\Entity\MsfabricationPage $msfcatId = null)
    {
        $this->msfcatId = $msfcatId;

        return $this;
    }

    /**
     * Get msfcatId
     *
     * @return \ProjectCmsBundle\Entity\MsfabricationPage
     */
    public function getMsfcatId()
    {
        return $this->msfcatId;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return MsfabricationPageDetail
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
     * Set firstimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $firstimage
     *
     * @return MsfabricationPageDetail
     */
    public function setFirstimage(\Application\Sonata\MediaBundle\Entity\Media $firstimage = null)
    {
        $this->firstimage = $firstimage;

        return $this;
    }

    /**
     * Get firstimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getFirstimage()
    {
        return $this->firstimage;
    }

    /**
     * Set secondimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $secondimage
     *
     * @return MsfabricationPageDetail
     */
    public function setSecondimage(\Application\Sonata\MediaBundle\Entity\Media $secondimage = null)
    {
        $this->secondimage = $secondimage;

        return $this;
    }

    /**
     * Get secondimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getSecondimage()
    {
        return $this->secondimage;
    }

    /**
     * Set thirdimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $thirdimage
     *
     * @return MsfabricationPageDetail
     */
    public function setThirdimage(\Application\Sonata\MediaBundle\Entity\Media $thirdimage = null)
    {
        $this->thirdimage = $thirdimage;

        return $this;
    }

    /**
     * Get thirdimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getThirdimage()
    {
        return $this->thirdimage;
    }

    /**
     * Set forthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $forthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setForthimage(\Application\Sonata\MediaBundle\Entity\Media $forthimage = null)
    {
        $this->forthimage = $forthimage;

        return $this;
    }

    /**
     * Get forthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getForthimage()
    {
        return $this->forthimage;
    }

    /**
     * Set fifthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $fifthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setFifthimage(\Application\Sonata\MediaBundle\Entity\Media $fifthimage = null)
    {
        $this->fifthimage = $fifthimage;

        return $this;
    }

    /**
     * Get fifthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getFifthimage()
    {
        return $this->fifthimage;
    }

    /**
     * Set sixthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $sixthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setSixthimage(\Application\Sonata\MediaBundle\Entity\Media $sixthimage = null)
    {
        $this->sixthimage = $sixthimage;

        return $this;
    }

    /**
     * Get sixthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getSixthimage()
    {
        return $this->sixthimage;
    }

    /**
     * Set seventhimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $seventhimage
     *
     * @return MsfabricationPageDetail
     */
    public function setSeventhimage(\Application\Sonata\MediaBundle\Entity\Media $seventhimage = null)
    {
        $this->seventhimage = $seventhimage;

        return $this;
    }

    /**
     * Get seventhimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getSeventhimage()
    {
        return $this->seventhimage;
    }

    /**
     * Set eightthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $eightthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setEightthimage(\Application\Sonata\MediaBundle\Entity\Media $eightthimage = null)
    {
        $this->eightthimage = $eightthimage;

        return $this;
    }

    /**
     * Get eightthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getEightthimage()
    {
        return $this->eightthimage;
    }

    /**
     * Set ninthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $ninthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setNinthimage(\Application\Sonata\MediaBundle\Entity\Media $ninthimage = null)
    {
        $this->ninthimage = $ninthimage;

        return $this;
    }

    /**
     * Get ninthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getNinthimage()
    {
        return $this->ninthimage;
    }

    /**
     * Set tenthimage
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $tenthimage
     *
     * @return MsfabricationPageDetail
     */
    public function setTenthimage(\Application\Sonata\MediaBundle\Entity\Media $tenthimage = null)
    {
        $this->tenthimage = $tenthimage;

        return $this;
    }

    /**
     * Get tenthimage
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getTenthimage()
    {
        return $this->tenthimage;
    }
}

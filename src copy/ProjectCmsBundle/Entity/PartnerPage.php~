<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PartnerPage
 *
 * @ORM\Table(name="partner_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class PartnerPage
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
     * @ORM\Column(name="partnerTitle", type="string", length=255)
     */
    private $partnerTitle;

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
	return $this->partnerTitle;
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
     * Set partnerTitle
     *
     * @param string $partnerTitle
     *
     * @return PartnerPage
     */
    public function setPartnerTitle($partnerTitle)
    {
        $this->partnerTitle = $partnerTitle;

        return $this;
    }

    /**
     * Get partnerTitle
     *
     * @return string
     */
    public function getPartnerTitle()
    {
        return $this->partnerTitle;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PartnerPage
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
     * @return PartnerPage
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
     * @return PartnerPage
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
     * @return PartnerPage
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
     * @return PartnerPage
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

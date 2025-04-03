<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * MachinePage
 *
 * @ORM\Table(name="machine_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class MachinePage
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
     * @ORM\Column(name="machineName", type="string", length=255)
     */
    private $machineName;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set machineName
     *
     * @param string $machineName
     *
     * @return MachinePage
     */
    public function setMachineName($machineName)
    {
        $this->machineName = $machineName;

        return $this;
    }

    /**
     * Get machineName
     *
     * @return string
     */
    public function getMachineName()
    {
        return $this->machineName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MachinePage
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
     * @return MachinePage
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
     * @return MachinePage
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
     * @return MachinePage
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
     * @return MachinePage
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

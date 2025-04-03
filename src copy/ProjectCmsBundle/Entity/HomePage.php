<?php

namespace ProjectCmsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 *
 * @ORM\Table(name="home_page")
 * @ORM\Entity(repositoryClass="ProjectCmsBundle\Repository\MainPageRepository")
 */
class HomePage
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
     * @ORM\Column(name="pageTitle1", type="string", length=255)
     */
    private $pageTitle1;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitleDesc1", type="string", length=255)
     */
    private $pageTitleDesc1;

    /**
     * @var string
     *
     * @ORM\Column(name="pageUrl1", type="string", length=255)
     */
    private $pageUrl1;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle2", type="string", length=255)
     */
    private $pageTitle2;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitleDesc2", type="string", length=255)
     */
    private $pageTitleDesc2;

    /**
     * @var string
     *
     * @ORM\Column(name="pageUrl2", type="string", length=255)
     */
    private $pageUrl2;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle3", type="string", length=255)
     */
    private $pageTitle3;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitleDesc3", type="string", length=255)
     */
    private $pageTitleDesc3;

    /**
     * @var string
     *
     * @ORM\Column(name="pageUrl3", type="string", length=255)
     */
    private $pageUrl3;

   /**
     * @var string
     *
     * @ORM\Column(name="pageTitle4", type="string", length=255)
     */
    private $pageTitle4;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitleDesc4", type="string", length=255)
     */
    private $pageTitleDesc4;

    /**
     * @var string
     *
     * @ORM\Column(name="pageUrl4", type="string", length=255)
     */
    private $pageUrl4;

      /**
	* @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
	*/
    private $image;

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
     * Set pageTitle1
     *
     * @param string $pageTitle1
     *
     * @return HomePage
     */
    public function setPageTitle1($pageTitle1)
    {
        $this->pageTitle1 = $pageTitle1;

        return $this;
    }

    /**
     * Get pageTitle1
     *
     * @return string
     */
    public function getPageTitle1()
    {
        return $this->pageTitle1;
    }

    /**
     * Set pageTitleDesc1
     *
     * @param string $pageTitleDesc1
     *
     * @return HomePage
     */
    public function setPageTitleDesc1($pageTitleDesc1)
    {
        $this->pageTitleDesc1 = $pageTitleDesc1;

        return $this;
    }

    /**
     * Get pageTitleDesc1
     *
     * @return string
     */
    public function getPageTitleDesc1()
    {
        return $this->pageTitleDesc1;
    }

    /**
     * Set pageUrl1
     *
     * @param string $pageUrl1
     *
     * @return HomePage
     */
    public function setPageUrl1($pageUrl1)
    {
        $this->pageUrl1 = $pageUrl1;

        return $this;
    }

    /**
     * Get pageUrl1
     *
     * @return string
     */
    public function getPageUrl1()
    {
        return $this->pageUrl1;
    }

    /**
     * Set pageTitle2
     *
     * @param string $pageTitle2
     *
     * @return HomePage
     */
    public function setPageTitle2($pageTitle2)
    {
        $this->pageTitle2 = $pageTitle2;

        return $this;
    }

    /**
     * Get pageTitle2
     *
     * @return string
     */
    public function getPageTitle2()
    {
        return $this->pageTitle2;
    }

    /**
     * Set pageTitleDesc2
     *
     * @param string $pageTitleDesc2
     *
     * @return HomePage
     */
    public function setPageTitleDesc2($pageTitleDesc2)
    {
        $this->pageTitleDesc2 = $pageTitleDesc2;

        return $this;
    }

    /**
     * Get pageTitleDesc2
     *
     * @return string
     */
    public function getPageTitleDesc2()
    {
        return $this->pageTitleDesc2;
    }

    /**
     * Set pageUrl2
     *
     * @param string $pageUrl2
     *
     * @return HomePage
     */
    public function setPageUrl2($pageUrl2)
    {
        $this->pageUrl2 = $pageUrl2;

        return $this;
    }

    /**
     * Get pageUrl2
     *
     * @return string
     */
    public function getPageUrl2()
    {
        return $this->pageUrl2;
    }

    /**
     * Set pageTitle3
     *
     * @param string $pageTitle3
     *
     * @return HomePage
     */
    public function setPageTitle3($pageTitle3)
    {
        $this->pageTitle3 = $pageTitle3;

        return $this;
    }

    /**
     * Get pageTitle3
     *
     * @return string
     */
    public function getPageTitle3()
    {
        return $this->pageTitle3;
    }

    /**
     * Set pageTitleDesc3
     *
     * @param string $pageTitleDesc3
     *
     * @return HomePage
     */
    public function setPageTitleDesc3($pageTitleDesc3)
    {
        $this->pageTitleDesc3 = $pageTitleDesc3;

        return $this;
    }

    /**
     * Get pageTitleDesc3
     *
     * @return string
     */
    public function getPageTitleDesc3()
    {
        return $this->pageTitleDesc3;
    }

    /**
     * Set pageUrl3
     *
     * @param string $pageUrl3
     *
     * @return HomePage
     */
    public function setPageUrl3($pageUrl3)
    {
        $this->pageUrl3 = $pageUrl3;

        return $this;
    }

    /**
     * Get pageUrl3
     *
     * @return string
     */
    public function getPageUrl3()
    {
        return $this->pageUrl3;
    }



    /**
     * Set pageTitle4
     *
     * @param string $pageTitle4
     *
     * @return HomePage
     */
    public function setPageTitle4($pageTitle4)
    {
        $this->pageTitle4 = $pageTitle4;

        return $this;
    }

    /**
     * Get pageTitle4
     *
     * @return string
     */
    public function getPageTitle4()
    {
        return $this->pageTitle4;
    }

    /**
     * Set pageTitleDesc4
     *
     * @param string $pageTitleDesc4
     *
     * @return HomePage
     */
    public function setPageTitleDesc4($pageTitleDesc4)
    {
        $this->pageTitleDesc4 = $pageTitleDesc4;

        return $this;
    }

    /**
     * Get pageTitleDesc4
     *
     * @return string
     */
    public function getPageTitleDesc4()
    {
        return $this->pageTitleDesc4;
    }

    /**
     * Set pageUrl4
     *
     * @param string $pageUrl4
     *
     * @return HomePage
     */
    public function setPageUrl4($pageUrl4)
    {
        $this->pageUrl4 = $pageUrl4;

        return $this;
    }

    /**
     * Get pageUrl4
     *
     * @return string
     */
    public function getPageUrl4()
    {
        return $this->pageUrl4;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return HomePage
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

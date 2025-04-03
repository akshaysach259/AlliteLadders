<?php

namespace ProjectCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ProjectCmsBundle\Entity\EnquiryPage;


class DefaultController extends Controller
{
    /**
     * @Route("/" ,name="_page_home")
     */
    public function indexAction()
    {
        
        $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Aluminium Ladders|Best High Quality Aluminium Ladders Manufacturer Company-Allied Ladders';
        $seoPage->setTitle($finalMetaTitle); 
        $finalMetadescription = "Description:Aluminium Ladders-Allied Is The Best Aluminium Ladders Manufacturer Company In India Since 1972. Our Aluminium Ladders are working in prestigious places like Rashtrapati Bhawan, Parliament House, Pragati Maidan, Etc";
        $keywords = "Keyword:Aluminium ladders, Aluminium Ladders Manufacturer, Aluminium Ladders Manufacturer Company In Delhi, Aluminium Ladders Manufacturer Company In Noida, Aluminium Ladders Manufacturer Company in ghaziabad, Aluminium Ladders Manufacturer Company in Gurgaon";
        
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        
        $querySubMenu = array();
	$mailPageId = 3;
	$mailPageIdForProduct = 2;
	$em = $this->getDoctrine()->getManager();
        $homePage = $em->createQuery("SELECT s FROM ProjectCmsBundle:HomePage s")
                 	    ->setMaxResults($limit=1)
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryProducts = $em->createQuery("SELECT s FROM ProjectCmsBundle:ProductPage s where s.status=1 ORDER BY s.priority DESC")	    ->setMaxResults($limit=4)
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $projectCat = $em->createQuery("SELECT s FROM ProjectCmsBundle:ProjectMainPage s where s.status=1")
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $projectList = $em->createQuery("SELECT s FROM ProjectCmsBundle:ProjectPage s where s.status=1")
                            ->setMaxResults($limit=6)
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryVideos = $em->createQuery("SELECT s FROM ProjectCmsBundle:VideosPage s where s.status=1 and s.displayonhomepage='1'")	    ->setMaxResults($limit=1)
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryaboutUs = $em->createQuery("SELECT s FROM ProjectCmsBundle:MainPage s where s.id='12'")
                           ->setMaxResults($limit=1)
		           ->getResult();

$em = $this->getDoctrine()->getManager();
        $querytestimonials = $em->createQuery("SELECT s FROM ProjectCmsBundle:TestimonialPage s where s.status=1")
		           ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryPartner = $em->createQuery("SELECT s FROM ProjectCmsBundle:PartnerPage s where s.status=1")
		           ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryBlog = $em->createQuery("SELECT s FROM ProjectCmsBundle:BlogPage s where s.status=1 order by s.feature")
                            ->setMaxResults($limit=2)
		           ->getResult();

$em = $this->getDoctrine()->getManager();
        $productCat = $em->createQuery("SELECT s FROM ProjectCmsBundle:ProductMainPage s where s.status=1")
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $clientList = $em->createQuery("SELECT s FROM ProjectCmsBundle:MachinePage s where s.status=1")
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $testimonialList = $em->createQuery("SELECT s FROM ProjectCmsBundle:TestimonialPage s where s.status=1")
		            ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryVideo = $em->createQuery("SELECT s FROM ProjectCmsBundle:VideosPage s where s.status=1 and s.displayonhomepage=1")
                            ->setMaxResults($limit=1)
		           ->getResult();

$em = $this->getDoctrine()->getManager();
        $queryNews = $em->createQuery("SELECT s FROM ProjectCmsBundle:BlogPage s where s.status=1 ")
                            ->setMaxResults($limit=3)
		           ->getResult();



        return $this->render('ProjectCmsBundle:Default:index.html.twig',array('homePage' => $homePage,'queryProducts'=>$queryProducts,'queryVideos'=>$queryVideos,'queryaboutUs'=>$queryaboutUs,'querytestimonials'=>$querytestimonials,'queryPartner'=>$queryPartner,'projectCat'=>$projectCat,'projectList'=>$projectList,'queryBlog'=>$queryBlog,'productCat'=>$productCat,'clientList'=>$clientList,'testimonialList'=>$testimonialList,'queryVideo'=>$queryVideo,'queryNews'=>$queryNews));
    }

   /**
     * @Route("/header")
     */
    public function headerAction()
    {
	$querySubMenu = array();
	$query2ndSubMenu = array();

	$mainProductMenu = array();
	$querySubProduct = array();

        $em = $this->getDoctrine()->getManager();

        $productquery = $em->createQuery('SELECT p FROM ProjectCmsBundle:ProductMainPage p where p.status=1 ORDER BY p.priority DESC')
		           ->getResult();
        if(count($productquery)>0){
          foreach($productquery as $productqueryResult){
          $mainProductId = $productqueryResult->getId();
           if($mainProductId>0){
           $querySubProduct[$mainProductId] = $em->createQuery("SELECT s FROM ProjectCmsBundle:ProductSubPage s where s.status=1 and s.productmainpagecatId='".$mainProductId."' ORDER BY s.priority DESC")
		           ->getResult();


	       }
	    }
	  }

        $query = $em->createQuery('SELECT p FROM ProjectCmsBundle:MainPage p where p.status=1 ORDER BY p.priority DESC')
		->getResult();
        if(count($query)>0){
          foreach($query as $queryResult){
          $mailPageId = $queryResult->getId();
           if($mailPageId>0){
           $querySubMenu[$mailPageId] = $em->createQuery("SELECT s FROM ProjectCmsBundle:SubPage s where s.status=1 and s.mainpageId='".$mailPageId."' ORDER BY s.priority DESC")
		           ->getResult();
		if(count($querySubMenu[$mailPageId])>0){
			  foreach($querySubMenu[$mailPageId] as $queryResult){
			  $subPageId = $queryResult->getId();
			       if($subPageId>0){
			   $query2ndSubMenu[$subPageId] = $em->createQuery("SELECT s FROM ProjectCmsBundle:SubThirdPage s where s.status=1 and s.subpageId='".$subPageId."' ORDER BY s.priority DESC")
					   ->getResult();

			       }
			   }
		}
           }        
          }

        }
        
        $projectquery = $em->createQuery('SELECT p FROM ProjectCmsBundle:ProjectMainPage p where p.status=1 ')
		           ->getResult();
        

        return $this->render('ProjectCmsBundle:Default:header.html.twig',array('mainMenu' => $query, 'submenu' => $querySubMenu, 'subthirdmenu' => $query2ndSubMenu,'mainProductMenu' => $productquery, 'subProductmenu' => $querySubProduct,'projectquery'=>$projectquery));
    }

   /**
     * @Route("/footer")
     */
    public function footerAction()
    {

$em = $this->getDoctrine()->getManager();

        $queryPartner = $em->createQuery("SELECT s FROM ProjectCmsBundle:PartnerPage s where s.status=1")
		           ->getResult();

        $queryAboutUs = $em->createQuery("SELECT s FROM ProjectCmsBundle:MainPage s where s.status=1 and s.id='1'")
                           ->setMaxResults($limit=1)
		           ->getResult();

        $queryMainLink = $em->createQuery("SELECT s FROM ProjectCmsBundle:MainPage s where s.status=1")
                           ->setMaxResults($limit=6)
		           ->getResult();

        return $this->render('ProjectCmsBundle:Default:footer.html.twig',array('queryAboutUs' => $queryAboutUs,'queryMainLink' => $queryMainLink,'queryPartner'=>$queryPartner));
    }


   /**
     * @Route("/slider")
     */
    public function sliderAction()
    {
        return $this->render('ProjectCmsBundle:Default:slider.html.twig');
    }

   /**
     * @Route("/fabricationslider")
     */
    public function fabricationsliderAction()
    {
        return $this->render('ProjectCmsBundle:Default:fabricationslider.html.twig');
    }



      /**
	* @Route("/{urlAlias}.html",name="_page_article_detail")
	*/

       public function detailAction($urlAlias)
       {
	$em = $this->getDoctrine()->getManager();

         $productType='';
         $productCatName ='';
         $queryProductPageDetail= array();
	 $productquery = array();

        if($urlAlias=='fabrication'){

      //  $queryMsfabricationPage = $em->createQuery("SELECT p FROM ProjectCmsBundle:MsfabricationPage p where p.status=1")
		//		   ->getResult();
		
		$queryMsfabricationPage = $em->createQuery("SELECT p FROM ProjectCmsBundle:MsfabricationPageDetail p where p.status=1")
			                  ->getResult();
		
	$seoPage = $this->container->get('sonata.seo.page');
	$finalMetaTitle= 'Welcome to Website:fabrication';
        $seoPage->setTitle($finalMetaTitle);  
         $finalMetadescription = "Description:fabrication:Welcome to Allied";
        $keywords = "Keyword:fabrication:Welcome to Allied";
        
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
	  
        }
     if($urlAlias=='products'){

        $queryProductListDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProductMainPage p where p.status=1")
				   ->getResult();
	$seoPage = $this->container->get('sonata.seo.page');
	$finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle); 
         $finalMetadescription = "Description:Welcome to Allied";
        $keywords = "Keyword:Welcome to Allied";
        
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
	  
        }


       if($urlAlias=='gallery'){
 
         $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:GalleryPage p where p.status=1 ORDER BY p.priority DESC")
				   ->getResult();
		$seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);  	
        $keywords = "Keyword:gallery:Welcome to Allied";
        $finalMetadescription = "Description:Welcome to Allied";
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }
        elseif($urlAlias=='videos'){
 
         $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:VideosPage p where p.status=1 ORDER BY p.priority DESC")
				   ->getResult();
	$seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);  
           $finalMetadescription = "Description:fabrication:Welcome to Allied";
        $keywords = "Keyword:fabrication:Welcome to Allied";
        
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }
        else{
		$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:MainPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	
        $seoPage = $this->container->get('sonata.seo.page');
		$finalMetaTitle= 'Welcome to Website';
        if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }
	if(count($queryPageDetail)==0){
		 $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:SubPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
				   
		$seoPage = $this->container->get('sonata.seo.page');
		$finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
	   if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
	   }
	}

        if(count($queryPageDetail)==0){
	  $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:SubThirdPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
				   
	$seoPage = $this->container->get('sonata.seo.page');
	$finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
	   if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
	   }
	}
	    	
	    	
        }

      if(count($queryPageDetail)==0){

         $productType='products';
	  $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProductMainPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	$seoPage = $this->container->get('sonata.seo.page');
	$finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
	 if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
	$subId = $queryPageDetail[0]->getId();
	$productCatName = $queryPageDetail[0]->getPageTitle();
            
        $productquery = $em->createQuery('SELECT p FROM ProjectCmsBundle:ProductMainPage p where p.status=1 ORDER BY p.priority DESC')
		           ->getResult();

        $queryProductPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProductPage p where p.productcatId='".$subId."'")
				   ->getResult();
	    }
 	 }
  
       
        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:MainPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();

         if($urlAlias=='gallery'){
          return $this->render('ProjectCmsBundle:Default:gallery.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
         }elseif($urlAlias=='fabrication'){
          return $this->render('ProjectCmsBundle:Default:fabrication.html.twig',array('result' => $queryMsfabricationPage,'queryMenu'=>$queryMenu));
         }elseif($urlAlias=='products'){
          return $this->render('ProjectCmsBundle:Default:productlist.html.twig',array('result' => $queryProductListDetail,'queryMenu'=>$queryMenu));
         }elseif($urlAlias=='videos'){
          return $this->render('ProjectCmsBundle:Default:videos.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
         }elseif($urlAlias=='contact-us'){
          return $this->render('ProjectCmsBundle:Default:contact.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
         }elseif($productType=='products'){
          return $this->render('ProjectCmsBundle:Default:products.html.twig',array('result' => $queryProductPageDetail,'queryMenu'=>$queryMenu,'productCatName'=>$productCatName,'productquery'=>$productquery));
         }else{
          return $this->render('ProjectCmsBundle:Default:detail.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
         }

       }


      /**
	* @Route("/product/{urlAlias}.html",name="_page_product_detail")
	*/

       public function productdetailAction($urlAlias)
       {
	$em = $this->getDoctrine()->getManager();

	$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProductPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	
        $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);

         $catId= $queryPageDetail[0]->getProductcatId()->getId();
         $queryCatPageList = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProductPage p where p.productcatId='".$catId."'")
                                  	  ->setMaxResults($limit=6)
			                  ->getResult();


        }
        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:ProductMainPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();
     
     return $this->render('ProjectCmsBundle:Default:productdetail.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu,'queryCatPageList'=>$queryCatPageList));

       }


      /**
	* @Route("/project/{urlAlias}.html",name="_page_project_detail")
	*/

       public function projectdetailAction($urlAlias)
       {
	$em = $this->getDoctrine()->getManager();
        $detailpage = 'no';
        $getThreeProject = array();

	$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProjectMainPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();

        if (count($queryPageDetail)>0) {
         $id= $queryPageDetail[0]->getId();
	     $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProjectPage p where p.projectcatId='".$id."'")
			                  ->getResult();
        $detailpage = 'no';
        }elseif (count($queryPageDetail)==0) {
	$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProjectPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	$projectCatId= $queryPageDetail[0]->getProjectcatId()->getId();
        $getThreeProject = $em->createQuery("SELECT p FROM ProjectCmsBundle:ProjectPage p where p.projectcatId='".$projectCatId."'")
                              ->setMaxResults($limit=3)
			                  ->getResult();		
         $detailpage = 'yes';
        }

        $seoPage = $this->container->get('sonata.seo.page');
	$finalMetaTitle= 'Welcome to Website';
        if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }

        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:MainPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();

         if($detailpage=='yes'){
          return $this->render('ProjectCmsBundle:Default:projectdetail.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu,'getThreeProject'=>$getThreeProject));
         }else{
          return $this->render('ProjectCmsBundle:Default:projectlist.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
         }

       }

      /**
	* @Route("/blog/{urlAlias}.html",name="_page_blog_detail")
	*/

       public function blogdetailAction($urlAlias)
       {
	$em = $this->getDoctrine()->getManager();

	$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:BlogPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	
        $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getMetaTitle():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }
        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:MainPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();
		     
		 $querySubProduct= $em->createQuery("SELECT s FROM ProjectCmsBundle:ProductSubPage s where s.status=1 ORDER BY s.priority DESC")
		      ->getResult();     

          return $this->render('ProjectCmsBundle:Default:blogdetail.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu,'querySubProduct'=>$querySubProduct));

       }

      /**
	* @Route("/menulist",name="_page_menulist")
	*/

       public function menulistAction()
       {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('SELECT p FROM ProjectCmsBundle:MainPage p where p.status=1 ORDER BY p.priority DESC')
		->getResult();

 return $this->render('ProjectCmsBundle:Default:menulist.html.twig',array('mainMenu' => $query));


       }
       
       
             /**
	* @Route("/thankyou.php",name="_page_thankyou")
	*/

       public function thankyouAction()
       {
        $em = $this->getDoctrine()->getManager();

        $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        $finalMetaTitle= 'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = 'Welcome to Website';
        $keywords = 'Welcome to Website';
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);

       if(isset($_POST['name']) && isset($_POST['email']) &&  isset($_POST['contactus']))
         {
         $to = "alliedladders@gmail.com";
         $subject = "Contact Enquiry From Allied Ladder.com";
         
         $message= "<b>Name:</b>".$_POST['name']."\r\n";
         $message.= "<b>Email:</b>".$_POST['email']."\r\n";
         $message.= "<b>Mobile No:</b>".$_POST['mobile']."\r\n";
         $message.= "<b>Description:</b>".$_POST['discription']."\r\n";

         $header = "From:alliedladderschat@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
 
         $retval = mail ($to,$subject,$message,$header);

         }

       if(isset($_POST['name']) && isset($_POST['email']) &&  isset($_POST['product_name']))
         {
		$setProductName = $_POST['product_name'];
		$setName        = $_POST['name'];
		$setEmail       = $_POST['email'];
		$setMobileNumber= $_POST['mobile'];
		$setCity        = $_POST['city'];
		$setQuantity    = $_POST['quantity'];
		$setDescription = $_POST['discription'];



         $to = "alliedladders@gmail.com";
         $subject = "Enquiry From Allied Ladder.com for product:".$setProductName;
         
         $message= "<b>Name:</b>".$_POST['name']."\r\n";
         $message.= "<b>Email:</b>".$_POST['email']."\r\n";
         $message.= "<b>Mobile No:</b>".$_POST['mobile']."\r\n";
         $message.= "<b>City:</b>".$_POST['city']."\r\n";
         $message.= "<b>Quantity:</b>".$_POST['quantity']."\r\n";
         $message.= "<b>Description:</b>".$_POST['discription']."\r\n";

         $header = "From:alliedladderschat@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
 
         $retval = mail ($to,$subject,$message,$header);




	 $curDate = new \DateTime();


	     $EnquiryPageObject = new EnquiryPage();
	     $EnquiryPageObject->setProductName($setProductName);
	     $EnquiryPageObject->setName($setName);
	     $EnquiryPageObject->setEmail($setEmail);
	     $EnquiryPageObject->setMobileNumber($setMobileNumber);
	     $EnquiryPageObject->setCity($setCity);
	     $EnquiryPageObject->setQuantity($setQuantity);
	     $EnquiryPageObject->setDescription($setDescription);
 	     $EnquiryPageObject->setStatus(0);
 	     $EnquiryPageObject->setCreated($curDate);
 	     $EnquiryPageObject->setUpdated($curDate);


	     $em = $this->getDoctrine()->getManager();
	     $em->persist($EnquiryPageObject);
	     $em->flush();
           }



        $query = "Thanks, You your mail sent successfully, We will contact you shortly. ";

 return $this->render('ProjectCmsBundle:Default:thankyou.html.twig',array('query' => $query));

       }


      /**
	* @Route("/fabrication/{urlAlias}.html",name="_page_msfabrication_list")
	*/

       public function fabricationAction($urlAlias)
       {
	
	$em = $this->getDoctrine()->getManager();
        $queryPageDetail = array();
	$queryPageDetail1 = $em->createQuery("SELECT p FROM ProjectCmsBundle:MsfabricationPage p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	
        if (count($queryPageDetail1)>0) {
         $id= $queryPageDetail1[0]->getId();
	     $queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:MsfabricationPageDetail p where p.msfcatId='".$id."'")
			                  ->getResult();
        }
        
          $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:MsfabricationPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();
        return $this->render('ProjectCmsBundle:Default:fabricationlist.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));
       }


      /**
	* @Route("/fabricationdetail/{urlAlias}.html",name="_page_fabrication_detail")
	*/

       public function fabricationdetailAction($urlAlias)
       {
	$em = $this->getDoctrine()->getManager();

	$queryPageDetail = $em->createQuery("SELECT p FROM ProjectCmsBundle:MsfabricationPageDetail p where p.pageUrl='".$urlAlias."'")
				   ->getResult();
	
        $seoPage = $this->container->get('sonata.seo.page');
        $finalMetaTitle= 'Welcome to Website';
        if (count($queryPageDetail)>0) {
        $finalMetaTitle= ($queryPageDetail[0]->getMetaTitle())?$queryPageDetail[0]->getFabricationName():'Welcome to Website';
        $seoPage->setTitle($finalMetaTitle);
        $finalMetadescription = $queryPageDetail[0]->getMetaDescription();
        $keywords = $queryPageDetail[0]->getMetaKeyword();
        $seoPage->addMeta('name', 'description', $finalMetadescription);
        $seoPage->addMeta('name', 'keywords', $keywords);
        }
        $queryMenu = $em->createQuery('SELECT p FROM ProjectCmsBundle:MsfabricationPage p where p.status=1 ORDER BY p.priority DESC')
		     ->getResult();
     
     return $this->render('ProjectCmsBundle:Default:fabricationdetail.html.twig',array('result' => $queryPageDetail,'queryMenu'=>$queryMenu));

       }




}
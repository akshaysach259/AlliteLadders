<?php 
namespace AdminBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
 
class BlogPageAdmin extends Admin
{

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('blogTitle')
            ->add('status', 'null', array(
    'label'     => 'Status',
    'required'  => false,
	));
        
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
	    ->with('General')
            ->add('blogTitle')
            ->add('pageUrl')
            ->add('pageDescription', 'ckeditor', array('required' => false))

//->add('pageDescription', 'sonata_simple_formatter_type', array(
    //'format' => 'markdown',
    //'ckeditor_context' => 'default', // optional
//))

	  //  ->add('image', 'sonata_type_model_list', array('required' => true), array('link_parameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')))
            ->add('status')
	    ->end()
	    ->with('Seo Details')
            ->add('metaTitle')
            ->add('metaDescription')
            ->add('metaKeyword')

        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
       ->add('blogTitle')
            ->add('feature')
            ->add('status')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('blogTitle')
            ->add('pageUrl')
	   ->add('feature', null, array('editable' => true))   
            ->add('status',null,array('editable' => true))

        ;
    }


 public function prePersist($page) {

  $title = $page->getBlogTitle();
  $created = new \DateTime();
  $page->setCreated($created);
  $page->setUpdated($created);


  if ($page->getPageUrl()) {
	 $page->setPageUrl($this->slugify($page->getPageUrl()));
	} else {
	 $page->setPageUrl($this->slugify($title));
	}
}


 public function preUpdate($page) {

  $title = $page->getBlogTitle();

  if ($page->getPageUrl()) {
	 $page->setPageUrl($this->slugify($page->getPageUrl()));
	} else {
	 $page->setPageUrl($this->slugify($title));
	}
}


 public function slugify($text) {
	$text = str_replace(',', '', $text);
	$text = str_replace("--", "-", preg_replace('#[^A-Za-z0-9\-]#', '', str_replace(" ", "-", $text)));
	$text = trim($text, '-');
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	$text = strtolower($text);
	$text = preg_replace('~[^-\w]+~', '', $text);
	$text = str_replace("--", "-", $text);

	if (empty($text)) {
	 return '';
	}
	return $text;
 }

}

?>

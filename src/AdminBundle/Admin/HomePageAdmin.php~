<?php 
namespace AdminBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
 
class HomePageAdmin extends Admin
{

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('pageTitle1')
            ->add('pageTitleDesc1')
            ->add('pageUrl1')
            ->add('pageTitle2')
            ->add('pageTitleDesc2')
            ->add('pageUrl2')
            ->add('pageTitle3')
            ->add('pageTitleDesc3')
            ->add('pageUrl3')
            ->add('pageTitle4')
            ->add('pageTitleDesc4')
            ->add('pageUrl4');

        
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('pageTitle1')
            ->add('pageTitleDesc1')
            ->add('pageUrl1')
            ->add('pageTitle2')
            ->add('pageTitleDesc2')
            ->add('pageUrl2')
            ->add('pageTitle3')
            ->add('pageTitleDesc3')
            ->add('pageUrl3')
            ->add('pageTitle4')
            ->add('pageTitleDesc4')
            ->add('pageUrl4')
	    ->add('image', 'sonata_type_model_list', array('required' => true), array('link_parameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')));
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('pageTitle1');
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

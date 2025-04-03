<?php 
namespace AdminBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
 
class GalleryPageAdmin extends Admin
{

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('GalleryPageTitle')
            ->add('status', 'null', array(
    'label'     => 'Status',
    'required'  => false,
	));
        
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
	    ->with('General')
            ->add('GalleryPageTitle')
	    ->add('image', 'sonata_type_model_list', array('required' => true), array('link_parameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')))
            ->add('status')
	    ->end()
	    
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
       ->add('GalleryPageTitle')
            ->add('priority')
            ->add('status')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('GalleryPageTitle')
	   ->add('priority', null, array('editable' => true))   
            ->add('status',null,array('editable' => true))

        ;
    }


 public function prePersist($page) {

  $created = new \DateTime();
  $page->setCreated($created);
  $page->setUpdated($created);

}


 public function preUpdate($page) {


}


}

?>

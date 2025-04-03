<?php 
namespace AdminBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
 
class TestimonialPageAdmin extends Admin
{

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('testimonialBy')
            ->add('status', 'null', array(
    'label'     => 'Status',
    'required'  => false,
	));
        
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
	    ->with('General')
            ->add('testimonialBy')
            ->add('pageDescription')
            ->add('status')
->add('image', 'sonata_type_model_list', array('required' => true), array('link_parameters' => array('provider' => 'sonata.media.provider.image', 'context' => 'default')))
	    ->end()
	    
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
       ->add('testimonialBy')
            ->add('status')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('testimonialBy')
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

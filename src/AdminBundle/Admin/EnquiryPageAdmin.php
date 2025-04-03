<?php 
namespace AdminBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
 use Sonata\AdminBundle\Route\RouteCollection;

class EnquiryPageAdmin extends Admin
{

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('productName')
            ->add('name')
            ->add('email')
            ->add('mobileNumber')
            ->add('city')
            ->add('quantity')
            ->add('description')
            ->add('created');
      
    }

   /* protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
	    ->with('General')
            ->add('productName')
            ->add('name')
            ->add('pageDescription', 'ckeditor', array('required' => false))
            ->add('status')
	    ->end()
	    ->with('Seo Details')
            ->add('metaTitle')
            ->add('metaDescription')
            ->add('metaKeyword')

        ;
    }*/
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
       ->add('productName')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           ->add('productName')
            ->add('name')
            ->add('email')
            ->add('mobileNumber')
            ->add('city')
            ->add('quantity')
            ->add('description')


        ;
    }




}

?>

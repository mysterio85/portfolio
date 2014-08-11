<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Reference;
use Symfony\Component\DomCrawler\Field\FormField;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class ReferenceAdmin extends Admin
{
	
	protected $datagridValue=array(
			'_sort_order'=>'ASC',
			'_sort_by'=>'name'
	);
	
	protected  function configureFormFields(FormMapper $formMapper){
	
		$formMapper
		->add('libellereference','text',array('label'=>'Libelle de la reference'))
		->add('idcategorie', 'sonata_type_model_list' , array( ))
		->add('file','file',array(
				'label'=>'Capture d\'ecran',
				'required'=>false))
		->add('lienreference')
		->add('descriptionreference')
		;
	}

	
	//
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
	
		$datagridMapper
		->add('libellereference')
		->add('idcategorie')
		->add('imagereference') 
		->add('lienreference')
		->add('descriptionreference')
		;
	}
	//
	protected function configureListFields(ListMapper $listMapper){
	
		$listMapper
		->add('libellereference')
		->add('idcategorie')
		->add('imagereference')
		->add('lienreference')
		->add('descriptionreference')
		->add('_action', 'actions', array(
				'actions' => array(
						'show' => array(),
						'edit' => array(),
						'delete' => array(),
				) ))
		;
	}
	//
	protected  function configureShowFields(ShowMapper $showMapper){
	
		$showMapper
		->add('libellereference')
		->add('idcategorie')
		->add('imagereference')
		->add('lienreference')
		->add('descriptionreference')
		;
	}
	
}
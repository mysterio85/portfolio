<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Module;

class ModuleAdmin extends Admin
{
	protected $datagridValue=array(
			'_sort_order'=>'ASC',
			'_sort_by'=>'name'
	);
	
	protected  function configureFormFields(FormMapper $formMapper){
		$formMapper
		->add('titremodule','text',array('label'=>'Module'))
		->add('idpage','sonata_type_model_list',array('label'=>'Page'))
		->add('file','file',array('label'=>'Image du module'))
		->add('contenumodule','textarea',array('label'=>'Contenu'))
		;
	}
	//
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
		$datagridMapper
		->add('titremodule')
		->add('idpage')
		->add('imagemodule')
		->add('contenumodule')
		;
	}
	//
	protected function configureListFields(ListMapper $listMapper){
		$listMapper
		->add('titremodule',null,array('label'=>'Titre'))
		->add('idpage',null,array('label'=>'Page'))
		->add('imagemodule',null,array('label'=>'Images'))
		->add('contenumodule',null,array('label'=>'Contenu'))
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
		->add('titremodule')
		->add('idpage')
		->add('imagemodule')
		->add('contenumodule')
		;
	}
}
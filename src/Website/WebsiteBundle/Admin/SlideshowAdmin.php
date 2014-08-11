<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Slideshow;

class SlideshowAdmin extends Admin
{
	
	protected $datagridValue=array(
			'_sort_order'=>'ASC',
			'_sort_by'=>'name'
	);
	
	protected  function configureFormFields(FormMapper $formMapper){
	
		$formMapper
		->add('titreslideshow')
		->add('detailslideshow')
		->add('file','file',array('label'=>'Image'))
		;
	}
	//
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
	
		$datagridMapper
		->add('titreslideshow')
		->add('detailslideshow')
		->add('imageslideshow')
		;
	}
	//
	protected function configureListFields(ListMapper $listMapper){
	
		$listMapper
		->add('titreslideshow')
		->add('detailslideshow')
		->add('imageslideshow')
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
		->add('titreslideshow')
		->add('detailslideshow')
		->add('imageslideshow')
		;
	}
	
}
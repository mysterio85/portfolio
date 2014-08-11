<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Page;

class PageAdmin extends Admin
{
	
	protected $datagridValue=array(
			'_sort_order'=>'ASC',
			'_sort_by'=>'name'
	);
	
	protected  function configureFormFields(FormMapper $formMapper){
		$formMapper
		->add('libellepage')
		->add('descriptionpage')
		;
	}
	//
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
		$datagridMapper
		->add('libellepage')
		->add('descriptionpage')
		;
	}
	//
	protected function configureListFields(ListMapper $listMapper){
	
		$listMapper
		->add('libellepage')
		->add('descriptionpage')
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
		->add('libellepage')
		->add('descriptionpage')
		;
	}
}
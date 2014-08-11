<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Categorie;


class CategorieAdmin extends Admin
{
	// parametres par defaut des tris de tableau
	protected  $datagridValue= array(
		'_sort_order'=>'ASC',
		'_sort_by'=>'name'
	);
	
	// methode de creation de liste
	protected function configureFormFields(FormMapper $formMapper){
		$formMapper
		->add('libelle')
		;
		
	}
	
	// methode 
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
		$datagridMapper
		->add('libelle')
		;
	}
	
	// methode de creation de formulaires 
	protected  function configureListFields(ListMapper $ListMapper){
		$ListMapper
		->add('libelle')
		->add('_action', 'actions', array(
				'actions' => array(
						'show' => array(),
						'edit' => array(),
						'delete' => array(),
				) ))
		;
	}
	
	// 
	protected function configureShowFields(ShowMapper $showMapper){
		$showMapper
		->add('libelle')
		;
	}
}
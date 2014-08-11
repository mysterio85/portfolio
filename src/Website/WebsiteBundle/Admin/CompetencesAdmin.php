<?php
namespace Website\WebsiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Website\WebsiteBundle\Entity\Competences;
use Symfony\Component\DomCrawler\Field\FormField;
use Sonata\AdminBundle\Datagrid\DatagridMapper;



class CompetencesAdmin extends Admin
{
	protected $datagridValue=array(
		'_sort_order'=>'ASC',
		'_sort_by'=>'name'
	);

	protected  function configureFormFields(FormMapper $formMapper){
		$formMapper
		->add('libellecompetence')
		->add('file','file',array('label'=>'Logo competence'))
		->add('notecompetence')
		->add('descriptioncompetence')
		;
	}
	//
	protected function configureDatagridFilters(DatagridMapper $datagridMapper){
		$datagridMapper
		->add('libellecompetence')
		->add('imagecompetence')
		->add('notecompetence')
		->add('descriptioncompetence')
		;
	}
	//
	protected function configureListFields(ListMapper $listMapper){
		$listMapper
		->add('libellecompetence')
		->add('imagecompetence')
		->add('notecompetence')
		->add('descriptioncompetence')
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
		->add('libellecompetence')
		->add('imagecompetence')
		->add('notecompetence')
		->add('descriptioncompetence')
		;
	}
}
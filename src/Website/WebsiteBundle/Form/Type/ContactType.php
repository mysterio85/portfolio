<?php
namespace Website\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ContactType extends AbstractType {
	
	public function  buildForm(FormBuilderInterface $builder, array $options){
		$builder
		->add('nom','text', array('label'=>false,'attr' => array('class' => 'form-control','placeholder'=>'Nom')))
		->add('prenom','text', array('label'=>false,'attr' => array('class' => 'form-control','placeholder'=>'Prenom')))
		->add('email','email', array('label'=>false,'attr' => array('class' => 'form-control','placeholder'=>'Email')))
		->add('message','textarea', array('label'=>false,'attr' => array('class' => 'form-control','rows'=>'8','placeholder'=>'Message')));
	}
	

	
	public function getName(){
		return 'Contact';
	}
}
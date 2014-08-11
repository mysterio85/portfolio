<?php
/**
 * 
 */
namespace  Website\WebsiteBundle\Entity;

//use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;




class Contact {
	protected $nom;
	protected $prenom;
	protected $email;
	protected $message;
	
	/*
	 * Les validateurs
	 */
	
	public static function  loadValidatorMetadata(ClassMetadata $metadata){
		$metadata->addPropertyConstraint('nom', new NotBlank());
		$metadata->addPropertyConstraint('prenom', new  NotBlank());
		$metadata->addPropertyConstraint('email', new Email(
				array(
    'message' => 'essoagenial dit c faut!')
		));
		$metadata->addPropertyConstraint('message', new Length(
				array(
						'min'=>10,
						'minMessage'=>'Il faut 10 caractères maximum'
				)
		));
		
	}
	
	
	
	/**
	 * liste des getters
	 */
	
	public function getNom(){
		return $this->nom;
	}
	
	public function getPrenom(){
		return $this->prenom;
	}
	
	public function getEmail(){
		return $this->email;
	}
	public function getMessage(){
		return $this->message;
	}
	
	/**
	 * Liste des setteur
	 * /
	 */
	
	public function setNom($nom){
		$this->nom=$nom;
	}
	
	public function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function setMessage($message){
		$this->message=$message;
	}
}
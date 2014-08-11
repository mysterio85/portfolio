<?php
namespace Website\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Website\WebsiteBundle\Entity\Contact;
use Website\WebsiteBundle\Form\Type\ContactType;
//use Website;
use Symfony\Component\HttpFoundation\Session;
			 
class PageController extends Controller 
{
 	
 	public  function  indexAction(){
 		
 		// recuperer le tableau des references
 		$em=$this->getDoctrine()
 		->getManager();
 		$portfolios=$em->getRepository('WebsiteWebsiteBundle:Reference')
 		->getAllReferences();
 		// recuperer tableau des slideshows
 		$em=$this->getDoctrine()
 		->getManager();
 		$slideshows=$em->getRepository('WebsiteWebsiteBundle:Slideshow')
 		->getAllSlideshows();
 		//rendu
 		return $this->render('WebsiteWebsiteBundle:Page:index.html.twig',
 				array(
 						'portfolios'=>$portfolios,
 						'slideshows'=>$slideshows
 				));
 	}
 	
 	/*
 	 * Methode de la page de contact 
 	 */
 	public  function  contactAction(){
 		$contact = new Contact();
 		$form = $this->createForm(new ContactType(), $contact);

 		//gestion de la requete
 		$request=$this->getRequest();
 		if($request->getMethod()=='POST'){
 			$form->bind($request);
 			// si le formulaire est valide 
 			if($form->isValid()){
 				
 				//procedure d'envoi du mail
 				$contenu=\Swift_Message::newInstance()
 				->setSubject('message de contact essoagenial')
 				->setFrom('essoagenial@yahoo.fr')
 				->setTo($this->container->getParameter('website.emails.contact_email'))
 				->setBody($this->renderView('WebsiteWebsiteBundle:Page:contactEmail.txt.twig',array('contact'=>$contact)))
 				;
 				$this->get('mailer')->send($contenu);
 				//$this->get('session')->setFlash('alert-success','votre message a ete envoye avec succes');
 				$this->get('session')->getFlashBag()->add('success', 'Votre demande de contact a bien été envoyée. Merci!');
 				
 				//retourn a la page de contact apres redirection
 				return $this->redirect($this->generateUrl('WebsiteWebsiteBundle_contact'));
 			}
 		}
 		return $this->render('WebsiteWebsiteBundle:Page:contact.html.twig', array(
 				'form' => $form->createView()
 		));
 	}
 	
 	public  function  competencesAction(){
 		$em=$this->getDoctrine()
 				->getManager();
 		$competences=$em->getRepository('WebsiteWebsiteBundle:Competences')
 						->getAllCompetences();
 		return $this->render('WebsiteWebsiteBundle:Page:competences.html.twig',
 		array(
 				'competences'=>$competences
 		)
 		);
 	}
 	/*
 	 * controlleur de la page du portfolio
 	 */
 	public  function  portfolioAction(){
 		$em=$this->getDoctrine()
 				 ->getManager();
 		$portfolios=$em->getRepository('WebsiteWebsiteBundle:Reference')
 					->getAllReferences();

 		$categories=$em->getRepository('WebsiteWebsiteBundle:Categorie')
 						->getAllCategories();
 		
 		return $this->render('WebsiteWebsiteBundle:Page:portfolio.html.twig',
							array(
 								'portfolios'=>$portfolios,
								'categories'=>$categories
 							));
 	}
 }
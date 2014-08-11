<?php

namespace Website\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competences
 *
 * @ORM\Table(name="competences")
 * @ORM\Entity(repositoryClass="Website\WebsiteBundle\Repository\CompetencesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Competences
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCompetence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleCompetence", type="string", length=150, nullable=false)
     */
    private $libellecompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="noteCompetence", type="integer", nullable=false)
     */
    private $notecompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCompetence", type="text", nullable=false)
     */
    private $descriptioncompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="imageCompetence", type="string", length=150, nullable=false)
     */
    private $imagecompetence;


    /*
     * public file
     */
	public $file;
    /**
     * Get idcompetence
     *
     * @return integer 
     */
    public function getIdcompetence()
    {
        return $this->idcompetence;
    }

    /**
     * Set libellecompetence
     *
     * @param string $libellecompetence
     * @return Competences
     */
    public function setLibellecompetence($libellecompetence)
    {
        $this->libellecompetence = $libellecompetence;

        return $this;
    }

    /**
     * Get libellecompetence
     *
     * @return string 
     */
    public function getLibellecompetence()
    {
        return $this->libellecompetence;
    }

    /**
     * Set notecompetence
     *
     * @param integer $notecompetence
     * @return Competences
     */
    public function setNotecompetence($notecompetence)
    {
        $this->notecompetence = $notecompetence;

        return $this;
    }

    /**
     * Get notecompetence
     *
     * @return integer 
     */
    public function getNotecompetence()
    {
        return $this->notecompetence;
    }

    /**
     * Set descriptioncompetence
     *
     * @param string $descriptioncompetence
     * @return Competences
     */
    public function setDescriptioncompetence($descriptioncompetence)
    {
        $this->descriptioncompetence = $descriptioncompetence;

        return $this;
    }

    /**
     * Get descriptioncompetence
     *
     * @return string 
     */
    public function getDescriptioncompetence()
    {
        return $this->descriptioncompetence;
    }

    /**
     * Set imagecompetence
     *
     * @param string $imagecompetence
     * @return Competences
     */
    public function setImagecompetence($imagecompetence)
    {
        $this->imagecompetence = $imagecompetence;

        return $this;
    }

    /**
     * Get imagecompetence
     *
     * @return string 
     */
    public function getImagecompetence()
    {
        return $this->imagecompetence;
    }
    
    /*
     * Les methodes pour les uploads
    */
    
    //url à partir du dossier web
    private function getUploadDir(){
    	return 'legacy/images/competences';
    }
    
    // Url a partir de la racine
    private function getUploadRootDir(){
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    public function getWebPath(){
    	return null===$this->imagecompetence  ? null : $this->getUploadDir().'/'.$this->imagecompetence;
    }
    
    public function getAbsolutePath(){
    	return null===$this->imagecompetence  ? null : $this->getUploadRootDir().'/'.$this->imagecompetence;
    }
    
    // gestion du upload
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate()
     */
    public function preUpload(){
    	if(null!==$this->file){
    		$this->imagecompetence = uniqid().'.'.$this->file->guessExtension();
    	}
    }
    
    /**
     * @ORM\PostPersist
     * @ORM\postUpdate
     */
    public function upload(){
    	if(null===$this->file){
    		return;
    	}
    	 
    	$this->file->move($this->getUploadDir(),$this->imagecompetence);
    	unset($this->file);
    }
    
    /**
     * @ORM\PostRemove
     */
    
    public function removeUpload(){
    	if($file=$this->getAbsolutePath()){
    		unlink($file);
    	}
    }
    
}

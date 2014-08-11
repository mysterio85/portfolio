<?php

namespace Website\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module", indexes={@ORM\Index(name="idPage", columns={"idPage"})})
 * @ORM\Entity(repositoryClass="Website\WebsiteBundle\Repository\ModuleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodule;

    /**
     * @var string
     *
     * @ORM\Column(name="titreModule", type="string", length=150, nullable=false)
     */
    private $titremodule;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuModule", type="text", nullable=false)
     */
    private $contenumodule;

    /**
     * @var string
     *
     * @ORM\Column(name="imageModule", type="string", length=150, nullable=false)
     */
    private $imagemodule;

    /**
     * @var \Page
     *
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPage", referencedColumnName="idPage")
     * })
     */
    private $idpage;



    /**
     * Get idmodule
     *
     * @return integer 
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set titremodule
     *
     * @param string $titremodule
     * @return Module
     */
    public function setTitremodule($titremodule)
    {
        $this->titremodule = $titremodule;

        return $this;
    }

    /**
     * Get titremodule
     *
     * @return string 
     */
    public function getTitremodule()
    {
        return $this->titremodule;
    }

    /**
     * Set contenumodule
     *
     * @param string $contenumodule
     * @return Module
     */
    public function setContenumodule($contenumodule)
    {
        $this->contenumodule = $contenumodule;

        return $this;
    }

    /**
     * Get contenumodule
     *
     * @return string 
     */
    public function getContenumodule()
    {
        return $this->contenumodule;
    }

    /**
     * Set imagemodule
     *
     * @param string $imagemodule
     * @return Module
     */
    public function setImagemodule($imagemodule)
    {
        $this->imagemodule = $imagemodule;

        return $this;
    }

    /**
     * Get imagemodule
     *
     * @return string 
     */
    public function getImagemodule()
    {
        return $this->imagemodule;
    }

    /**
     * Set idpage
     *
     * @param \Website\WebsiteBundle\Entity\Page $idpage
     * @return Module
     */
    public function setIdpage(\Website\WebsiteBundle\Entity\Page $idpage = null)
    {
        $this->idpage = $idpage;

        return $this;
    }

    /**
     * Get idpage
     *
     * @return \Website\WebsiteBundle\Entity\Page 
     */
    public function getIdpage()
    {
        return $this->idpage;
    }
    
    /*
     * Les methodes pour les uploads
    */
    
    public  $file;
    
    //url à partir du dossier web
    private function getUploadDir(){
    	return 'legacy/images/modules';
    }
    
    // Url a partir de la racine
    private function getUploadRootDir(){
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    public function getWebPath(){
    	return null===$this->imagemodule  ? null : $this->getUploadDir().'/'.$this->imagemodule;
    }
    
    public function getAbsolutePath(){
    	return null===$this->imagemodule  ? null : $this->getUploadRootDir().'/'.$this->imagemodule;
    }
    
    // gestion du upload
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate()
     */
    public function preUpload(){
    	if(null!==$this->file){
    		$this->imagemodule = uniqid().'.'.$this->file->guessExtension();
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
    
    	$this->file->move($this->getUploadDir(),$this->imagemodule);
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

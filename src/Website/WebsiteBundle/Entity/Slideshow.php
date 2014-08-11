<?php

namespace Website\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slideshow
 *
 * @ORM\Table(name="slideshow")
 * @ORM\Entity(repositoryClass="Website\WebsiteBundle\Repository\SlideshowRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Slideshow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSlideshow", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idslideshow;

    /**
     * @var string
     *
     * @ORM\Column(name="titreSlideshow", type="string", length=150, nullable=false)
     */
    private $titreslideshow;

    /**
     * @var string
     *
     * @ORM\Column(name="detailSlideshow", type="string", length=150, nullable=false)
     */
    private $detailslideshow;

    /**
     * @var string
     *
     * @ORM\Column(name="imageSlideshow", type="string", length=150, nullable=false)
     */
    private $imageslideshow;



    /**
     * Get idslideshow
     *
     * @return integer 
     */
    public function getIdslideshow()
    {
        return $this->idslideshow;
    }

    /**
     * Set titreslideshow
     *
     * @param string $titreslideshow
     * @return Slideshow
     */
    public function setTitreslideshow($titreslideshow)
    {
        $this->titreslideshow = $titreslideshow;

        return $this;
    }

    /**
     * Get titreslideshow
     *
     * @return string 
     */
    public function getTitreslideshow()
    {
        return $this->titreslideshow;
    }

    /**
     * Set detailslideshow
     *
     * @param string $detailslideshow
     * @return Slideshow
     */
    public function setDetailslideshow($detailslideshow)
    {
        $this->detailslideshow = $detailslideshow;

        return $this;
    }

    /**
     * Get detailslideshow
     *
     * @return string 
     */
    public function getDetailslideshow()
    {
        return $this->detailslideshow;
    }

    /**
     * Set imageslideshow
     *
     * @param string $imageslideshow
     * @return Slideshow
     */
    public function setImageslideshow($imageslideshow)
    {
        $this->imageslideshow = $imageslideshow;

        return $this;
    }

    /**
     * Get imageslideshow
     *
     * @return string 
     */
    public function getImageslideshow()
    {
        return $this->imageslideshow;
    }
    
    /*
     * Les methodes pour les uploads
    */
    
    public  $file;
    
    //url à partir du dossier web
    private function getUploadDir(){
    	return 'legacy/images/slider';
    }
    
    // Url a partir de la racine
    private function getUploadRootDir(){
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    public function getWebPath(){
    	return null===$this->imageslideshow  ? null : $this->getUploadDir().'/'.$this->imageslideshow;
    }
    
    public function getAbsolutePath(){
    	return null===$this->imageslideshow  ? null : $this->getUploadRootDir().'/'.$this->imageslideshow;
    }
    
    // gestion du upload
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate()
     */
    public function preUpload(){
    	if(null!==$this->file){
    		$this->imageslideshow = uniqid().'.'.$this->file->guessExtension();
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
    
    	$this->file->move($this->getUploadDir(),$this->imageslideshow);
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

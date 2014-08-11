<?php

namespace Website\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Reference
 *
 * @ORM\Table(name="reference", indexes={@ORM\Index(name="idCategorie", columns={"idCategorie"})})
 * @ORM\Entity(repositoryClass="Website\WebsiteBundle\Repository\ReferenceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Reference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreference;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleReference", type="string", length=150, nullable=false)
     */
    private $libellereference;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionReference", type="text", nullable=false)
     */
    private $descriptionreference;

    /**
     * @var string
     *
     * @ORM\Column(name="lienReference", type="string", length=150, nullable=false)
     */
    private $lienreference;

    /**
     * @var string
     *
     * @ORM\Column(name="imageReference", type="string", length=150, nullable=false)
     */
    private $imagereference;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategorie", referencedColumnName="idCategorie")
     * })
     */
    private $idcategorie;


    /*
     * declaration de la variable public file 
     */
    public  $file;

    /**
     * Get idreference
     *
     * @return integer 
     */
    public function getIdreference()
    {
        return $this->idreference;
    }

    /**
     * Set libellereference
     *
     * @param string $libellereference
     * @return Reference
     */
    public function setLibellereference($libellereference)
    {
        $this->libellereference = $libellereference;

        return $this;
    }

    /**
     * Get libellereference
     *
     * @return string 
     */
    public function getLibellereference()
    {
        return $this->libellereference;
    }

    /**
     * Set descriptionreference
     *
     * @param string $descriptionreference
     * @return Reference
     */
    public function setDescriptionreference($descriptionreference)
    {
        $this->descriptionreference = $descriptionreference;

        return $this;
    }

    /**
     * Get descriptionreference
     *
     * @return string 
     */
    public function getDescriptionreference()
    {
        return $this->descriptionreference;
    }

    /**
     * Set lienreference
     *
     * @param string $lienreference
     * @return Reference
     */
    public function setLienreference($lienreference)
    {
        $this->lienreference = $lienreference;

        return $this;
    }

    /**
     * Get lienreference
     *
     * @return string 
     */
    public function getLienreference()
    {
        return $this->lienreference;
    }

    /**
     * Set imagereference
     *
     * @param string $imagereference
     * @return Reference
     */
    public function setImagereference($imagereference)
    {
        $this->imagereference = $imagereference;

        return $this;
    }

    /**
     * Get imagereference
     *
     * @return string 
     */
    public function getImagereference()
    {
        return $this->imagereference;
    }

    /**
     * Set idcategorie
     *
     * @param \Website\WebsiteBundle\Entity\Categorie $idcategorie
     * @return Reference
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;

    }

    /**
     * Get idcategorie
     *
     * @return \Website\WebsiteBundle\Entity\Categorie 
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }
    
    /*
     * Les methodes pour les uploads
     */
    
    //url à partir du dossier web
    private function getUploadDir(){
    	return 'legacy/images/references';
    }
    
    // Url a partir de la racine
    private function getUploadRootDir(){
    	 return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    public function getWebPath(){
    	return null===$this->imagereference  ? null : $this->getUploadDir().'/'.$this->imagereference;
    }
    
    public function getAbsolutePath(){
    	return null===$this->imagereference  ? null : $this->getUploadRootDir().'/'.$this->imagereference;
    }
    
    // gestion du upload
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate()
     */
    public function preUpload(){
    	if(null!==$this->file){
    		$this->imagereference = uniqid().'.'.$this->file->guessExtension();
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
    	
    	$this->file->move($this->getUploadDir(),$this->imagereference);
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

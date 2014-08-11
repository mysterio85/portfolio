<?php

namespace Website\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="Website\WebsiteBundle\Repository\PageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Page
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpage;

    /**
     * @var string
     *
     * @ORM\Column(name="libellePage", type="string", length=150, nullable=false)
     */
    private $libellepage;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPage", type="string", length=150, nullable=false)
     */
    private $descriptionpage;



    /**
     * Get idpage
     *
     * @return integer 
     */
    public function getIdpage()
    {
        return $this->idpage;
    }

    /**
     * Set libellepage
     *
     * @param string $libellepage
     * @return Page
     */
    public function setLibellepage($libellepage)
    {
        $this->libellepage = $libellepage;

        return $this;
    }

    /**
     * Get libellepage
     *
     * @return string 
     */
    public function getLibellepage()
    {
        return $this->libellepage;
    }

    /**
     * Set descriptionpage
     *
     * @param string $descriptionpage
     * @return Page
     */
    public function setDescriptionpage($descriptionpage)
    {
        $this->descriptionpage = $descriptionpage;

        return $this;
    }

    /**
     * Get descriptionpage
     *
     * @return string 
     */
    public function getDescriptionpage()
    {
        return $this->descriptionpage;
    }
    
    public function __toString() {
    	return $this->libellepage;
    }
}

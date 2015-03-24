<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotspot
 *
 * @ORM\Table(name="hotspot")
 * @ORM\Entity
 */
class Hotspot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=100, nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     */
    private $idsondage;
    
    /**
     * @var integer
     */
    private $iduser;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Hotspot
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Hotspot
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set idsondage
     *
     * @param integer $idsondage
     * @return Hotspot
     */
    public function setIdsondage($idsondage)
    {
        $this->idsondage = $idsondage;

        return $this;
    }

    /**
     * Get idsondage
     *
     * @return integer 
     */
    public function getIdsondage()
    {
        return $this->idsondage;
    }


    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Hotspot
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}

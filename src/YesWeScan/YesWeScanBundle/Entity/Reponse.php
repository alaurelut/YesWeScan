<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
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
     * @var integer
     *
     * @ORM\Column(name="idHotspot", type="integer", nullable=false)
     */
    private $idhotspot;

    /**
     * @var integer
     *
     * @ORM\Column(name="idQuestion", type="integer", nullable=false)
     */
    private $idquestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReponse", type="integer", nullable=false)
     */
    private $idreponse;



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
     * Set idhotspot
     *
     * @param integer $idhotspot
     * @return Reponse
     */
    public function setIdhotspot($idhotspot)
    {
        $this->idhotspot = $idhotspot;
    
        return $this;
    }

    /**
     * Get idhotspot
     *
     * @return integer 
     */
    public function getIdhotspot()
    {
        return $this->idhotspot;
    }

    /**
     * Set idquestion
     *
     * @param integer $idquestion
     * @return Reponse
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;
    
        return $this;
    }

    /**
     * Get idquestion
     *
     * @return integer 
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set idreponse
     *
     * @param integer $idreponse
     * @return Reponse
     */
    public function setIdreponse($idreponse)
    {
        $this->idreponse = $idreponse;
    
        return $this;
    }

    /**
     * Get idreponse
     *
     * @return integer 
     */
    public function getIdreponse()
    {
        return $this->idreponse;
    }
}

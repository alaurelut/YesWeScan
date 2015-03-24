<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSondagesuivi
 *
 * @ORM\Table(name="user-sondagesuivi")
 * @ORM\Entity
 */
class UserSondagesuivi
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
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSondage", type="integer", nullable=false)
     */
    private $idsondage;



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
     * Set iduser
     *
     * @param integer $iduser
     * @return UserSondagesuivi
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

    /**
     * Set idsondage
     *
     * @param integer $idsondage
     * @return UserSondagesuivi
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
}

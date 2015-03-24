<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HotspotSondage
 */
class HotspotSondage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idhotspot;

    /**
     * @var integer
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
     * Set idhotspot
     *
     * @param integer $idhotspot
     * @return HotspotSondage
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
     * Set idsondage
     *
     * @param integer $idsondage
     * @return HotspotSondage
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

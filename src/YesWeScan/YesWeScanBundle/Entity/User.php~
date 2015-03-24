<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="pseudo", type="string", length=100, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date", nullable=false)
     */
    private $dateinscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="droit", type="boolean", nullable=true)
     */
    private $droit;



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
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    
        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     * @return User
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;
    
        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime 
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    /**
     * Set droit
     *
     * @param boolean $droit
     * @return User
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;
    
        return $this;
    }

    /**
     * Get droit
     *
     * @return boolean 
     */
    public function getDroit()
    {
        return $this->droit;
    }

    public function onPrePersist()
    {
 
        $this->setDroit(true);
        
        //la date de maintenant a passer au champs setDateinscription
        $date = new \DateTime();
        //on set la date de creation et de mise a jour avec la date de maintenant
        $this->setDateinscription($date);

        
    }
}

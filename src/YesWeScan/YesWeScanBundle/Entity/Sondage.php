<?php

namespace YesWeScan\YesWeScanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sondage
 *
 * @ORM\Table(name="sondage")
 * @ORM\Entity
 */
class Sondage
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
     * @ORM\Column(name="idTemplate", type="integer", nullable=false)
     */
    private $idtemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=150, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=500, nullable=false)
     */
    private $context;

    /**
     * @var boolean
     *
     * @ORM\Column(name="private", type="boolean", nullable=true)
     */
    private $private;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;



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
     * @return Sondage
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
     * Set idtemplate
     *
     * @param integer $idtemplate
     * @return Sondage
     */
    public function setIdtemplate($idtemplate)
    {
        $this->idtemplate = $idtemplate;
    
        return $this;
    }

    /**
     * Get idtemplate
     *
     * @return integer 
     */
    public function getIdtemplate()
    {
        return $this->idtemplate;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Sondage
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Sondage
     */
    public function setContext($context)
    {
        $this->context = $context;
    
        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set private
     *
     * @param boolean $private
     * @return Sondage
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    
        return $this;
    }

    /**
     * Get private
     *
     * @return boolean 
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Sondage
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var string
     */
    private $reponse1;

    /**
     * @var string
     */
    private $reponse2;

    /**
     * @var string
     */
    private $reponse3;

    /**
     * @var string
     */
    private $reponse4;

    /**
     * @var string
     */
    private $reponse5;


    /**
     * Set reponse1
     *
     * @param string $reponse1
     * @return Sondage
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    /**
     * Get reponse1
     *
     * @return string 
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * Set reponse2
     *
     * @param string $reponse2
     * @return Sondage
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    /**
     * Get reponse2
     *
     * @return string 
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * Set reponse3
     *
     * @param string $reponse3
     * @return Sondage
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    /**
     * Get reponse3
     *
     * @return string 
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * Set reponse4
     *
     * @param string $reponse4
     * @return Sondage
     */
    public function setReponse4($reponse4)
    {
        $this->reponse4 = $reponse4;

        return $this;
    }

    /**
     * Get reponse4
     *
     * @return string 
     */
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * Set reponse5
     *
     * @param string $reponse5
     * @return Sondage
     */
    public function setReponse5($reponse5)
    {
        $this->reponse5 = $reponse5;

        return $this;
    }

    /**
     * Get reponse5
     *
     * @return string 
     */
    public function getReponse5()
    {
        return $this->reponse5;
    }
    /**
     * @var integer
     */
    private $vote1;

    /**
     * @var integer
     */
    private $vote2;

    /**
     * @var integer
     */
    private $vote3;

    /**
     * @var integer
     */
    private $vote4;

    /**
     * @var integer
     */
    private $vote5;


    /**
     * Set vote1
     *
     * @param integer $vote1
     * @return Sondage
     */
    public function setVote1($vote1)
    {
        $this->vote1 = $vote1;

        return $this;
    }

    /**
     * Get vote1
     *
     * @return integer 
     */
    public function getVote1()
    {
        return $this->vote1;
    }

    /**
     * Set vote2
     *
     * @param integer $vote2
     * @return Sondage
     */
    public function setVote2($vote2)
    {
        $this->vote2 = $vote2;

        return $this;
    }

    /**
     * Get vote2
     *
     * @return integer 
     */
    public function getVote2()
    {
        return $this->vote2;
    }

    /**
     * Set vote3
     *
     * @param integer $vote3
     * @return Sondage
     */
    public function setVote3($vote3)
    {
        $this->vote3 = $vote3;

        return $this;
    }

    /**
     * Get vote3
     *
     * @return integer 
     */
    public function getVote3()
    {
        return $this->vote3;
    }

    /**
     * Set vote4
     *
     * @param integer $vote4
     * @return Sondage
     */
    public function setVote4($vote4)
    {
        $this->vote4 = $vote4;

        return $this;
    }

    /**
     * Get vote4
     *
     * @return integer 
     */
    public function getVote4()
    {
        return $this->vote4;
    }

    /**
     * Set vote5
     *
     * @param integer $vote5
     * @return Sondage
     */
    public function setVote5($vote5)
    {
        $this->vote5 = $vote5;

        return $this;
    }

    /**
     * Get vote5
     *
     * @return integer 
     */
    public function getVote5()
    {
        return $this->vote5;
    }



}

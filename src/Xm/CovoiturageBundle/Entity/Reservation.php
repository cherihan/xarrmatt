<?php

namespace Xm\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Xm\CovoiturageBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code_secret", type="string", length=255 ,nullable=false ,unique=true)
     */
    private $codeSecret;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="datetime",nullable=false )
     */
    private $dateReservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif_a_payer", type="integer")
     */
    private $tarifAPayer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat_reservation", type="boolean")
     */
    private $etatReservation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Xm\UserBundle\Entity\User")
     * @ORM\JoinColumn(onDelete="CASCADE")
     **/
    private $passager;

     /**
     * @ORM\ManyToOne(targetEntity="Covoiturage")
     * @ORM\JoinColumn(onDelete="CASCADE")
     **/
    private $refCovoiturage;


    /**
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(onDelete="CASCADE")
     **/
    private $villeEmbarquement;


    /**
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(onDelete="CASCADE")
     **/
    private $villeDescente;

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
     * Set codeSecret
     *
     * @param string $codeSecret
     * @return Reservation
     */
    public function setCodeSecret($codeSecret)
    {
        $this->codeSecret = $codeSecret;

        return $this;
    }

    /**
     * Get codeSecret
     *
     * @return string 
     */
    public function getCodeSecret()
    {
        return $this->codeSecret;
    }

    /**
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime 
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set tarifAPayer
     *
     * @param integer $tarifAPayer
     * @return Reservation
     */
    public function setTarifAPayer($tarifAPayer)
    {
        $this->tarifAPayer = $tarifAPayer;

        return $this;
    }

    /**
     * Get tarifAPayer
     *
     * @return integer 
     */
    public function getTarifAPayer()
    {
        return $this->tarifAPayer;
    }

    /**
     * Set etatReservation
     *
     * @param boolean $etatReservation
     * @return Reservation
     */
    public function setEtatReservation($etatReservation)
    {
        $this->etatReservation = $etatReservation;

        return $this;
    }

    /**
     * Get etatReservation
     *
     * @return boolean 
     */
    public function getEtatReservation()
    {
        return $this->etatReservation;
    }

    /**
     * Set passager
     *
     * @param \Xm\UserBundle\Entity\User $passager
     * @return Reservation
     */
    public function setPassager(\Xm\UserBundle\Entity\User $passager )
    {
        $this->passager = $passager;

        return $this;
    }

    /**
     * Get passager
     *
     * @return \Xm\UserBundle\Entity\User 
     */
    public function getPassager()
    {
        return $this->passager;
    }

    /**
     * Set refCovoiturage
     *
     * @param \Xm\CovoiturageBundle\Entity\Covoiturage $refCovoiturage
     * @return Reservation
     */
    public function setRefCovoiturage(\Xm\CovoiturageBundle\Entity\Covoiturage $refCovoiturage )
    {
        $this->refCovoiturage = $refCovoiturage;

        return $this;
    }

    /**
     * Get refCovoiturage
     *
     * @return \Xm\CovoiturageBundle\Entity\Covoiturage 
     */
    public function getRefCovoiturage()
    {
        return $this->refCovoiturage;
    }

    /**
     * Set villeEmbarquement
     *
     * @param \Xm\CovoiturageBundle\Entity\Ville $villeEmbarquement
     * @return Reservation
     */
    public function setVilleEmbarquement(\Xm\CovoiturageBundle\Entity\Ville $villeEmbarquement )
    {
        $this->villeEmbarquement = $villeEmbarquement;

        return $this;
    }

    /**
     * Get villeEmbarquement
     *
     * @return \Xm\CovoiturageBundle\Entity\Ville 
     */
    public function getVilleEmbarquement()
    {
        return $this->villeEmbarquement;
    }

    /**
     * Set villeDescente
     *
     * @param \Xm\CovoiturageBundle\Entity\Ville $villeDescente
     * @return Reservation
     */
    public function setVilleDescente(\Xm\CovoiturageBundle\Entity\Ville $villeDescente )
    {
        $this->villeDescente = $villeDescente;

        return $this;
    }

    /**
     * Get villeDescente
     *
     * @return \Xm\CovoiturageBundle\Entity\Ville 
     */
    public function getVilleDescente()
    {
        return $this->villeDescente;
    }
}

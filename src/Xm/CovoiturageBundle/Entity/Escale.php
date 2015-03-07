<?php

namespace Xm\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escale
 *
 * @ORM\Table(name="Escale", indexes={@ORM\Index(name="Escale_ibfk_3", columns={"villeB_id"}), @ORM\Index(name="Escale_ibfk_4", columns={"ref_covoiturage"}), @ORM\Index(name="IDX_C433E8E5724E2796", columns={"villeA_id"})})
 * @ORM\Entity(repositoryClass="Xm\CovoiturageBundle\Entity\EscaleRepository") 
 */
class Escale
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero_escale", type="integer", nullable=false)
     */
    private $numeroEscale;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_troncon", type="integer", nullable=false)
     */
    private $prixTroncon;

    /**
     * @var \Ville
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="villeA_id", referencedColumnName="id")
     * })
     */
    private $villea;

    /**
     * @var \Ville
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="villeB_id", referencedColumnName="id")
     * })
     */
    private $villeb;

    /**
     * @var \Covoiturage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Covoiturage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_covoiturage", referencedColumnName="id")
     * })
     */
    private $refCovoiturage;



    /**
     * Set numeroEscale
     *
     * @param integer $numeroEscale
     * @return Escale
     */
    public function setNumeroEscale($numeroEscale)
    {
        $this->numeroEscale = $numeroEscale;

        return $this;
    }

    /**
     * Get numeroEscale
     *
     * @return integer 
     */
    public function getNumeroEscale()
    {
        return $this->numeroEscale;
    }

    /**
     * Set prixTroncon
     *
     * @param integer $prixTroncon
     * @return Escale
     */
    public function setPrixTroncon($prixTroncon)
    {
        $this->prixTroncon = $prixTroncon;

        return $this;
    }

    /**
     * Get prixTroncon
     *
     * @return integer 
     */
    public function getPrixTroncon()
    {
        return $this->prixTroncon;
    }

    /**
     * Set villea
     *
     * @param \Xm\CovoiturageBundle\Entity\Ville $villea
     * @return Escale
     */
    public function setVillea(\Xm\CovoiturageBundle\Entity\Ville $villea)
    {
        $this->villea = $villea;

        return $this;
    }

    /**
     * Get villea
     *
     * @return \Xm\CovoiturageBundle\Entity\Ville 
     */
    public function getVillea()
    {
        return $this->villea;
    }

    /**
     * Set villeb
     *
     * @param \Xm\CovoiturageBundle\Entity\Ville $villeb
     * @return Escale
     */
    public function setVilleb(\Xm\CovoiturageBundle\Entity\Ville $villeb)
    {
        $this->villeb = $villeb;

        return $this;
    }

    /**
     * Get villeb
     *
     * @return \Xm\CovoiturageBundle\Entity\Ville 
     */
    public function getVilleb()
    {
        return $this->villeb;
    }

    /**
     * Set refCovoiturage
     *
     * @param \Xm\CovoiturageBundle\Entity\Covoiturage $refCovoiturage
     * @return Escale
     */
    public function setRefCovoiturage(\Xm\CovoiturageBundle\Entity\Covoiturage $refCovoiturage)
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
}

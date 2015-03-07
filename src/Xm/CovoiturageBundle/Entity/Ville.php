<?php

namespace Xm\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Entity
 */

/**
* @ORM\Entity(repositoryClass="Xm\CovoiturageBundle\Entity\VilleRepository")
*/
class Ville
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
     * @ORM\Column(name="nom_ville", type="string", length=50)
     */
    private $nom_ville;


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
     * Set nom_ville
     *
     * @param string $nomVille
     * @return Ville
     */
    public function setNomVille($nomVille)
    {
        $this->nom_ville = $nomVille;

        return $this;
    }

    /**
     * Get nom_ville
     *
     * @return string 
     */
    public function getNomVille()
    {
        return $this->nom_ville;
    }
}

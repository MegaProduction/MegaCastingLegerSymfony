<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="Offre", indexes={@ORM\Index(name="IDX_6E47A96BEF0582D8", columns={"IdentifiantContrat"}), @ORM\Index(name="IDX_6E47A96BA7E21577", columns={"Localisation"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="Identifiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Intitule", type="string", length=50, nullable=false)
     */
    private $intitule;

    /**
     * @var int
     *
     * @ORM\Column(name="Reference", type="integer", nullable=false)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DureeDiffusion", type="string", length=50, nullable=true)
     */
    private $dureediffusion;

    /**
     * @var int
     *
     * @ORM\Column(name="NbPostes", type="integer", nullable=false)
     */
    private $nbpostes;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionPoste", type="string", length=50, nullable=false)
     */
    private $descriptionposte;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionProfil", type="string", length=50, nullable=false)
     */
    private $descriptionprofil;

    /**
     * @var string
     *
     * @ORM\Column(name="Coordonnées", type="string", length=50, nullable=false)
     */
    private $coordonn�es;

    /**
     * @var bool
     *
     * @ORM\Column(name="EstValide", type="boolean", nullable=false)
     */
    private $estvalide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateAjout", type="datetime", nullable=true)
     */
    private $dateajout;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantContrat", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantcontrat;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Localisation", referencedColumnName="Identifiant")
     * })
     */
    private $localisation;

    public function getName()
    {
        return $this->intitule;
    }
}

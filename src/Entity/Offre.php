<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="Offre", indexes={@ORM\Index(name="IDX_6E47A96BEF0582D8", columns={"IdentifiantContrat"}), @ORM\Index(name="IDX_6E47A96B525B950", columns={"IdentifiantMetier"}), @ORM\Index(name="IDX_6E47A96BA7E21577", columns={"Localisation"})})
 * @ORM\Entity(repositoryClass="App\Repository\OffreRepository")
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
     * @var \Metier
     *
     * @ORM\ManyToOne(targetEntity="Metier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantMetier", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantmetier;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Localisation", referencedColumnName="Identifiant")
     * })
     */
    private $localisation;

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDureediffusion(): ?string
    {
        return $this->dureediffusion;
    }

    public function setDureediffusion(?string $dureediffusion): self
    {
        $this->dureediffusion = $dureediffusion;

        return $this;
    }

    public function getNbpostes(): ?int
    {
        return $this->nbpostes;
    }

    public function setNbpostes(int $nbpostes): self
    {
        $this->nbpostes = $nbpostes;

        return $this;
    }

    public function getDescriptionposte(): ?string
    {
        return $this->descriptionposte;
    }

    public function setDescriptionposte(string $descriptionposte): self
    {
        $this->descriptionposte = $descriptionposte;

        return $this;
    }

    public function getDescriptionprofil(): ?string
    {
        return $this->descriptionprofil;
    }

    public function setDescriptionprofil(string $descriptionprofil): self
    {
        $this->descriptionprofil = $descriptionprofil;

        return $this;
    }

    public function getCoordonn�es(): ?string
    {
        return $this->coordonn�es;
    }

    public function setCoordonn�es(string $coordonn�es): self
    {
        $this->coordonn�es = $coordonn�es;

        return $this;
    }

    public function getEstvalide(): ?bool
    {
        return $this->estvalide;
    }

    public function setEstvalide(bool $estvalide): self
    {
        $this->estvalide = $estvalide;

        return $this;
    }

    public function getDateajout(): ?\DateTimeInterface
    {
        return $this->dateajout;
    }

    public function setDateajout(?\DateTimeInterface $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    public function getIdentifiantcontrat(): ?Contrat
    {
        return $this->identifiantcontrat;
    }

    public function setIdentifiantcontrat(?Contrat $identifiantcontrat): self
    {
        $this->identifiantcontrat = $identifiantcontrat;

        return $this;
    }

    public function getIdentifiantmetier(): ?Metier
    {
        return $this->identifiantmetier;
    }

    public function setIdentifiantmetier(?Metier $identifiantmetier): self
    {
        $this->identifiantmetier = $identifiantmetier;

        return $this;
    }

    public function getLocalisation(): ?Ville
    {
        return $this->localisation;
    }

    public function setLocalisation(?Ville $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }


}

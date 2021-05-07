<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table(name="Metier", indexes={@ORM\Index(name="IDX_560C08BAF79E1187", columns={"IdentifiantDomaine"})})
 * @ORM\Entity
 */
class Metier
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
     * @ORM\Column(name="Libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="Fiche", type="string", length=50, nullable=false)
     */
    private $fiche;

    /**
     * @var \Domaine
     *
     * @ORM\ManyToOne(targetEntity="Domaine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantDomaine", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantdomaine;

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getFiche(): ?string
    {
        return $this->fiche;
    }

    public function setFiche(string $fiche): self
    {
        $this->fiche = $fiche;

        return $this;
    }

    public function getIdentifiantdomaine(): ?Domaine
    {
        return $this->identifiantdomaine;
    }

    public function setIdentifiantdomaine(?Domaine $identifiantdomaine): self
    {
        $this->identifiantdomaine = $identifiantdomaine;

        return $this;
    }


}

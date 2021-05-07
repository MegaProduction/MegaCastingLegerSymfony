<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postule
 *
 * @ORM\Table(name="Postule", indexes={@ORM\Index(name="IDX_BB9E3D558B341D72", columns={"IdentifiantCandidat"}), @ORM\Index(name="IDX_BB9E3D55F4657399", columns={"IdentifiantOffre"})})
 * @ORM\Entity
 */
class Postule
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
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantCandidat", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantcandidat;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantOffre", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantoffre;

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function getIdentifiantcandidat(): ?Candidat
    {
        return $this->identifiantcandidat;
    }

    public function setIdentifiantcandidat(?Candidat $identifiantcandidat): self
    {
        $this->identifiantcandidat = $identifiantcandidat;

        return $this;
    }

    public function getIdentifiantoffre(): ?Offre
    {
        return $this->identifiantoffre;
    }

    public function setIdentifiantoffre(?Offre $identifiantoffre): self
    {
        $this->identifiantoffre = $identifiantoffre;

        return $this;
    }


}

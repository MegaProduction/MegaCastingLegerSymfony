<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offreclient
 *
 * @ORM\Table(name="OffreClient", indexes={@ORM\Index(name="IDX_9B6685B393C1B089", columns={"IdentifiantClient"}), @ORM\Index(name="IDX_9B6685B3F4657399", columns={"IdentifiantOffre"})})
 * @ORM\Entity
 */
class Offreclient
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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantClient", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantclient;

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

    public function getIdentifiantclient(): ?Client
    {
        return $this->identifiantclient;
    }

    public function setIdentifiantclient(?Client $identifiantclient): self
    {
        $this->identifiantclient = $identifiantclient;

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

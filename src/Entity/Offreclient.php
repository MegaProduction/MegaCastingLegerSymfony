<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offreclient
 *
 * @ORM\Table(name="OffreClient", indexes={@ORM\Index(name="IDX_9B6685B393C1B089", columns={"IdentifiantClient"})})
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
     * @var int
     *
     * @ORM\Column(name="IdentifiantOffre", type="integer", nullable=false)
     */
    private $identifiantoffre;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantClient", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantclient;

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function getIdentifiantoffre(): ?int
    {
        return $this->identifiantoffre;
    }

    public function setIdentifiantoffre(int $identifiantoffre): self
    {
        $this->identifiantoffre = $identifiantoffre;

        return $this;
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


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Erreur
 *
 * @ORM\Table(name="Erreur")
 * @ORM\Entity
 */
class Erreur
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
     * @ORM\Column(name="CodeErreur", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $codeerreur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MessageFR", type="string", length=0, nullable=true)
     */
    private $messagefr;

    /**
     * @var string
     *
     * @ORM\Column(name="MessageEN", type="string", length=0, nullable=false)
     */
    private $messageen;

    public function getIdentifiant(): ?int
    {
        return $this->identifiant;
    }

    public function getCodeerreur(): ?string
    {
        return $this->codeerreur;
    }

    public function setCodeerreur(string $codeerreur): self
    {
        $this->codeerreur = $codeerreur;

        return $this;
    }

    public function getMessagefr(): ?string
    {
        return $this->messagefr;
    }

    public function setMessagefr(?string $messagefr): self
    {
        $this->messagefr = $messagefr;

        return $this;
    }

    public function getMessageen(): ?string
    {
        return $this->messageen;
    }

    public function setMessageen(string $messageen): self
    {
        $this->messageen = $messageen;

        return $this;
    }


}

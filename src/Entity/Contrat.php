<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="Contrat")
 * @ORM\Entity
 */
class Contrat
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


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="Domaine")
 * @ORM\Entity
 */
class Domaine
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


}

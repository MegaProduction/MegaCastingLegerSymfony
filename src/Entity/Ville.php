<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="Ville", indexes={@ORM\Index(name="IDX_8202F6C79C4D711", columns={"IdentifiantPays"})})
 * @ORM\Entity
 */
class Ville
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
     * @ORM\Column(name="CodePostal", type="string", length=10, nullable=false)
     */
    private $codepostal;

    /**
     * @var \Pays
     *
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdentifiantPays", referencedColumnName="Identifiant")
     * })
     */
    private $identifiantpays;


}

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


}

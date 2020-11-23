<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Client", indexes={@ORM\Index(name="IDX_C0E80163E5B0E937", columns={"VilleIdentifiant"})})
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="Login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VilleIdentifiant", referencedColumnName="Identifiant")
     * })
     */
    private $villeidentifiant;


}

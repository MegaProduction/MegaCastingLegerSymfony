<?php

namespace App\Entity;

use App\Repository\OffreresearchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreresearchRepository::class)
 */
class Offreresearch extends Offre
{
    private $datefin;
    private $ordre;
    private $identifiantdomaine;
    /**
     * Set the value of ordre
     *
     * @return  self
     */ 
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get the value of ordre
     */ 
    public function getOrdre()
    {
        return $this->ordre;
    }
    

    /**
     * Get the value of datefin
     */ 
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set the value of datefin
     *
     * @return  self
     */ 
    public function setDatefin($datefin)
    {
        return $this->datefin = $datefin;
    }

    /**
     * Get the value of identifiantdomaine
     */ 
    public function getIdentifiantdomaine()
    {
        return $this->identifiantdomaine;
    }

    /**
     * Set the value of identifiantdomaine
     *
     * @return  self
     */ 
    public function setIdentifiantdomaine($identifiantdomaine)
    {
        $this->identifiantdomaine = $identifiantdomaine;

        return $this;
    }
}

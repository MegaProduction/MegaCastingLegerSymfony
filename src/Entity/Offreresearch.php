<?php

namespace App\Entity;

use App\Repository\OffreresearchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreresearchRepository::class)
 */
class Offreresearch extends Offre
{
    
    private $ordre;
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
}

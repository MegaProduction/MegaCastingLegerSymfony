<?php

namespace App\Entity;

use App\Entity\Candidat;
use App\Repository\CandidatPostuleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatPostuleRepository::class)
 */
class CandidatPostule extends Candidat
{
    
}

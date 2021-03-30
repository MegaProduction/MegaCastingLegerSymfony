<?php

namespace App\Entity;

use App\Entity\Postule;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostuleFileRepository;

/**
 * @ORM\Entity(repositoryClass=PostuleFileRepository::class)
 */
class PostuleFile extends Postule
{

    private $CV;

    public function getCV(): ?string
    {
        return $this->CV;
    }

    public function setCV(string $CV): self
    {
        $this->CV = $CV;

        return $this;
    }
}

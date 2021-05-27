<?php

namespace App\Entity;

use App\Repository\GareDepartRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GareDepartRepository::class)
 */
class GareDepart
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numGare;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localiteGare;


    public function getNumGare(): ?string
    {
        return $this->numGare;
    }

    public function setNumGare(string $numGare): self
    {
        $this->numGare = $numGare;

        return $this;
    }

    public function getLocaliteGare(): ?string
    {
        return $this->localiteGare;
    }

    public function setLocaliteGare(string $localiteGare): self
    {
        $this->localiteGare = $localiteGare;

        return $this;
    }
}

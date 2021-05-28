<?php

namespace App\Entity;

use App\Repository\GareRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GareRepository::class)
 */
class Gare
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *  @ORM\Column(type="string", length=255)
     */
    private $numGare;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LocaliteGare;

    /**
     * @ORM\ManyToOne(targetEntity=ville::class, inversedBy="gares")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="numVille")
     */
    private $ville;

   

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
        return $this->LocaliteGare;
    }

    public function setLocaliteGare(string $LocaliteGare): self
    {
        $this->LocaliteGare = $LocaliteGare;

        return $this;
    }

    public function getVille(): ?ville
    {
        return $this->ville;
    }

    public function setVille(?ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }
}

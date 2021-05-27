<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numVille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomVille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumVille(): ?string
    {
        return $this->numVille;
    }

    public function setNumVille(string $numVille): self
    {
        $this->numVille = $numVille;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nomVille;
    }

    public function setNomVille(string $nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }
}

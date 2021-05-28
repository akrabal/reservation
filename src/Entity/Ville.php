<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VilleRepository::class)
 */
class Ville
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column(type="string", length=255)
     */
    private $numVille;

    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomVille;

    /**
     * @ORM\OneToMany(targetEntity=Gare::class, mappedBy="ville")
     */
    private $gares;

    public function __construct()
    {
        $this->gares = new ArrayCollection();
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

    /**
     * @return Collection|Gare[]
     */
    public function getGares(): Collection
    {
        return $this->gares;
    }

    public function addGare(Gare $gare): self
    {
        if (!$this->gares->contains($gare)) {
            $this->gares[] = $gare;
            $gare->setVille($this);
        }

        return $this;
    }

    public function removeGare(Gare $gare): self
    {
        if ($this->gares->removeElement($gare)) {
            // set the owning side to null (unless already changed)
            if ($gare->getVille() === $this) {
                $gare->setVille(null);
            }
        }

        return $this;
    }
}

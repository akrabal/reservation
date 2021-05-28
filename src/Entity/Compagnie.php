<?php

namespace App\Entity;

use App\Repository\CompagnieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompagnieRepository::class)
 */
class Compagnie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numCompagnie;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompagnie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cordonnesCompagnie;

    /**
     * @ORM\OneToMany(targetEntity=Voyage::class, mappedBy="compagnie")
     */
    private $voyages;

    public function __construct()
    {
        $this->voyages = new ArrayCollection();
    }


    public function getNumCompagnie(): ?string
    {
        return $this->numCompagnie;
    }

    public function setNumCompagnie(string $numCompagnie): self
    {
        $this->numCompagnie = $numCompagnie;

        return $this;
    }

    public function getNomCompagnie(): ?string
    {
        return $this->nomCompagnie;
    }

    public function setNomCompagnie(string $nomCompagnie): self
    {
        $this->nomCompagnie = $nomCompagnie;

        return $this;
    }

    public function getCordonnesCompagnie(): ?string
    {
        return $this->cordonnesCompagnie;
    }

    public function setCordonnesCompagnie(string $cordonnesCompagnie): self
    {
        $this->cordonnesCompagnie = $cordonnesCompagnie;

        return $this;
    }

    /**
     * @return Collection|Voyage[]
     */
    public function getVoyages(): Collection
    {
        return $this->voyages;
    }

    public function addVoyage(Voyage $voyage): self
    {
        if (!$this->voyages->contains($voyage)) {
            $this->voyages[] = $voyage;
            $voyage->setCompagnie($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): self
    {
        if ($this->voyages->removeElement($voyage)) {
            // set the owning side to null (unless already changed)
            if ($voyage->getCompagnie() === $this) {
                $voyage->setCompagnie(null);
            }
        }

        return $this;
    }
}

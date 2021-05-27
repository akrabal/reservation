<?php

namespace App\Entity;

use App\Repository\CompagnieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompagnieRepository::class)
 */
class Compagnie
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
    private $numCompagnie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompagnie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cordonnesCompagnie;

    public function getId(): ?int
    {
        return $this->id;
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
}

<?php

namespace App\Entity;

use App\Repository\PassagerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PassagerRepository::class)
 */
class Passager
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numPassager;

   
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseMailPassager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroPassager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressePhysiquePassager;

   

    public function getNumPassager(): ?string
    {
        return $this->numPassager;
    }

    public function setNumPassager(string $numPassager): self
    {
        $this->numPassager = $numPassager;

        return $this;
    }

    public function getAdresseMailPassager(): ?string
    {
        return $this->adresseMailPassager;
    }

    public function setAdresseMailPassager(string $adresseMailPassager): self
    {
        $this->adresseMailPassager = $adresseMailPassager;

        return $this;
    }

    public function getNumeroPassager(): ?string
    {
        return $this->numeroPassager;
    }

    public function setNumeroPassager(string $numeroPassager): self
    {
        $this->numeroPassager = $numeroPassager;

        return $this;
    }

    public function getAdressePhysiquePassager(): ?string
    {
        return $this->adressePhysiquePassager;
    }

    public function setAdressePhysiquePassager(string $adressePhysiquePassager): self
    {
        $this->adressePhysiquePassager = $adressePhysiquePassager;

        return $this;
    }
}

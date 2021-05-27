<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $nomclient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseMailClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adressephysiqueClient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenomClient;
    }

    public function setPrenomClient(string $prenomClient): self
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    public function getAdresseMailClient(): ?string
    {
        return $this->adresseMailClient;
    }

    public function setAdresseMailClient(string $adresseMailClient): self
    {
        $this->adresseMailClient = $adresseMailClient;

        return $this;
    }

    public function getNumeroClient(): ?string
    {
        return $this->numeroClient;
    }

    public function setNumeroClient(string $numeroClient): self
    {
        $this->numeroClient = $numeroClient;

        return $this;
    }

    public function getAdressephysiqueClient(): ?string
    {
        return $this->adressephysiqueClient;
    }

    public function setAdressephysiqueClient(string $adressephysiqueClient): self
    {
        $this->adressephysiqueClient = $adressephysiqueClient;

        return $this;
    }
}

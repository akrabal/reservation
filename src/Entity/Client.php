<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numclient;

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

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="client", orphanRemoval=true)
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getnumclient(): ?string
    {
        return $this->numclient;
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

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setClient($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getClient() === $this) {
                $reservation->setClient(null);
            }
        }

        return $this;
    }
}

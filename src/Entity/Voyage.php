<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoyageRepository::class)
 */
class Voyage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numVoyage;


    /**
     * @ORM\Column(type="datetime")
     */
    private $heureDepart;

    /**
     * @ORM\Column(type="datetime")
     */
    private $heureArrive;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statutVoyage;

    /**
     * @ORM\ManyToOne(targetEntity=gare::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="numGare")
     */
    private $GareDepart;

    /**
     * @ORM\ManyToOne(targetEntity=gare::class)
     * @ORM\JoinColumn(nullable=false, referencedColumnName="numGare")
     */
    private $GareArrive;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="voyage", orphanRemoval=true)
     */
    private $reservations;

    /**
     * @ORM\ManyToOne(targetEntity=compagnie::class, inversedBy="voyages")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="numCompagnie")
     */
    private $compagnie;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

  

    public function getNumVoyage(): ?string
    {
        return $this->numVoyage;
    }

    public function setNumVoyage(string $numVoyage): self
    {
        $this->numVoyage = $numVoyage;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getHeureArrive(): ?\DateTimeInterface
    {
        return $this->heureArrive;
    }

    public function setHeureArrive(\DateTimeInterface $heureArrive): self
    {
        $this->heureArrive = $heureArrive;

        return $this;
    }

    public function getStatutVoyage(): ?bool
    {
        return $this->statutVoyage;
    }

    public function setStatutVoyage(bool $statutVoyage): self
    {
        $this->statutVoyage = $statutVoyage;

        return $this;
    }

    public function getGareDepart(): ?gare
    {
        return $this->GareDepart;
    }

    public function setGareDepart(?gare $GareDepart): self
    {
        $this->GareDepart = $GareDepart;

        return $this;
    }

    public function getGareArrive(): ?gare
    {
        return $this->GareArrive;
    }

    public function setGareArrive(?gare $GareArrive): self
    {
        $this->GareArrive = $GareArrive;

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
            $reservation->setVoyage($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getVoyage() === $this) {
                $reservation->setVoyage(null);
            }
        }

        return $this;
    }

    public function getCompagnie(): ?compagnie
    {
        return $this->compagnie;
    }

    public function setCompagnie(?compagnie $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }
}

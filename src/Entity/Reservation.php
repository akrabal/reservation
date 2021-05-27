<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=255)
     */
    private $numReservation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateReservation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statutReservation;

    public function getnumReservation(): ?string
    {
        return $this->numReservation;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getStatutReservation(): ?bool
    {
        return $this->statutReservation;
    }

    public function setStatutReservation(bool $statutReservation): self
    {
        $this->statutReservation = $statutReservation;

        return $this;
    }
}

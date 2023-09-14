<?php

namespace App\Entity;

use App\Repository\SchedulesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SchedulesRepository::class)]
class Schedules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $day = null;

    #[ORM\Column(length: 55)]
    private ?string $dayMorning = null;

    #[ORM\Column(length: 55)]
    private ?string $dayNight = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getDayMorning(): ?string
    {
        return $this->dayMorning;
    }

    public function setDayMorning(string $dayMorning): static
    {
        $this->dayMorning = $dayMorning;

        return $this;
    }

    public function getDayNight(): ?string
    {
        return $this->dayNight;
    }

    public function setDayNight(string $dayNight): static
    {
        $this->dayNight = $dayNight;

        return $this;
    }
}

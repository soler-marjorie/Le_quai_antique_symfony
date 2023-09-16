<?php

namespace App\Entity;

use App\Repository\FormuleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormuleRepository::class)]
class Formule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $formules = null;

    #[ORM\Column(length: 255)]
    private ?string $plat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormules(): ?string
    {
        return $this->formules;
    }

    public function setFormules(string $formules): static
    {
        $this->formules = $formules;

        return $this;
    }

    public function getPlat(): ?string
    {
        return $this->plat;
    }

    public function setPlat(string $plat): static
    {
        $this->plat = $plat;

        return $this;
    }
}

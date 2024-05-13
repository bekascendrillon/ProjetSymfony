<?php

namespace App\Entity;

use App\Repository\PublicationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicationsRepository::class)]
class Publications
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TexteP = null;

    #[ORM\Column(length: 255)]
    private ?string $ImageP = null;

    #[ORM\Column(length: 255)]
    private ?string $IdUtilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteP(): ?string
    {
        return $this->TexteP;
    }

    public function setTexteP(string $TexteP): static
    {
        $this->TexteP = $TexteP;

        return $this;
    }

    public function getImageP(): ?string
    {
        return $this->ImageP;
    }

    public function setImageP(string $ImageP): static
    {
        $this->ImageP = $ImageP;

        return $this;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(string $IdUtilisateur): static
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }
}

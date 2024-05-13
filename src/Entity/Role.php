<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomRole = null;

    #[ORM\Column(length: 255)]
    private ?string $PrenomRole = null;

    #[ORM\Column(length: 255)]
    private ?string $Position = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRole(): ?string
    {
        return $this->NomRole;
    }

    public function setNomRole(string $NomRole): static
    {
        $this->NomRole = $NomRole;

        return $this;
    }

    public function getPrenomRole(): ?string
    {
        return $this->PrenomRole;
    }

    public function setPrenomRole(string $PrenomRole): static
    {
        $this->PrenomRole = $PrenomRole;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(string $Position): static
    {
        $this->Position = $Position;

        return $this;
    }
}

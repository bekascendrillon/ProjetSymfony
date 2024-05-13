<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TexteC = null;

    #[ORM\Column(length: 255)]
    private ?string $ImageC = null;

    #[ORM\Column(length: 255)]
    private ?string $Emoticon = null;

    #[ORM\Column(length: 255)]
    private ?string $IdUtilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexteC(): ?string
    {
        return $this->TexteC;
    }

    public function setTexteC(string $TexteC): static
    {
        $this->TexteC = $TexteC;

        return $this;
    }

    public function getImageC(): ?string
    {
        return $this->ImageC;
    }

    public function setImageC(string $ImageC): static
    {
        $this->ImageC = $ImageC;

        return $this;
    }

    public function getEmoticon(): ?string
    {
        return $this->Emoticon;
    }

    public function setEmoticon(string $Emoticon): static
    {
        $this->Emoticon = $Emoticon;

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

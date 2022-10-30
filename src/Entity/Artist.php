<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Tape::class, mappedBy: 'Artist')]
    private Collection $tapes;

    #[ORM\Column]
    private ?bool $Archived = null;

    #[ORM\Column]
    private ?bool $Suspended = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cover = null;

    public function __construct()
    {
        $this->tapes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Tape>
     */
    public function getTapes(): Collection
    {
        return $this->tapes;
    }

    public function addTape(Tape $tape): self
    {
        if (!$this->tapes->contains($tape)) {
            $this->tapes->add($tape);
            $tape->addArtist($this);
        }

        return $this;
    }

    public function removeTape(Tape $tape): self
    {
        if ($this->tapes->removeElement($tape)) {
            $tape->removeArtist($this);
        }

        return $this;
    }

    public function isSuspended(): ?bool
    {
        return $this->Suspended;
    }

    public function setSuspended(bool $suspended): self
    {
        $this->Suspended = $suspended;

        return $this;
    }

    public function isArchived(): ?bool
    {
        return $this->Archived;
    }

    public function setArchived(bool $Archived): self
    {
        $this->Archived = $Archived;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getFullCoverPath() {
        return '/uploads/artists/' . $this->getCover();
    }
}

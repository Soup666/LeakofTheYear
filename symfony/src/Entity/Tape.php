<?php

namespace App\Entity;

use App\Repository\TapeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TapeRepository::class)]
class Tape
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $releaseYear = null;

    #[ORM\ManyToMany(targetEntity: Artist::class, inversedBy: 'tapes')]
    private Collection $Artist;

    #[ORM\Column]
    private ?bool $Suspended = null;

    #[ORM\Column]
    private ?bool $Archived = null;

    public function __construct()
    {
        $this->Artist = new ArrayCollection();
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

    public function getReleaseYear(): ?int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): self
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    /**
     * @return Collection<int, Artist>
     */
    public function getArtist(): Collection
    {
        return $this->Artist;
    }

    public function addArtist(Artist $artist): self
    {
        if (!$this->Artist->contains($artist)) {
            $this->Artist->add($artist);
        }

        return $this;
    }

    public function removeArtist(Artist $artist): self
    {
        $this->Artist->removeElement($artist);

        return $this;
    }

    public function isSuspended(): ?bool
    {
        return $this->Suspended;
    }

    public function setSuspended(bool $Suspended): self
    {
        $this->Suspended = $Suspended;

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
}

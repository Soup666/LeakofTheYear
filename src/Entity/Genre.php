<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Tape::class, mappedBy: 'genre')]
    private Collection $tapes;

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
            $tape->addGenre($this);
        }

        return $this;
    }

    public function removeTape(Tape $tape): self
    {
        if ($this->tapes->removeElement($tape)) {
            $tape->removeGenre($this);
        }

        return $this;
    }
}

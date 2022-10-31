<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LabelRepository::class)]
class Label
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'label', targetEntity: Tape::class)]
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
            $tape->setLabel($this);
        }

        return $this;
    }

    public function removeTape(Tape $tape): self
    {
        if ($this->tapes->removeElement($tape)) {
            // set the owning side to null (unless already changed)
            if ($tape->getLabel() === $this) {
                $tape->setLabel(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\TapeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cover = null;

    #[ORM\Column(type: 'text', length: 65535, nullable: true)]
    private ?string $Description = null;

    #[ORM\ManyToOne(inversedBy: 'tapes')]
    private ?User $author = null;

    #[ORM\OneToMany(mappedBy: 'Tape', targetEntity: Review::class)]
    private Collection $reviews;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $format = null;

    #[ORM\ManyToOne(inversedBy: 'tapes')]
    private ?Label $label = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $releaseDate = null;

    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'tapes')]
    private Collection $genre;

    #[ORM\ManyToMany(targetEntity: Tag::class, inversedBy: 'tapes')]
    private Collection $tag;

    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'tapes')]
    private Collection $Associate;

    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'Associate')]
    private Collection $tapes;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $audioFile = null;


    public function __construct()
    {
        $this->Artist = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->genre = new ArrayCollection();
        $this->tag = new ArrayCollection();
        $this->Associate = new ArrayCollection();
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

    public function getMainArtist() : ?Artist
    {
        return $this->Artist->first();
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
        return '/uploads/covers/' . $this->getCover();
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function getDescriptionShort(): ?string
    {
        return substr($this->Description, 0, 200) . '...';
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setTape($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getTape() === $this) {
                $review->setTape(null);
            }
        }

        return $this;
    }

    function getAverageScore() {
        $sum = 0;
        foreach ($this->getReviews() as $review) {
            $sum += $review->getScore();
        }
        return $this->getReviews()->count() != 0 ? ceil($sum / $this->getReviews()->count()) : 'N/A';
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getLabel(): ?Label
    {
        return $this->label;
    }

    public function getLabelName() : string
    {
        return $this->label ? $this->label->getName() : "";
    }

    public function setLabel(?Label $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return Collection<int, Genre>
     */
    public function getGenre(): Collection
    {
        return $this->genre;
    }

    public function getGenreNames() : string
    {
        $names = [];
        foreach ($this->genre as $genre) {
            $names[] = $genre->getName();
        }
        return implode(', ', $names);
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genre->contains($genre)) {
            $this->genre->add($genre);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->genre->removeElement($genre);

        return $this;
    }

    /**
     * @return Collection<int, Tag>
     */
    public function getTag(): Collection
    {
        return $this->tag;
    }

    public function getTagNames() : string
    {
        $names = [];
        foreach ($this->tag as $tag) {
            $names[] = $tag->getName();
        }
        return implode(', ', $names);
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tag->contains($tag)) {
            $this->tag->add($tag);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tag->removeElement($tag);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getAssociate(): Collection
    {
        return $this->Associate;
    }

    public function addAssociate(self $associate): self
    {
        if (!$this->Associate->contains($associate)) {
            $this->Associate->add($associate);
        }

        return $this;
    }

    public function removeAssociate(self $associate): self
    {
        $this->Associate->removeElement($associate);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getTapes(): Collection
    {
        return $this->tapes;
    }

    public function addTape(self $tape): self
    {
        if (!$this->tapes->contains($tape)) {
            $this->tapes->add($tape);
            $tape->addAssociate($this);
        }

        return $this;
    }

    public function removeTape(self $tape): self
    {
        if ($this->tapes->removeElement($tape)) {
            $tape->removeAssociate($this);
        }

        return $this;
    }

    public function isAssociate() : bool {
        return $this->getTapes()->count() > 0;
    }

    public function getAssociateCover() : ?string {
        return $this->getTapes()->first()->getCover();
    }

    public function getAudioFile(): ?string
    {
        return $this->audioFile;
    }

    public function setAudioFile(?string $audioFile): self
    {
        $this->audioFile = $audioFile;

        return $this;
    }
}

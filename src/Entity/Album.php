<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Musique", inversedBy="albums")
     */
    private $musiques;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $collection;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    public function __construct()
    {
        $this->musiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Musique[]
     */
    public function getMusiques(): Collection
    {
        return $this->musiques;
    }

    public function addMusique(Musique $musique): self
    {
        if (!$this->musiques->contains($musique)) {
            $this->musiques[] = $musique;
        }

        return $this;
    }

    public function removeMusique(Musique $musique): self
    {
        if ($this->musiques->contains($musique)) {
            $this->musiques->removeElement($musique);
        }

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setCollection(?string $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}

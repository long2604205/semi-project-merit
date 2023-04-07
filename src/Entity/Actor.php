<?php

namespace App\Entity;

use App\Repository\ActorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActorRepository::class)]
class Actor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $birthName = null;

    #[ORM\Column(length: 255)]
    private ?string $nickName = null;

    #[ORM\Column(nullable: true)]
    private ?int $gender = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birth = null;

    #[ORM\Column(length: 255)]
    private ?string $born = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $height = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'actor', targetEntity: ImageShare::class)]
    private Collection $imageShares;

    // #[ORM\Column(length: 255, nullable: true)]
    // private ?string $bio = null;

    // #[ORM\Column(type: Types::TEXT, nullable: true)]
    // private ?string $biography = null;
    #[ORM\Column(type: Types::TEXT)]
    private ?string $biography = null;

    #[ORM\OneToMany(mappedBy: 'actor', targetEntity: Movie::class)]
    private Collection $movie;

    // #[ORM\ManyToMany(targetEntity: Movie::class, inversedBy: 'actors')]
    // private Collection $movie;

    public function __construct()
    {
        $this->imageShares = new ArrayCollection();
        // $this->movie = new ArrayCollection();
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

    public function getBirthName(): ?string
    {
        return $this->birthName;
    }

    public function setBirthName(?string $birthName): self
    {
        $this->birthName = $birthName;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(string $nickName): self
    {
        $this->nickName = $nickName;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirth(): ?\DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(?\DateTimeInterface $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getBorn(): ?string
    {
        return $this->born;
    }

    public function setBorn(string $born): self
    {
        $this->born = $born;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, ImageShare>
     */
    public function getImageShares(): Collection
    {
        return $this->imageShares;
    }

    public function addImageShare(ImageShare $imageShare): self
    {
        if (!$this->imageShares->contains($imageShare)) {
            $this->imageShares->add($imageShare);
            $imageShare->setActor($this);
        }

        return $this;
    }

    public function removeImageShare(ImageShare $imageShare): self
    {
        if ($this->imageShares->removeElement($imageShare)) {
            // set the owning side to null (unless already changed)
            if ($imageShare->getActor() === $this) {
                $imageShare->setActor(null);
            }
        }

        return $this;
    }

    // public function getBio(): ?string
    // {
    //     return $this->bio;
    // }

    // public function setBio(?string $bio): self
    // {
    //     $this->bio = $bio;

    //     return $this;
    // }

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }

    // /**
    //  * @return Collection<int, Movie>
    //  */
    // public function getMovie(): Collection
    // {
    //     return $this->movie;
    // }

    // public function addMovie(Movie $movie): self
    // {
    //     if (!$this->movie->contains($movie)) {
    //         $this->movie->add($movie);
    //     }

    //     return $this;
    // }

    // public function removeMovie(Movie $movie): self
    // {
    //     $this->movie->removeElement($movie);

    //     return $this;
    // }

    /**
     * @return Collection<int, Movie>
     */
    public function getMovie(): Collection
    {
        return $this->movie;
    }

    public function addMovie(Movie $movie): self
    {
        if (!$this->movie->contains($movie)) {
            $this->movie->add($movie);
            $movie->setActor($this);
        }

        return $this;
    }

    public function removeMovie(Movie $movie): self
    {
        if ($this->movie->removeElement($movie)) {
            // set the owning side to null (unless already changed)
            if ($movie->getActor() === $this) {
                $movie->setActor(null);
            }
        }

        return $this;
    }
}

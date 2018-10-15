<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation as Serializer;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ActorRepository")
 * @ORM\Table(name="actor")
 * @ApiResource(attributes={"normalization_context"={"groups"={"actor"}}})
 */
class Actor
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Groups({"movie", "actor"})
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"actor"})
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @Serializer\Groups({"actor"})
     */
    private $picture;

    /**
     * @ORM\ManyToMany(targetEntity="Movie", mappedBy="actors")
     * @Serializer\Groups({"actor"})
     */
    private $movies;

    public function __construct()
    {
        $this->movies = new ArrayCollection();
    }

    public function addMovie(Movie $movie)
    {
        $this->movies[] = $movie;
    }

    public function getMovies()
    {
        return $this->movies;
    }

    public function removeMovie(Movie $movie)
    {
        $this->movies->removeElement($movie);
        return $this;
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

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}

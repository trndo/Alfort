<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomePageRepository")
 */
class HomePage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $title1;

    /**
     * @ORM\Column(type="text")
     */
    private $about_us;

    /**
     * @ORM\Column(type="text")
     */
    private $title2;

    /**
     * @ORM\Column(type="text")
     */
    private $about_us2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle1(): ?string
    {
        return $this->title1;
    }

    public function setTitle1(string $title1): self
    {
        $this->title1 = $title1;

        return $this;
    }

    public function getAboutUs(): ?string
    {
        return $this->about_us;
    }

    public function setAboutUs(string $about_us): self
    {
        $this->about_us = $about_us;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->title2;
    }

    public function setTitle2(string $title2): self
    {
        $this->title2 = $title2;

        return $this;
    }

    public function getAboutUs2(): ?string
    {
        return $this->about_us2;
    }

    public function setAboutUs2(string $about_us2): self
    {
        $this->about_us2 = $about_us2;

        return $this;
    }
}

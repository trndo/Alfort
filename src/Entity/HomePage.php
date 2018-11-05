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
     * @ORM\Column(type="text",nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $about_us;

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

    public function getAboutUs(): ?string
    {
        return $this->about_us;
    }

    public function setAboutUs(string $about_us): self
    {
        $this->about_us = $about_us;

        return $this;
    }


}

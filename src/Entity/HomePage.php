<?php

namespace App\Entity;

use App\Traits\UploadTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomePageRepository")
 */
class HomePage
{
    use UploadTrait;
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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagePath;

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

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }


}

<?php

namespace App\Entity;

use App\Traits\UploadTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsefulRepository")
 */
class Useful
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
    private $aTitle;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $aBody;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagePath;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getATitle(): ?string
    {
        return $this->aTitle;
    }

    public function setATitle(string $aTitle): self
    {
        $this->aTitle = $aTitle;

        return $this;
    }

    public function getABody(): ?string
    {
        return $this->aBody;
    }

    public function setABody(string $aBody): self
    {
        $this->aBody = $aBody;

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

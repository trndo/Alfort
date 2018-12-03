<?php

namespace App\Entity;

use App\Traits\UploadTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SMBRepository")
 */
class SMB
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
    private $title1;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $txt1;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $txt2;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $txt3;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $title2;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $prdct1;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $prdct2;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $prdct3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagePath;

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

    public function getTxt1(): ?string
    {
        return $this->txt1;
    }

    public function setTxt1(string $txt1): self
    {
        $this->txt1 = $txt1;

        return $this;
    }

    public function getTxt2(): ?string
    {
        return $this->txt2;
    }

    public function setTxt2(string $txt2): self
    {
        $this->txt2 = $txt2;

        return $this;
    }

    public function getTxt3(): ?string
    {
        return $this->txt3;
    }

    public function setTxt3(string $txt3): self
    {
        $this->txt3 = $txt3;

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

    public function getPrdct1(): ?string
    {
        return $this->prdct1;
    }

    public function setPrdct1(string $prdct1): self
    {
        $this->prdct1 = $prdct1;

        return $this;
    }

    public function getPrdct2(): ?string
    {
        return $this->prdct2;
    }

    public function setPrdct2(string $prdct2): self
    {
        $this->prdct2 = $prdct2;

        return $this;
    }

    public function getPrdct3(): ?string
    {
        return $this->prdct3;
    }

    public function setPrdct3(string $prdct3): self
    {
        $this->prdct3 = $prdct3;

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

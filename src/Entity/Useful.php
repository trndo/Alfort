<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsefulRepository")
 */
class Useful
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
    private $aTitle1;

    /**
     * @ORM\Column(type="text")
     */
    private $aBody1;

    /**
     * @ORM\Column(type="text")
     */
    private $aTitle2;

    /**
     * @ORM\Column(type="text")
     */
    private $aBody2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getATitle1(): ?string
    {
        return $this->aTitle1;
    }

    public function setATitle1(string $aTitle1): self
    {
        $this->aTitle1 = $aTitle1;

        return $this;
    }

    public function getABody1(): ?string
    {
        return $this->aBody1;
    }

    public function setABody1(string $aBody1): self
    {
        $this->aBody1 = $aBody1;

        return $this;
    }

    public function getATitle2(): ?string
    {
        return $this->aTitle2;
    }

    public function setATitle2(string $aTitle2): self
    {
        $this->aTitle2 = $aTitle2;

        return $this;
    }

    public function getABody2(): ?string
    {
        return $this->aBody2;
    }

    public function setABody2(string $aBody2): self
    {
        $this->aBody2 = $aBody2;

        return $this;
    }
}

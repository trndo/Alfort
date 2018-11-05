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
     * @ORM\Column(type="text",nullable=true)
     */
    private $aTitle;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $aBody;

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

}

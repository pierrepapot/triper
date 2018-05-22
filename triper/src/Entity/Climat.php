<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClimatRepository")
 */
class Climat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $Code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $TempMinAverage;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $TempMaxAverage;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $TempAverage;

    public function getId()
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(?string $Code): self
    {
        $this->Code = $Code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getTempMinAverage(): ?float
    {
        return $this->TempMinAverage;
    }

    public function setTempMinAverage(?float $TempMinAverage): self
    {
        $this->TempMinAverage = $TempMinAverage;

        return $this;
    }

    public function getTempMaxAverage(): ?float
    {
        return $this->TempMaxAverage;
    }

    public function setTempMaxAverage(?float $TempMaxAverage): self
    {
        $this->TempMaxAverage = $TempMaxAverage;

        return $this;
    }

    public function getTempAverage(): ?float
    {
        return $this->TempAverage;
    }

    public function setTempAverage(?float $TempAverage): self
    {
        $this->TempAverage = $TempAverage;

        return $this;
    }
}

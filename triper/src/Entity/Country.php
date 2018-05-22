<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{


    /**
     * @ORM\Column(type="string", length=35)
     */
    private $Name;

    /**
     * @ORM\id()
     * @ORM\Column(type="string", length=4)
     */
    private $Code;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Capital;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Province;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Area;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Population;

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function getCapital(): ?string
    {
        return $this->Capital;
    }

    public function setCapital(?string $Capital): self
    {
        $this->Capital = $Capital;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->Province;
    }

    public function setProvince(?string $Province): self
    {
        $this->Province = $Province;

        return $this;
    }

    public function getArea(): ?float
    {
        return $this->Area;
    }

    public function setArea(?float $Area): self
    {
        $this->Area = $Area;

        return $this;
    }

    public function getPopulation(): ?int
    {
        return $this->Population;
    }

    public function setPopulation(?int $Population): self
    {
        $this->Population = $Population;

        return $this;
    }
}

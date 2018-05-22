<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=35)
     */
    private $Name;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=4)
     */
    private $Country;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=35)
     */
    private $Province;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Population;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Longitude;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Latitude;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->Province;
    }

    public function setProvince(string $Province): self
    {
        $this->Province = $Province;

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

    public function getLongitude(): ?float
    {
        return $this->Longitude;
    }

    public function setLongitude(?float $Longitude): self
    {
        $this->Longitude = $Longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->Latitude;
    }

    public function setLatitude(?float $Latitude): self
    {
        $this->Latitude = $Latitude;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguageRepository")
 */
class Language
{


    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=4)
     */
    private $Country;

    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=50)
     */
    private $Name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Percentage;


    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
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

    public function getPercentage(): ?float
    {
        return $this->Percentage;
    }

    public function setPercentage(?float $Percentage): self
    {
        $this->Percentage = $Percentage;

        return $this;
    }
}

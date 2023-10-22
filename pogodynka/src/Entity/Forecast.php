<?php

namespace App\Entity;

use App\Repository\ForecastRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ForecastRepository::class)]
class Forecast
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'forecasts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $celsius = null;

    #[ORM\Column(length: 255)]
    private ?string $wind = null;

    #[ORM\Column(length: 255)]
    private ?string $cloudy = null;

    #[ORM\Column]
    private ?float $ammount_of_precipitation = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: '0')]
    private ?string $propability_of_precipitation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCelsius(): ?string
    {
        return $this->celsius;
    }

    public function setCelsius(string $celsius): static
    {
        $this->celsius = $celsius;

        return $this;
    }

    public function getWind(): ?string
    {
        return $this->wind;
    }

    public function setWind(string $wind): static
    {
        $this->wind = $wind;

        return $this;
    }

    public function getCloudy(): ?string
    {
        return $this->cloudy;
    }

    public function setCloudy(string $cloudy): static
    {
        $this->cloudy = $cloudy;

        return $this;
    }

    public function getAmmountOfPrecipitation(): ?float
    {
        return $this->ammount_of_precipitation;
    }

    public function setAmmountOfPrecipitation(float $ammount_of_precipitation): static
    {
        $this->ammount_of_precipitation = $ammount_of_precipitation;

        return $this;
    }

    public function getPropabilityOfPrecipitation(): ?string
    {
        return $this->propability_of_precipitation;
    }

    public function setPropabilityOfPrecipitation(string $propability_of_precipitation): static
    {
        $this->propability_of_precipitation = $propability_of_precipitation;

        return $this;
    }
}

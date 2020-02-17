<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EuKurRepository")
 */
class EuKur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $dolar;

    /**
     * @ORM\Column(type="float")
     */
    private $euro;

    /**
     * @ORM\Column(type="float")
     */
    private $sterlin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDolar(): ?float
    {
        return $this->dolar;
    }

    public function setDolar(float $dolar): self
    {
        $this->dolar = $dolar;
        return $this;
    }

    public function getEuro(): ?float
    {
        return $this->euro;
    }

    public function setEuro(float $euro): self
    {
        $this->euro = $euro;

        return $this;
    }

    public function getSterlin(): ?float
    {
        return $this->sterlin;
    }

    public function setSterlin(float $sterlin): self
    {
        $this->sterlin = $sterlin;

        return $this;
    }
}

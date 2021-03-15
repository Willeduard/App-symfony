<?php

namespace App\Entity;

use App\Repository\SumaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SumaRepository::class)
 */
class Suma
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero1;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero2;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero1(): ?int
    {
        return $this->numero1;
    }

    public function setNumero1(int $numero1): self
    {
        $this->numero1 = $numero1;

        return $this;
    }

    public function getNumero2(): ?int
    {
        return $this->numero2;
    }

    public function setNumero2(int $numero2): self
    {
        $this->numero2 = $numero2;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}

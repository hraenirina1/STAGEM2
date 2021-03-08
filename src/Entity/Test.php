<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Allo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Te;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAllo(): ?string
    {
        return $this->Allo;
    }

    public function setAllo(string $Allo): self
    {
        $this->Allo = $Allo;

        return $this;
    }

    public function getTe(): ?string
    {
        return $this->Te;
    }

    public function setTe(string $Te): self
    {
        $this->Te = $Te;

        return $this;
    }
}

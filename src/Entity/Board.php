<?php

namespace App\Entity;

use App\Repository\BoardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoardRepository::class)
 */
class Board
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usualname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siiname;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $boarddescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsualname(): ?string
    {
        return $this->usualname;
    }

    public function setUsualname(string $usualname): self
    {
        $this->usualname = $usualname;

        return $this;
    }

    public function getSiiname(): ?string
    {
        return $this->siiname;
    }

    public function setSiiname(string $siiname): self
    {
        $this->siiname = $siiname;

        return $this;
    }

    public function getBoarddescription(): ?string
    {
        return $this->boarddescription;
    }

    public function setBoarddescription(?string $boarddescription): self
    {
        $this->boarddescription = $boarddescription;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\WorkbookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkbookRepository::class)
 */
class Workbook
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
    private $workbookname;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkbookname(): ?string
    {
        return $this->workbookname;
    }

    public function setWorkbookname(string $workbookname): self
    {
        $this->workbookname = $workbookname;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}

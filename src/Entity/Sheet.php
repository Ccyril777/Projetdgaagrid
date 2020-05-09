<?php

namespace App\Entity;

use App\Repository\SheetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SheetRepository::class)
 */
class Sheet
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
    private $sheetname;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $sheetdescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSheetname(): ?string
    {
        return $this->sheetname;
    }

    public function setSheetname(string $sheetname): self
    {
        $this->sheetname = $sheetname;

        return $this;
    }

    public function getSheetdescription(): ?string
    {
        return $this->sheetdescription;
    }

    public function setSheetdescription(?string $sheetdescription): self
    {
        $this->sheetdescription = $sheetdescription;

        return $this;
    }
}

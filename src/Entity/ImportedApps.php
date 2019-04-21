<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImportedAppsRepository")
 */
class ImportedApps
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $AppID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $au;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $iaa;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ab;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $manual;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppID(): ?int
    {
        return $this->AppID;
    }

    public function setAppID(int $AppID): self
    {
        $this->AppID = $AppID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getAu(): ?bool
    {
        return $this->au;
    }

    public function setAu(?bool $au): self
    {
        $this->au = $au;

        return $this;
    }

    public function getIaa(): ?bool
    {
        return $this->iaa;
    }

    public function setIaa(?bool $iaa): self
    {
        $this->iaa = $iaa;

        return $this;
    }

    public function getAb(): ?bool
    {
        return $this->ab;
    }

    public function setAb(?bool $ab): self
    {
        $this->ab = $ab;

        return $this;
    }

    public function getLink(): ?bool
    {
        return $this->link;
    }

    public function setLink(?bool $link): self
    {
        $this->link = $link;

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

    public function getManual(): ?string
    {
        return $this->manual;
    }

    public function setManual(?string $manual): self
    {
        $this->manual = $manual;

        return $this;
    }
}

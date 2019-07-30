<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfoImportanteRepository")
 * @ORM\Table()
 *
 * @ExclusionPolicy("all")
 */
class InfoImportante
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Expose
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Expose
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $description;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

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

    public function getSpecialiteIdCodeCis(): ?int
    {
        return $this->specialiteIdCodeCis;
    }

    public function setSpecialiteIdCodeCis(int $specialiteIdCodeCis): self
    {
        $this->specialiteIdCodeCis = $specialiteIdCodeCis;

        return $this;
    }
}

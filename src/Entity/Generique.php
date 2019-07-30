<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeneriqueRepository")
 * @ORM\Table()
 *
 * @ExclusionPolicy("all")
 */
class Generique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $identifiantGroupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $libelleGroupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $numeroTri;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdentifiantGroupe(): ?string
    {
        return $this->identifiantGroupe;
    }

    public function setIdentifiantGroupe(?string $identifiantGroupe): self
    {
        $this->identifiantGroupe = $identifiantGroupe;

        return $this;
    }

    public function getLibelleGroupe(): ?string
    {
        return $this->libelleGroupe;
    }

    public function setLibelleGroupe(?string $libelleGroupe): self
    {
        $this->libelleGroupe = $libelleGroupe;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumeroTri(): ?string
    {
        return $this->numeroTri;
    }

    public function setNumeroTri(?string $numeroTri): self
    {
        $this->numeroTri = $numeroTri;

        return $this;
    }
}

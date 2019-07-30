<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompositionRepository")
 * @ORM\Table()
 *
 * @ExclusionPolicy("all")
 */
class Composition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $elementPharmaceutique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $codeSubstance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $denominationSubstance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $dosageSubstance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $referenceDosage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $natureComposant;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Expose
     */
    private $numeroLiaison;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElementPharmaceutique(): ?string
    {
        return $this->elementPharmaceutique;
    }

    public function setElementPharmaceutique(?string $elementPharmaceutique): self
    {
        $this->elementPharmaceutique = $elementPharmaceutique;

        return $this;
    }

    public function getCodeSubstance(): ?string
    {
        return $this->codeSubstance;
    }

    public function setCodeSubstance(?string $codeSubstance): self
    {
        $this->codeSubstance = $codeSubstance;

        return $this;
    }

    public function getDenominationSubstance(): ?string
    {
        return $this->denominationSubstance;
    }

    public function setDenominationSubstance(?string $denominationSubstance): self
    {
        $this->denominationSubstance = $denominationSubstance;

        return $this;
    }

    public function getDosageSubstance(): ?string
    {
        return $this->dosageSubstance;
    }

    public function setDosageSubstance(?string $dosageSubstance): self
    {
        $this->dosageSubstance = $dosageSubstance;

        return $this;
    }

    public function getReferenceDosage(): ?string
    {
        return $this->referenceDosage;
    }

    public function setReferenceDosage(?string $referenceDosage): self
    {
        $this->referenceDosage = $referenceDosage;

        return $this;
    }

    public function getNatureComposant(): ?string
    {
        return $this->natureComposant;
    }

    public function setNatureComposant(?string $natureComposant): self
    {
        $this->natureComposant = $natureComposant;

        return $this;
    }

    public function getNumeroLiaison(): ?int
    {
        return $this->numeroLiaison;
    }

    public function setNumeroLiaison(?int $numeroLiaison): self
    {
        $this->numeroLiaison = $numeroLiaison;

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

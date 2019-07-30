<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConditionPrescriptionRepository")
 * @ORM\Table()
 *
 * @ExclusionPolicy("all")
 */
class ConditionPrescription
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
    private $conditionPrescription;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConditionPrescription(): ?string
    {
        return $this->conditionPrescription;
    }

    public function setConditionPrescription(?string $conditionPrescription): self
    {
        $this->conditionPrescription = $conditionPrescription;

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

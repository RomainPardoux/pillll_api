<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialiteRepository")
 * @ORM\Table()
 */
class Specialite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="bigint")
     * 
     * @Expose
     */
    private $idCodeCis;

    /**
     * @ORM\Column(type="string", length=255)
     * @Expose
     */
    private $denomination;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $formePharmaceutique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $statutAdministratifAmm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $typeProcedureAmm;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Expose
     */
    private $dateAmm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $statutBdm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $numeroAutorisationEuro;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Expose
     */
    private $surveillanceRenforcee;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $etatCommercialisation;

    public function getIdCodeCis(): ?int
    {
        return $this->idCodeCis;
    }

    public function setIdCodeCis(int $idCodeCis): self
    {
        $this->idCodeCis = $idCodeCis;

        return $this;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): self
    {
        $this->denomination = $denomination;

        return $this;
    }

    public function getFormePharmaceutique(): ?string
    {
        return $this->formePharmaceutique;
    }

    public function setFormePharmaceutique(?string $formePharmaceutique): self
    {
        $this->formePharmaceutique = $formePharmaceutique;

        return $this;
    }

    public function getStatutAdministratifAmm(): ?string
    {
        return $this->statutAdministratifAmm;
    }

    public function setStatutAdministratifAmm(?string $statutAdministratifAmm): self
    {
        $this->statutAdministratifAmm = $statutAdministratifAmm;

        return $this;
    }

    public function getTypeProcedureAmm(): ?string
    {
        return $this->typeProcedureAmm;
    }

    public function setTypeProcedureAmm(?string $typeProcedureAmm): self
    {
        $this->typeProcedureAmm = $typeProcedureAmm;

        return $this;
    }

    public function getDateAmm(): ?\DateTimeInterface
    {
        return $this->dateAmm;
    }

    public function setDateAmm(?\DateTimeInterface $dateAmm): self
    {
        $this->dateAmm = $dateAmm;

        return $this;
    }

    public function getStatutBdm(): ?string
    {
        return $this->statutBdm;
    }

    public function setStatutBdm(?string $statutBdm): self
    {
        $this->statutBdm = $statutBdm;

        return $this;
    }

    public function getNumeroAutorisationEuro(): ?string
    {
        return $this->numeroAutorisationEuro;
    }

    public function setNumeroAutorisationEuro(?string $numeroAutorisationEuro): self
    {
        $this->numeroAutorisationEuro = $numeroAutorisationEuro;

        return $this;
    }

    public function getSurveillanceRenforcee(): ?bool
    {
        return $this->surveillanceRenforcee;
    }

    public function setSurveillanceRenforcee(?bool $surveillanceRenforcee): self
    {
        $this->surveillanceRenforcee = $surveillanceRenforcee;

        return $this;
    }

    public function getEtatCommercialisation(): ?string
    {
        return $this->etatCommercialisation;
    }

    public function setEtatCommercialisation(?string $etatCommercialisation): self
    {
        $this->etatCommercialisation = $etatCommercialisation;

        return $this;
    }
}

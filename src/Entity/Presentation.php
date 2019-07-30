<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PresentationRepository")
 * @ORM\Table()
 *
 */
class Presentation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * 
     * @Expose
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     * @Expose
     */
    private $codeCip7;

    /**
     * @ORM\Column(type="string", length=13, nullable=true)
     * @Expose
     */
    private $codeCip13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $statutAdministratif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $etatCommercialisation;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Expose
     */
    private $dateCommercialisation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Expose
     */
    private $agrementCollectivites;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Expose
     */
    private $tauxRemboursement;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Expose
     */
    private $prixEurosHorsHonoraire;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Expose
     */
    private $prixEuros;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Expose
     */
    private $honoraire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $precisionRemboursement;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCip7(): ?string
    {
        return $this->codeCip7;
    }

    public function setCodeCip7(?string $codeCip7): self
    {
        $this->codeCip7 = $codeCip7;

        return $this;
    }

    public function getCodeCip13(): ?string
    {
        return $this->codeCip13;
    }

    public function setCodeCip13(?string $codeCip13): self
    {
        $this->codeCip13 = $codeCip13;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getStatutAdministratif(): ?string
    {
        return $this->statutAdministratif;
    }

    public function setStatutAdministratif(?string $statutAdministratif): self
    {
        $this->statutAdministratif = $statutAdministratif;

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

    public function getDateCommercialisation(): ?\DateTimeInterface
    {
        return $this->dateCommercialisation;
    }

    public function setDateCommercialisation(?\DateTimeInterface $dateCommercialisation): self
    {
        $this->dateCommercialisation = $dateCommercialisation;

        return $this;
    }

    public function getAgrementCollectivites(): ?bool
    {
        return $this->agrementCollectivites;
    }

    public function setAgrementCollectivites(?bool $agrementCollectivites): self
    {
        $this->agrementCollectivites = $agrementCollectivites;

        return $this;
    }

    public function getTauxRemboursement(): ?int
    {
        return $this->tauxRemboursement;
    }

    public function setTauxRemboursement(?int $tauxRemboursement): self
    {
        $this->tauxRemboursement = $tauxRemboursement;

        return $this;
    }

    public function getPrixEuros(): ?float
    {
        return $this->prixEuros;
    }

    public function setPrixEuros(?float $prixEuros): self
    {
        $this->prixEuros = $prixEuros;

        return $this;
    }

    public function getPrecisionRemboursement(): ?string
    {
        return $this->precisionRemboursement;
    }

    public function setPrecisionRemboursement(?string $precisionRemboursement): self
    {
        $this->precisionRemboursement = $precisionRemboursement;

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

    public function getSpecialite(): ?Specialite
    {
        return $this->specialite;
    }

    public function setSpecialite(?Specialite $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Symfony\Component\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AsmrRepository")
 * @ORM\Table()
 *
 * @ExclusionPolicy("all")
 */
class Asmr
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
    private $motifEvaluation;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Expose
     */
    private $dateAvisCt;

    /**
     * @ORM\Column(type="string", length=10)
     * @Expose
     */
    private $valeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Expose
     */
    private $lienCtCodeDossierHas;

    /**
     * @ORM\Column(type="bigint")
     * @Expose
     */
    private $specialiteIdCodeCis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotifEvaluation(): ?string
    {
        return $this->motifEvaluation;
    }

    public function setMotifEvaluation(?string $motifEvaluation): self
    {
        $this->motifEvaluation = $motifEvaluation;

        return $this;
    }

    public function getDateAvisCt(): ?\DateTimeInterface
    {
        return $this->dateAvisCt;
    }

    public function setDateAvisCt(?\DateTimeInterface $dateAvisCt): self
    {
        $this->dateAvisCt = $dateAvisCt;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): self
    {
        $this->valeur = $valeur;

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

    public function getLienCtCodeDossierHas(): ?string
    {
        return $this->lienCtCodeDossierHas;
    }

    public function setLienCtCodeDossierHas(?string $lienCtCodeDossierHas): self
    {
        $this->lienCtCodeDossierHas = $lienCtCodeDossierHas;

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

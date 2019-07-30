<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LienCtRepository")
 */
class LienCt
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $codeDossierHas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lienAvisCt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDossierHas(): ?string
    {
        return $this->codeDossierHas;
    }

    public function setCodeDossierHas(string $codeDossierHas): self
    {
        $this->codeDossierHas = $codeDossierHas;

        return $this;
    }

    public function getLienAvisCt(): ?string
    {
        return $this->lienAvisCt;
    }

    public function setLienAvisCt(string $lienAvisCt): self
    {
        $this->lienAvisCt = $lienAvisCt;

        return $this;
    }
}

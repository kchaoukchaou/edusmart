<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudyLevelRepository")
 */
class StudyLevel
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
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UnderStudyLevel", mappedBy="studyLevel")
     */
    private $underStudyLevel;

    public function __construct()
    {
        $this->underStudyLevel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|UnderStudyLevel[]
     */
    public function getUnderStudyLevel(): Collection
    {
        return $this->underStudyLevel;
    }

    public function addUnderStudyLevel(UnderStudyLevel $underStudyLevel): self
    {
        if (!$this->underStudyLevel->contains($underStudyLevel)) {
            $this->underStudyLevel[] = $underStudyLevel;
            $underStudyLevel->setStudyLevel($this);
        }

        return $this;
    }

    public function removeUnderStudyLevel(UnderStudyLevel $underStudyLevel): self
    {
        if ($this->underStudyLevel->contains($underStudyLevel)) {
            $this->underStudyLevel->removeElement($underStudyLevel);
            // set the owning side to null (unless already changed)
            if ($underStudyLevel->getStudyLevel() === $this) {
                $underStudyLevel->setStudyLevel(null);
            }
        }

        return $this;
    }
}

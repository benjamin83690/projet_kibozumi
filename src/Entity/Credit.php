<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditRepository")
 */
class Credit
{

    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->users = new ArrayCollection();
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $mensualites;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombresMensualites;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantEmprunte;

    /**
     * @ORM\Column(type="float")
     */
    private $tauxFixe;

    /**
     * @ORM\Column(type="float")
     */
    private $montantTotal;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="userCredit")
     */
    private $users;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getMensualites(): ?float
    {
        return $this->mensualites;
    }

    public function setMensualites(float $mensualites): self
    {
        $this->mensualites = $mensualites;

        return $this;
    }

    public function getNombresMensualites(): ?int
    {
        return $this->nombresMensualites;
    }

    public function setNombresMensualites(int $nombresMensualites): self
    {
        $this->nombresMensualites = $nombresMensualites;

        return $this;
    }

    public function getMontantEmprunte(): ?int
    {
        return $this->montantEmprunte;
    }

    public function setMontantEmprunte(int $montantEmprunte): self
    {
        $this->montantEmprunte = $montantEmprunte;

        return $this;
    }

    public function getTauxFixe(): ?float
    {
        return $this->tauxFixe;
    }

    public function setTauxFixe(float $tauxFixe): self
    {
        $this->tauxFixe = $tauxFixe;

        return $this;
    }

    public function getMontantTotal(): ?float
    {
        return $this->montantTotal;
    }

    public function setMontantTotal(float $montantTotal): self
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addUserCredit($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeUserCredit($this);
        }

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(Commande $commande): self
    {
        $this->commande = $commande;

        // set the owning side of the relation if necessary
        if ($commande->getCreditCommande() !== $this) {
            $commande->setCreditCommande($this);
        }

        return $this;
    }

    public function getCreditCategory()
    {
        return $this->creditCategory;
    }

    public function setCreditCategory(?Category $creditCategory): self
    {
        $this->creditCategory = $creditCategory;

        return $this;
    }
}

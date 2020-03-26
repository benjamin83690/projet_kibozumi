<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantEmprunte;

    /**
     * @ORM\Column(type="float")
     */
    private $montantTotal;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="float")
     */
    private $mensualites;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="commande", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userCommande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Credit", inversedBy="commande", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $creditCommande;

    public function __construct() {
        $this->dateCommande = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMontantTotal(): ?float
    {
        return $this->montantTotal;
    }

    public function setMontantTotal(float $montantTotal): self
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

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

    public function getUserCommande(): ?User
    {
        return $this->userCommande;
    }

    public function setUserCommande(User $userCommande): self
    {
        $this->userCommande = $userCommande;

        return $this;
    }

    public function getCreditCommande(): ?Credit
    {
        return $this->creditCommande;
    }

    public function setCreditCommande(Credit $creditCommande): self
    {
        $this->creditCommande = $creditCommande;

        return $this;
    }
}

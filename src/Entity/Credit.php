<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CreditRepository")
 * @Vich\Uploadable
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

    /**
        * NOTE: This is not a mapped field of entity metadata, just a simple property.
        * 
        * @Vich\UploadableField(mapping="credits_image", fileNameProperty="imageName")
        * @Assert\Image(
        * mimeTypesMessage = "choisir une image"
        
        * )
        * 
        * @var File|null
        */
        private $imageFile;

        /**
        * @ORM\Column(type="string", nullable = true)
        *
        * @var string|null
        */
        private $imageName;


        /**
        * @ORM\Column(type="datetime")
        *
        * @var \DateTimeInterface|null
        */
        private $updatedAt;

        /**
        * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
        * of 'UploadedFile' is injected into this setter to trigger the update. If this
        * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
        * must be able to accept an instance of 'File' as the bundle will inject one here
        * during Doctrine hydration.
        *
        * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
        */
        public function setImageFile(?File $imageFile = null): void
        {
            $this->imageFile = $imageFile;

            if (null !== $imageFile) {
                // It is required that at least one field changes if you are using doctrine
                // otherwise the event listeners won't be called and the file is lost
                $this->updatedAt = new \DateTimeImmutable();
            }
        }

        public function getImageFile(): ?File
        {
            return $this->imageFile;
        }

        public function setImageName(?string $imageName): void
        {
            $this->imageName = $imageName;
        }

        public function getImageName(): ?string
        {
            return $this->imageName;
        }

                /////////////////////////////////

                public function getNewMensualites($montant)
                {
                    $taux= 0.0295;
                    $nombresMensualites=30;
                    $a=$montant * $taux;
                    return $this->mensualites=($a + $montant)/$nombresMensualites;
                
                }
                public function getNewMontantTotal($montant)
                {
                    $taux= 0.0295;
                    $a=$montant * $taux;
                    return $this->montantTotal=($a + $montant);
                
                }
}

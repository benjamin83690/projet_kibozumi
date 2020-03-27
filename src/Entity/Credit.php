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
<<<<<<< Updated upstream

=======
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->users = new ArrayCollection();
    }
>>>>>>> Stashed changes
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
<<<<<<< Updated upstream
=======
     * @ORM\Column(type="string", length=255)
     */
    private $titre;
    /**
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

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
    public $updatedAt;

    /**


    * @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="creditCommande", cascade={"persist", "remove"})
    */
    private $commande;

    /**

    * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="credits")
    * @ORM\JoinColumn(nullable=false)
    */
    private $creditCategory;

    public function __construct()
=======
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitre(): ?string
>>>>>>> Stashed changes
    {
        $this->updatedAt = new \DateTime();
        $this->users = new ArrayCollection();
        $this->creditCategory = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }
<<<<<<< Updated upstream

    public function getId(): ?int
    {
        return $this->id;
=======
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

=======
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
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }
    public function getImageName(): ?string
    {
        return $this->imageName;
    }
<<<<<<< Updated upstream

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(Commande $commande): self
=======
    /////////////////////////////////
    public function getNewMensualites($montant, $taux, $nbrMensualites)
>>>>>>> Stashed changes
    {
        $this->commande = $commande;

        // set the owning side of the relation if necessary
        if ($commande->getCreditCommande() !== $this) {
            $commande->setCreditCommande($this);
        }

        return $this;
    }
<<<<<<< Updated upstream


    public function getCreditCategory()
    {
        return $this->creditCategory;
    }

    public function setCreditCategory(?Category $creditCategory): self
=======
    public function getNewMontantTotal($montant, $taux)
>>>>>>> Stashed changes
    {
        $this->creditCategory = $creditCategory;

        return $this;
    }
<<<<<<< Updated upstream
}
=======
}
>>>>>>> Stashed changes

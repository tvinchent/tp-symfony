<?php
namespace App\Entity;
use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    private ?int $id = null;
    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Le message ne peut pas être vide.')]
    private string $contenu = '';
    #[ORM\Column]
    private \DateTimeImmutable $dateCreation;
    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Salon $salon = null;
    public function __construct() {$this->dateCreation = new \DateTimeImmutable();}
    public function getId(): ?int {return $this->id;}
    public function getContenu(): string {return $this->contenu;}
    public function setContenu(string $contenu): static {$this->contenu=$contenu;return $this;}
    public function getDateCreation(): \DateTimeImmutable {return $this->dateCreation;}
    public function setDateCreation(\DateTimeImmutable $date): static {$this->dateCreation=$date;return $this;}
    public function getSalon(): ?Salon {return $this->salon;}
    public function setSalon(?Salon $salon): static {$this->salon=$salon;return $this;}
}

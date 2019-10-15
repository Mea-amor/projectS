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
     * @ORM\Column(type="string", length=25)
     */
    private $date_commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?string
    {
        return $this->date_commande;
    }

    public function setDateCommande(string $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }
}

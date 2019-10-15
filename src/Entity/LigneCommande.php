<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneCommandeRepository")
 */
class LigneCommande
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
    private $Qte_commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQteCommande(): ?int
    {
        return $this->Qte_commande;
    }

    public function setQteCommande(int $Qte_commande): self
    {
        $this->Qte_commande = $Qte_commande;

        return $this;
    }
}

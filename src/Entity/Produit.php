<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
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
    private $num_produit;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name_produit;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumProduit(): ?string
    {
        return $this->num_produit;
    }

    public function setNumProduit(string $num_produit): self
    {
        $this->num_produit = $num_produit;

        return $this;
    }

    public function getNameProduit(): ?string
    {
        return $this->name_produit;
    }

    public function setNameProduit(string $name_produit): self
    {
        $this->name_produit = $name_produit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(float $prix_produit): self
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }
}

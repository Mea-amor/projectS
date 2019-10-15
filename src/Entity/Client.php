<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
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
    private $num_client;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name_client;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $address_client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumClient(): ?string
    {
        return $this->num_client;
    }

    public function setNumClient(string $num_client): self
    {
        $this->num_client = $num_client;

        return $this;
    }

    public function getNameClient(): ?string
    {
        return $this->name_client;
    }

    public function setNameClient(string $name_client): self
    {
        $this->name_client = $name_client;

        return $this;
    }

    public function getAddressClient(): ?string
    {
        return $this->address_client;
    }

    public function setAddressClient(string $address_client): self
    {
        $this->address_client = $address_client;

        return $this;
    }
}

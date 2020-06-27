<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Restaurant
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
 * @ORM\Table(name="restaurant")
 */
class Restaurant
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false, name="restaurant_name")
     */
    private $restaurantName;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true, name="restaurant_address")
     */
    private $restaurantAddress;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false, name="restaurant_active")
     */
    private $restaurantActive = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRestaurantName(): ?string
    {
        return $this->restaurantName;
    }

    public function setRestaurantName(string $restaurantName): self
    {
        $this->restaurantName = $restaurantName;

        return $this;
    }

    public function getRestaurantAddress(): ?string
    {
        return $this->restaurantAddress;
    }

    public function setRestaurantAddress(string $restaurantAddress): self
    {
        $this->restaurantAddress = $restaurantAddress;

        return $this;
    }

    public function getRestaurantActive(): ?int
    {
        return $this->restaurantActive;
    }

    public function setRestaurantActive(int $restaurantActive): self
    {
        $this->restaurantActive = $restaurantActive;

        return $this;
    }
}

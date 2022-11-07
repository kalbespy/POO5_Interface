<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    // Constante Energies autorisées
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    //Propriétés propres à Truck
    private string $storage;
    private int $load = 0;
    private string $energy;

    //Constructor
    public function __construct(int $storage, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorage($storage);
        $this->setEnergy($energy);
    }

    // Get & Set
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    // Methode Truck full
    public function load(): string
    {
    $sentence = "";
        if ($this->load < $this->storage) {
        $sentence .= "Load more !";
        } else {
    $sentence .= "Truck is full !";
        }
        return $sentence;
    }
}
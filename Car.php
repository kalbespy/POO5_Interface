<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{   
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Propriétés propres à Car
    private string $energy;
    private int $energyLevel;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    // Méthodes de l'interface LightableInterface
    public function switchOn(): bool
	{
        return true;
    }
	
	public function switchOff(): bool
	{
        return false;
    }

    //Get & Set 
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
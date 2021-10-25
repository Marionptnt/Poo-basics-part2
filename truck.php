<?php

require_once 'vehicle.php';

class truck extends vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];  

    private string $stockCapacity;

    private int $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, string $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
        $this->load = 0;
    }

    public function getStockCapacity()
    {
        $this->stockCapacity;
    }

    public function setStockCapacity(string $stockCapacity)
    {
        $this->stockCapacity = $stockCapacity;
    }
    public function getLoad()
    {
        $this->load;
    }

    public function setLoad(int $load)
    {
        $this->load = $load;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) 
    {
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
    
    public function loadLevel()
    {
        while ($this->load < 100) 
        {
            $this->load++;
            return 'in filling';
        }
        return 'full';
    }

}

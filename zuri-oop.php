<?php

class SportsCar {
    protected string $brand;
    protected string $model;
    protected int $maxSpeed;

    public function __construct(string $brand, string $model, int $maxSpeed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCarDetails(): string {
        return "Brand: {$this->brand}, Model: {$this->model}, Max Speed: {$this->maxSpeed} km/h";
    }

    public function accelerate(): string {
        return "{$this->brand} {$this->model} is accelerating to {$this->maxSpeed} km/h!";
    }
}

// Subclass
class LuxuryCar extends SportsCar {
    private bool $hasMassageSeats;
    private string $interiorMaterial;

    public function __construct(string $brand, string $model, int $maxSpeed, bool $hasMassageSeats, string $interiorMaterial) {
        parent::__construct($brand, $model, $maxSpeed); // Call parent constructor
        $this->hasMassageSeats = $hasMassageSeats;
        $this->interiorMaterial = $interiorMaterial;
    }

    public function getLuxuryFeatures(): string {
        $massageSeats = $this->hasMassageSeats ? "Yes" : "No";
        return "Massage Seats: {$massageSeats}, Interior Material: {$this->interiorMaterial}";
    }

    public function accelerate(): string {
        return "{$this->brand} {$this->model} (Luxury Edition) accelerates smoothly and quietly to {$this->maxSpeed} km/h!";
    }
}

// Create an instance of SportsCar
$sportsCar = new SportsCar("Ferrari", "F8 Spider", 340);
echo $sportsCar->getCarDetails();
echo $sportsCar->accelerate();

// Create an instance of LuxuryCar
$luxuryCar = new LuxuryCar("Mercedes-Benz", "S-Class", 250, true, "Leather");
echo $luxuryCar->getCarDetails();
echo $luxuryCar->getLuxuryFeatures();
echo $luxuryCar->accelerate();

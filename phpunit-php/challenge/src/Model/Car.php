<?php

namespace Webjump239\Challenge\Model;

class Car
{
    private string $brand;
    private string $model;
    private string $plate;
    private float $rentPricePerDay;

    public function __construct(string $brand, string $model, string $plate, float $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->plate = $plate;
        $this->rentPricePerDay = $price;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPlate(): string
    {
        return $this->plate;
    }

    public function getRentPrice(): float
    {
        return $this->rentPricePerDay;
    }
}
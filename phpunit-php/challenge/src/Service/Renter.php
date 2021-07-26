<?php

namespace Webjump239\Challenge\Service;

use DateInterval;
use DateTime;
use DomainException;
use Webjump239\Challenge\Model\Car;
use Webjump239\Challenge\Model\Customer;
use Webjump239\Challenge\Model\RentLog;

class Renter
{
    private array $rents;
    private int $numberOfRents = 0;

    public function rent(Customer $customer, Car $car, string $daysRentedFor)
    {   
        try{
            $this->CustomerisRentingNow($customer);
            $this->CarisRentedNow($car);
        } catch (DomainException $e){
            throw $e;
        }

        $this->rents[$this->numberOfRents] = new RentLog($car, $customer, new DateTime(), new DateInterval('P' . $daysRentedFor . 'D'));
        $this->numberOfRents++;
    }

    private function CustomerisRentingNow(Customer $customer): bool
    {
        for ($i = 0; $i < $this->numberOfRents; $i++) {
            if ($this->rents[$i]->getLocator() == $customer) {
                throw new DomainException("This person is already renting a car");
            }
        }
        return false;
    }

    private function CarIsRentedNow(Car $car): bool
    {
        for ($i = 0; $i < $this->numberOfRents; $i++) {
            if ($this->rents[$i]->getRentedCar() == $car) {
                throw new DomainException("This car is already rented");
            }
        }
        return false;
    }

    public function getAllRentedCars(): array
    {
        return $this->rents;
    }

    public function getNumberOfRentedCars(): int
    {
        return $this->numberOfRents;
    }
}
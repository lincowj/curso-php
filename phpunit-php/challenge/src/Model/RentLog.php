<?php

namespace Webjump239\Challenge\Model;

use DateInterval;
use DateTime;

class RentLog
{
    private Car $rentedCar;
    private Customer $locator;
    private DateTime $dayRented;
    private DateTime $dayReturned;

    public function __construct(Car $rentedCar, Customer $locator, DateTime $dayRented, DateInterval $daysRentedFor) {
        $this->rentedCar = $rentedCar;
        $this->locator = $locator;
        $this->daysRented = $dayRented;
        $this->dayReturned = $dayRented->add($daysRentedFor);
    }

    public function getRentedCar(): Car
    {
        return $this->rentedCar;
    }

    public function getLocator(): Customer
    {
        return $this->locator;
    }

    public function getDayRented(): DateTime
    {
        return $this->dayRented;
    }

    public function getDayReturned(): DateTime
    {
        return $this->dayReturned;
    }
}
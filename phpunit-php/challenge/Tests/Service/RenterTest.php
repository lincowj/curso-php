<?php

namespace Webjump239\Challenge\Tests\Service;

use DomainException;
use PHPUnit\Framework\TestCase;
use Webjump239\Challenge\Model\Car;
use Webjump239\Challenge\Model\Customer;
use Webjump239\Challenge\Service\Renter;

require_once './phpunit-php/challenge/vendor/autoload.php';

class RenterTest extends TestCase
{
    /**
     * @dataProvider carsAndCustomers
     */
    public function testDoNotRentToAClientWhoIsAlreadyWithACar(array $customers, array $cars)
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('This person is already renting a car');
        
        $renter = new Renter();

        $renter->rent($customers[0], $cars[0], '1');
        $renter->rent($customers[0], $cars[1], '5');
    }

    /**
     * @dataProvider carsAndCustomers
     */
    public function testRentingTo3DifferentPeople(array $customers, array $cars)
    {
        $renter = new Renter();

        $renter->rent($customers[0], $cars[2], '9');
        $renter->rent($customers[1], $cars[1], '5');
        $renter->rent($customers[2], $cars[0], '8');

        self::assertCount(3, $renter->getAllRentedCars());
    }

    /**
     * @dataProvider carsAndCustomers
     */
    public function testDoNotRentACarThatIsAlreadyRented(array $customers, array $cars)
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('This car is already rented');

        $toro = new Car('Fiat', 'Toro', 'ABC1D23', 150,0);
        $taos = new Car('Volkswagen', 'Taos', 'DEF4G56', 200,0);

        $renter = new Renter();

        $renter->rent($customers[2], $cars[1], '9');
        $renter->rent($customers[0], $cars[2], '8');
        $renter->rent($customers[1], $cars[1], '5');
    }

    public function carsAndCustomers()
    {
        $toro = new Car('Fiat', 'Toro', 'ABC1D23', 150,0);
        $taos = new Car('Volkswagen', 'Taos', 'DEF4G56', 200,0);
        $hilux = new Car('Toyota', 'Hilux', 'KJS4P46', 300,0);

        $joao = new Customer('João', '123.456.789.10');
        $maria = new Customer('Maria', '456.789.123-50');
        $ana = new Customer('Ana', '789.456.321-80');

        return [
            'data' => [
                [$joao, $ana, $maria], 
                [$toro, $taos, $hilux]
            ]
        ];
    }
}
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
    public function testDoNotRentToAClientWhoIsAlreadyWithACar()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('This person is already renting a car');
        
        $toro = new Car('Fiat', 'Toro', 'ABC1D23', 150,0);
        $taos = new Car('Volkswagen', 'Taos', 'DEF4G56', 200,0);
        $joao = new Customer('João', '123.456.789.10');
        $renter = new Renter();

        $renter->rent($joao, $toro, '1');
        $renter->rent($joao, $taos, '5');
    }

    public function testRentingTo3DifferentPeople()
    {
        $toro = new Car('Fiat', 'Toro', 'ABC1D23', 150,0);
        $taos = new Car('Volkswagen', 'Taos', 'DEF4G56', 200,0);
        $taos2 = new Car('Volkswagen', 'Taos', 'KJS4P46', 200,0);

        $joao = new Customer('João', '123.456.789.10');
        $maria = new Customer('Maria', '456.789.123-50');
        $ana = new Customer('Ana', '789.456.321-80');

        $renter = new Renter();

        $renter->rent($joao, $taos, '9');
        $renter->rent($ana, $taos2, '5');
        $renter->rent($maria, $toro, '8');

        self::assertCount(3, $renter->getAllRentedCars());
    }

    public function testDoNotRentACarThatIsAlreadyRented()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('This car is already rented');

        $toro = new Car('Fiat', 'Toro', 'ABC1D23', 150,0);
        $taos = new Car('Volkswagen', 'Taos', 'DEF4G56', 200,0);

        $joao = new Customer('João', '123.456.789.10');
        $maria = new Customer('Maria', '456.789.123-50');
        $ana = new Customer('Ana', '789.456.321-80');

        $renter = new Renter();

        $renter->rent($joao, $taos, '9');
        $renter->rent($maria, $toro, '8');
        $renter->rent($ana, $taos, '5');
    }
}
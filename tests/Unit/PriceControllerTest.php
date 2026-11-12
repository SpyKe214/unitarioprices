<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\PriceController;

class PriceControllerTest extends TestCase
{
    protected $priceController;
    protected function setUp(): void
    {
        parent::setUp();
        $this->priceController = new PriceController();
    }

    public function test_conversion_euro_a_dolar()
    {
        $resultado = $this->priceController->convertEuroToDollar(10);
        $this->assertEquals(11.00, $resultado);
    }

    public function test_conversion_dolar_a_euro()
    {
        $resultado = $this->priceController->convertDollarToEuro(10);
        $this->assertEquals(9.00, $resultado);
    }

    public function test_calculo_descuento_valido()
    {
        $resultado = $this->priceController->calculateDiscount(100, 20);
        $this->assertEquals(80.00, $resultado);
    }

    public function test_calculo_descuento_cero()
    {
        $resultado = $this->priceController->calculateDiscount(50, 0);
        $this->assertEquals(50.00, $resultado);
    }
}
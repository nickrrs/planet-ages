<?php

namespace Tests\Unit;

use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Requests\InputRequest;
use App\Services\CalculatorService;
use InvalidArgumentException;
use Tests\TestCase;

class CalculatorServiceTest extends TestCase
{
    public function testCalculatePlanetAgeSuccess()
    {
        $controller = new CalculatorController(new CalculatorService());

        $data = [
            'type' => 'earth',
            'seconds' => 2500000000,
        ];

        $response = $controller->calculatePlanetAge(new InputRequest($data));

        $this->assertEquals(['result' => '79.22 Earth-years-old'], $response);
    }

    public function testCalculatePlanetAgeInvalidPlanet()
    {
        $this->expectException(InvalidArgumentException::class);
        $controller = new CalculatorController(new CalculatorService());

        $data = [
            'type' => 'invalid_planet',
            'seconds' => 2500000000,
        ];

        $controller->calculatePlanetAge(new InputRequest($data));
    }

    public function testCalculatePlanetAgeErrorOnInvalidSecondsInput()
    {
        $this->expectException(InvalidArgumentException::class);
        $controller = new CalculatorController(new CalculatorService());
    
        $data = [
            'type' => 'earth',
            'seconds' => -1,
        ];

        $controller->calculatePlanetAge(new InputRequest($data));
    }
}

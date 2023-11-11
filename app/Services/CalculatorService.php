<?php 

namespace App\Services;

class CalculatorService {

    private const PLANETS = [
        'mercury' => 0.2408467,
        'venus' => 0.61519726,
        'earth' => 1.0,
        'mars' => 1.8808158,
        'jupiter' => 11.862615,
        'saturn' => 29.447498,
        'uranus' => 84.016846,
        'neptune' => 164.79132,
    ];

    public function calculatePlanetAge($request){
        //The planet type exists ?
        $planet = strtolower($request['type']);
        if (!array_key_exists($planet, self::PLANETS)) {
            throw new \InvalidArgumentException('Invalid planet type.');
        }
        
        if(!is_numeric($request['seconds']) || $request['seconds'] < 1){
            throw new \InvalidArgumentException('Invalid time.');
        }

        $seconds = $request['seconds'];
        
        $earthYears = $seconds / (365.25 * 24 * 60 * 60); // according to the enunciate, 1 earth year = 365.25 earth days, and by my calculations the result would be this value..31557600
        $age = $earthYears * self::PLANETS[$planet];

        $age = round($age, 2);
        return ['result' => "{$age} Earth-years-old"];
    }
}
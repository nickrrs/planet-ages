<?php 

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use App\Http\Requests\InputRequest;
use App\Services\CalculatorService;

class CalculatorController extends Controller
{
    protected $calculatorService;

    public function __construct(CalculatorService $calculatorService)
    {
        $this->calculatorService = $calculatorService;
    }

    public function calculatePlanetAge(InputRequest $request)
    {
        //As the Form Request do his own validation and error treatmeant, i dont need to do a try catch block here to catch the validations error..
        //or even the service method return, since it's just a calculation.
        $payload = [
            'type' => $request->input('type'),
            'seconds' => $request->input('seconds')
        ];

        $planetAge = $this->calculatorService->calculatePlanetAge($payload);

        return $planetAge;
    }
}






<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mark;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        foreach ($cars as $car) {
            if ($car->show) {
                $cars_with_marks[] = [
                    "mark" => Mark::find(1)->name,
                    "codename" => $car->codename,
                    "hp" => $car->hp,
                ];
            }
        }
        //dd($cars_with_marks);

        return view("cars.index", ["cars_with_marks" => $cars_with_marks]);
    }

    public function create()
    {
        return view("cars.create");
    }
}

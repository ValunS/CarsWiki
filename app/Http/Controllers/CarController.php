<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                    "mark" => Mark::findOrFail($car->mark_id)->name,
                    "codename" => $car->codename,
                    "hp" => $car->hp,
                ];
            }
        }

        return view("cars.index", ["cars_with_marks" => $cars_with_marks]);
    }

    public function create()
    {
        $mark_names = Mark::pluck("name");
        return view("cars.create", ["mark_names" => $mark_names]);
    }

    public function store(Request $request)
    {   
        $mark = Mark::firstOrCreate(
            [
                "name" => $request->mark
            ],
            [
                "name" => $request->mark,
                "description" => "",
                "show" => 1,
            ],
        );
        $request["mark_id"] = $mark->id;
        $car = Car::firstOrCreate(
            [
                "mark_id" => $request->mark_id,
                "codename" => $request->codename,
            ],
            [
                "mark_id" => $request->mark_id,
                "codename" => $request->codename,
                "hp" => $request->hp,
                "show" => $request->show,
            ],
        );

        $mark_names = Mark::pluck("name");
        return view("cars.create", ["mark_names" => $mark_names]);
    }
}

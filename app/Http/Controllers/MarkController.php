<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Mark;

class MarkController extends Controller
{
    public function index(){
        $marks_names = Mark::pluck("name")->sortBy("name");

        return view("marks.index", ["marks_names" => $marks_names]);
    }

    public function show($mark_name){
        $mark = Mark::select("name", "description")->where("name", "=", $mark_name)->first();
        $marks_names = Mark::pluck("name")->sortBy("name");
        $mark_and_marks_names = [
            "mark" => $mark,
            "marks_names" => $marks_names,
        ];
        return view("marks.show", ["mark_and_marks_names" => $mark_and_marks_names]);
    }
}

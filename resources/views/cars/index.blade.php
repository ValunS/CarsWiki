@extends('layouts/layout')
@section('tab_cars_choosen')
    text-indigo-600 border-indigo-600
@endsection

@section('body')
    <div
        class="text-center w-11/12 mx-auto grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3">

        @foreach ($cars_with_marks as $car)
            <a href="#{{ $car["mark"]."_".$car["codename"] }}">
                <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8 pb-2">
                    <img class="block w-full my-4 h-64 object-cover border-black border-t-4 border-l-4 rounded-2xl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Chevrolet_N300_Max_2011_%2814506758049%29.jpg/180px-Chevrolet_N300_Max_2011_%2814506758049%29.jpg"
                        alt="" data-config-id="auto-img-8-1">
                    <div class="text-center">
                        <h5 class="text-xl font-bold" data-config-id="auto-txt-18-1">{{ $car["mark"] }}</h5>
                        <span class="text-sm font-bold text-gray-600" data-config-id="auto-txt-19-1">{{ $car["codename"] }}</span>
                        <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-19-1">{{ $car["hp"] }}</span>
                    </div>
                </div>
            </a>
        @endforeach

        <a href="{{ route("cars.create") }}">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8 pb-2">
                <img class="block w-full my-4 h-64 object-cover" src="https://nuotraukos.mediakatalogas.lt/thumbs/material-icon-2155448_1280.png"
                    alt="" data-config-id="auto-img-5-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-12-1">Add new </h5>
                    <span class="text-sm font-bold text-gray-600" data-config-id="auto-txt-19-1">car</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-13-1">123</span>
                </div>
            </div>
        </a>

    </div>
@endsection

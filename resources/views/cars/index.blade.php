@extends('layouts/layout')
@section('tab_car_choosen')
    text-indigo-600 border-indigo-600
@endsection

@section('body')
    <div
        class="text-center w-11/12 mx-auto grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3">
        <a href="#">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-2.png"
                    alt="" data-config-id="auto-img-1-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-4-1">Nissan</h5>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-5-1">NV200</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">123</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-3.png"
                    alt="" data-config-id="auto-img-2-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-6-1">Chevrolet</h5>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-7-1">Comaro</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">123</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-4.png"
                    alt="" data-config-id="auto-img-3-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-8-1">Lamborgini</h5>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-9-1">Huracan</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">123</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-5.png"
                    alt="" data-config-id="auto-img-4-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-10-1">Bugatti</h5>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">Chiron</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">123</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-6.png"
                    alt="" data-config-id="auto-img-5-1">
                <div class="text-center">
                    <h5 class="text-xl font-bold" data-config-id="auto-txt-12-1">Lada</h5>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-13-1">Niva</span>
                    <span class="text-sm font-bold text-gray-400" data-config-id="auto-txt-11-1">123</span>
                </div>
            </div>
        </a>

        @foreach ($cars_with_marks as $car)
            <a href="#{{ $car["mark"]."_".$car["codename"] }}">
                <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                    <img class="block w-full mb-4 h-64 object-cover" src="saturn-assets/images/team/photo-team-1.png"
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
            <div class="bg-indigo-300 border-indigo-600 border-t-4 border-l-4 rounded-2xl w-full px-4 mb-8">
                <img class="block w-full mb-4 h-64 object-cover" src="https://nuotraukos.mediakatalogas.lt/thumbs/material-icon-2155448_1280.png"
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

@extends('layouts/layout')
@section('tab_cars_choosen')
    text-indigo-600 border-indigo-600
@endsection

@section('body')
    <div class="text-center w-11/12 mx-auto grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12">
        <form action="{{ route('cars.store') }}" method="post" class="grid grid-cols-1 text-center">
            @csrf
            <select 
                class="mx-auto my-3 w-3/5 appearance-none w-full bg-gray-200 rounded-2xl border-4 border border-indigo-300 text-indigo-800 py-3 px-4 pr-6 leading-tight focus:rounded-b-none" data-te-select-init
                id="mark" name="mark">
                @foreach ($mark_names as $name)
                <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
              </select>
            {{-- <input
                class="mx-auto my-3 w-3/5 w-full h-12 px-4 py-1 rounded-2xl border-4 border border-indigo-300 text-indigo-800 focus:outline-none"
                placeholder="Mark" name="mark" id="mark"> --}}
            <input
                class="mx-auto my-3 w-3/5 w-full h-12 px-4 py-1 rounded-2xl border-4 border border-indigo-300 text-indigo-800 focus:outline-none"
                placeholder="Codename" name="codename" id="codename">
            <input
                class="mx-auto my-3 w-3/5 w-full h-12 px-4 py-1 rounded-2xl border-4 border border-indigo-300 text-indigo-800 focus:outline-none"
                placeholder="HP" name="hp" id="hp">
            {{-- <input
                class="mx-auto my-3 w-3/5 w-full h-12 px-4 py-1 rounded-2xl border-4 border border-indigo-300 text-indigo-800 focus:outline-none "
                placeholder="Show" name="show" id="show"> --}}
            <button type="submit" class="inline-flex mx-auto">
                <span
                    class="text-gray-600 h-12 flex items-center rounded-2xl justify-center uppercase font-semibold px-8 border border-gray-600 hover:border-white hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out">
                    CREATE
                </span>
            </button>
        </form>
    </div>
@endsection

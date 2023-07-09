@extends('layouts/layout')
@section('tab_marks_choosen')
    text-indigo-600 border-indigo-600
@endsection

@section('body')
    <div class="w-full px-8 grid grid-cols-1 gap-8 mt-8 xl:gap-12 md:grid-cols-2 lg:grid-cols-3">
        @if ($mark_and_marks_names["mark"]->name)
            <div class="w-full px-4 pb-2">
                <img class="w-full block object-cover border-black border-t-4 border-l-4 rounded-2xl"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Chevrolet_N300_Max_2011_%2814506758049%29.jpg/180px-Chevrolet_N300_Max_2011_%2814506758049%29.jpg">
            </div>
            <div class="content-center md:col-span-1 lg:col-span-2">
                <h1 class="text-7xl font-bold">
                    {{ $mark_and_marks_names["mark"]->name }}
                </h1>
                <h4 class="text-2xl col-span-1">
                    {{ $mark_and_marks_names["mark"]->description }}
                </h4>
            </div>
        @else
        @endif
    </div>
    <div class="w-full flex px-8 flex-wrap mt-8">
        @foreach ($mark_and_marks_names["marks_names"] as $mark_name)
            <a href="{{ route('marks.index') }}/{{ $mark_name }}" class="m-2">
                <button
                    class="text-gray-600 h-12 flex items-center rounded-2xl justify-center uppercase font-semibold px-8 border border-gray-600 hover:border-white hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out"
                    data-ripple-dark="true">
                    {{ $mark_name }}
                </button>
            </a>
        @endforeach
    </div>
@endsection

@extends('layouts/layout')
@section('tab_marks_choosen')
    text-indigo-600 border-indigo-600
@endsection

@section('body')
    <div class="w-full flex px-8 flex-wrap">
        @foreach ($marks_names as $mark_name)
            <a href="{{ route('marks.index') }}/{{ $mark_name }}">
                <button
                    class="text-gray-600 h-12 flex items-center rounded-2xl justify-center uppercase font-semibold px-8 border border-gray-600 hover:border-white hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out mx-4"
                    data-ripple-dark="true">
                    {{ $mark_name }}
                </button>
            </a>
        @endforeach
    </div>
@endsection

@extends('layouts.app')

@section('header')
    <h1 class="text-white text-xl font-bold">Vacancies</h1>
@endsection

@section('sideNav')
    <h2 class="border-b	border-gray-300	" >Filter Vacancies</h2>
    <h3>Keywords</h3>
    <form>
        <input type="text" name="term" class="w-full mb-4 border-gray-300 rounded-sm" value="{{ request('term') ?? '' }}">
        <button type="submit" class="bg-green-600 text-white w-full rounded-sm">Filter Results</button>
    </form>
@endsection

@section('main')

    <div class="bg-gray-200 p-3 mb-3 rounded-sm">
    <h2>Available Vacancies {{ $listings->total() }}</h2>
    </div>
    @foreach($listings as $listing)
        @include('listing.card', ['listing' => $listing])
    @endforeach

    {{ $listings->links() }}
@endsection
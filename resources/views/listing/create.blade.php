@extends('layouts.app')

@section('header')
    <h1 class="text-white text-xl font-bold">CREATE A NEW VACANCY</h1>
@endsection

@section('main')
<div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <form action="{{ route('listings.store') }}" method="post" class="md:w-4/5 mx-auto py-5"> 
        @csrf

        <div class="mb-4">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" class="border-gray-300 rounded block w-full">
            @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="border-gray-300 rounded block w-full"></textarea>
            @error('description')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

         <div class="mb-4">
            <label for="location">Location</label>
            <input id="location" type="text" name="location" class="border-gray-300 rounded block w-full">
            @error('location')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="lower_range">Lower Range</label>
            <input id="lower_range" type="number" name="lower_range" class="border-gray-300 rounded block w-full">
            @error('lower_range')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="upper_range">Upper Range</label>
            <input id="upper_range" type="number" name="upper_range" class="border-gray-300 rounded block w-full">
            @error('upper_range')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="text-white bg-green-600 p-2">Create</button>

    </form>
    </div>
@endsection
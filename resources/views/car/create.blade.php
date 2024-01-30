@extends('layouts.master')
@section('title', 'Cars')
@section('content')
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">
            Publish a new car for sell
        </h1>
    </div>

    <form class="max-w-lg mx-auto my-10 p-6 bg-white shadow-md rounded" method="POST" action="{{ route('car.store')  }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" id="title" name="car_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400" placeholder="Enter title">
        </div>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Reg Number</label>
        <input type="text" name="registration_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400" placeholder="Registration Number">
        </div>

{{--        <div class="mb-6">--}}
{{--            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Post Content</label>--}}
{{--            <textarea id="content" name="article_content" class="shadow appearance-none border rounded w-full h-56 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400 resize-none" placeholder="Enter post content"></textarea>--}}
{{--        </div>--}}

        <div class="flex justify-end">
            <input type="submit" class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Save">
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>



@endsection

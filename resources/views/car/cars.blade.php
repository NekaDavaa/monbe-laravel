@extends('layouts.master')
@section('title', 'Cars')
@section('content')

    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">
            All Cars
        </h1>
{{--        @auth--}}
            <a href="{{ route('cars.create') }}" class="text-yellow-700 text-3xl mb-4">
                <i class="fas fa-plus"></i>
            </a>
{{--        @endauth--}}
    </div>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if(session('notification'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold">{{ session('notification') }}</p>
                    </div>
                </div>
            </div>
        @endif


            <div id="app">
                <h1>Търсачка:</h1>
                <input
                    type="text"
                    name="reg_filter"
                    v-model="message"
                    placeholder="Enter registration number"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-400 focus:ring-red-400"
                />
                <button @click="submitData">Submit</button>


                <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        @auth
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                        @endauth
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 w-2/5">
                            Reg Nubmer.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr v-for="car in cars" :key="car.car_id" class="odd:bg-white even:bg-gray-50 border-b">
                            @auth
                                <td class="px-6 py-4">@{{ car.id }}</td>
                            @endauth
                            <td class="px-6 py-4">@{{ car.car_name }}</td>
                            <td class="px-6 py-4">Pole 2</td>

                            <td class="px-6 py-4">
                                @auth
                                    <div class="flex items-center">
                                        <a href="#" class="text-blue-500 hover:text-blue-600 mr-4" aria-label="Edit">
                                            <i class="fas fa-edit" title="Edit"></i>
                                        </a>
                                        <span class="text-gray-300">|</span>
                                        <a :href="'/car/delete/' + car.car_id" class="text-red-500 hover:text-red-600 ml-4" aria-label="Delete">
                                            <i class="fas fa-trash-alt" title="Delete"></i>
                                        </a>
                                    </div>
                                @endauth
                                @guest
                                    <a href="#" class="font-medium text-red-400 hover:text-red-500">Visit article</a>
                                @endguest
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

{{--        <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">--}}
{{--            <thead class="text-xs text-gray-700 uppercase bg-gray-50">--}}
{{--            <tr>--}}
{{--                @auth--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        ID--}}
{{--                    </th>--}}
{{--                @endauth--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Title--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3 w-2/5">--}}
{{--                    Reg Nubmer.--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Action--}}
{{--                </th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($cars as $car)--}}
{{--                <tr class="odd:bg-white even:bg-gray-50 border-b">--}}
{{--                    @auth--}}
{{--                        <td class="px-6 py-4">--}}
{{--                            {{ $car->id }}--}}
{{--                        </td>--}}
{{--                    @endauth--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        {{ $car ->car_name }}--}}
{{--                    </td>--}}

{{--                        <td class="px-6 py-4">--}}
{{--                            @if($car->registrationNumber)--}}
{{--                            {{ $car->registrationNumber->registration_number }}--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        @auth--}}
{{--                            <div class="flex items-center">--}}
{{--                                <a href="#" class="text-blue-500 hover:text-blue-600 mr-4" aria-label="Edit">--}}
{{--                                    <i class="fas fa-edit" title="Edit"></i>--}}
{{--                                </a>--}}
{{--                                <span class="text-gray-300">|</span>--}}
{{--                                <a href="/car/delete/{{ $car->id }}" class="text-red-500 hover:text-red-600 ml-4" aria-label="Delete">--}}
{{--                                    <i class="fas fa-trash-alt" title="Delete"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endauth--}}
{{--                        @guest--}}
{{--                            <a href="#" class="font-medium text-red-400 hover:text-red-500">Visit article</a>--}}
{{--                        @endguest--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--        {{ $articles->links() }}--}}
    </div>
    <script>
        window.cars = @json($cars);
    </script>
@endsection

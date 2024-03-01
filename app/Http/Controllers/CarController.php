<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use App\Models\RegistrationNumber;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::all();
        return view('car.cars', compact('cars'));
    }


    public function filterCars(Request $request)
    {
        $registrationNumber = $request->input('registrationNumber');

        if (!empty($registrationNumber)) {
            $cars = Car::whereHas('registrationNumber', function (Builder $query) use ($registrationNumber) {
                $query->where('registration_number', $registrationNumber);
            })
                ->orderBy('id', 'desc')
                ->get();
        } else {
            $cars = Car::all();
        }

        return response()->json(['cars' => $cars]);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $car = Car::create([
            'car_name' => $request->car_name,
        ]);
        $registrationNumber = new RegistrationNumber([
            'registration_number' => $request->registration_number,
        ]);
        $car->registrationNumber()->save($registrationNumber);
        return redirect()->route('cars')->with('notification', 'Записът е създаден успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Car::destroy($id);
        return redirect()->back()->with('notification', 'Записът е изтрит успешно!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Car;
use App\Optional;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals = Optional::All();
        $car = new Car;
        // $route = route('cars.store');
        // $method = 'POST';
        return view('cars.create', compact(['car', 'optionals']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $newCar = new Car;
        $newCar->brand = $data['brand'];
        $newCar->car_name = $data['car_name'];
        $newCar->color = $data['color'];
        $newCar->trasmission = $data['trasmission'];
        $newCar->mileage = $data['mileage'];
        $newCar->price = $data['price'];
        $newCar->save();
        if (array_key_exists('optional', $data)) {
            $newCar->optionals()->sync($data['optionals']);
        }

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);

        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $optionals = Optional::All();
        $car = Car::findOrFail($id);
        return view('cars.edit', compact(['car', 'optionals']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $car = Car::findOrFail($id);
        $car->update($data);
        if (array_key_exists('optionals', $data)) {
            $car->optionals()->sync($data['optionals']);
        } else {
            $car->optionals()->detach();
        }

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}

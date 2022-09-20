<?php

namespace App\Http\Controllers;

use App\Car;
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
        $car = new Car;
        // $route = route('cars.store');
        // $method = 'POST';
        return view('cars.create', compact('car'));
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
<<<<<<< HEAD
        // dd($newCar);
=======
>>>>>>> c30aa916ff516bcf62f442f5fac0511db20d1ed5
        $newCar->save();

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

<<<<<<< HEAD
        return view ('cars.show', compact('cars'));
=======
        return view('cars.show', compact('car'));
>>>>>>> c30aa916ff516bcf62f442f5fac0511db20d1ed5
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}

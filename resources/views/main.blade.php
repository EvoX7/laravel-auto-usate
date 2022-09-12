@extends('layout.home')

@section('main-content')
    <h1>Auto usate</h1>
    @foreach ($cars as $car)
        <span>{{ $car->car_name }}</span>
        <span>{{ $car->brand }}</span>
        <span>{{ $car->color}}</span>
        <span>{{ $car->trasmission }}</span>
        <span>{{ $car->mileage }}</span> 
        <span>{{ $car->price }}</span>     
    @endforeach
@endsection
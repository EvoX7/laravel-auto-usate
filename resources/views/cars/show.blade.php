@extends('layout.home')

@section('main-content')
<div class=“card text-center col-8 offset-2 “>
    <div class=“card-header”>
        POST N: {{ $car->id }}
    </div>
    <div class=“card-body”>
        <h3 class=“card-title”>{{ $car->name }}</h3>
        <h5 class=“card-title”>{{ $car->brand }}</h5>
        <p class=“card-text”>{{ $car->color }}</p>
        <p class=“card-text”>{{ $car->trasmission }}</p>
        <p class=“card-text”>{{ $car->mileage }}</p>
        <p class=“card-text”>{{ $car->price }}</p>
    </div>
    <div class=“card-footer d-flex justify-content-center”>
        <div class=“mx-3”>
            <a class=“btn btn-success” href=“#”>
                Edit
            </a>
        </div>
        <div class=“mx-3">
            {{-- <form action=“#” class=“delete-method” method=“POST”>
                @csrf
                @method(‘DELETE’)
                <button class=“btn btn-danger” type=“submit”>
                    Delete
                </button>
            </form> --}}
        </div>
    </div>
</div>
    
@endsection


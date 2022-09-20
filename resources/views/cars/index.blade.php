@extends('layout.home')

@section('main-content')
    <h1>Auto usate</h1>
    <table class="table table-dark table-striped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>BRAND</th>
            <th>COLOR</th>
            <th>TRASMISSION</th>
            </th>
            <th>MILEAGE</th>
            <th>PRICE</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @forelse ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>
                        <a href="{{ route('cars.show', $car->id) }}">
                            {{ $car->car_name }}
                        </a>
                    </td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->trasmission }}</td>
                    <td>{{ $car->mileage }}</td>
                    <td>{{ $car->price }}</td>
                    <td>
                        <a class="btn btn-success" href="#">
                            Edit
                        </a>
                    </td>
                    <td>
                        {{-- <form action="#" class="delete-method" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                        </form> --}}
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="8">Non ci sono post da visualizzare</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    @endsection

@extends('layout.home')

@section('main-content')
    <h1>Auto usate</h1>
    <table class="table table-dark table-striped">
        <a href="{{ route('cars.create') }}" class="btn btn-sm btn-primary">
        create a new car</a>
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>BRAND</th>
            <th>COLOR</th>
            <th>TRASMISSION</th>
            </th>
            <th>MILEAGE</th>
            <th>PRICE</th>
            <th>OPTIONAL</th>
            <th>EDIT</th>
            <th>DELETE</th>
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
                        @foreach ($car->optionals as $optional)
                            {{ $optional->name }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('cars.edit', $car->id) }}">
                            Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{route('cars.destroy', $car->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
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

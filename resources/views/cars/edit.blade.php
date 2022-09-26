<form class="col-8 offset-2 bg-dark p-4 rounded" method="POST" action="{{ route('cars.update', $car->id) }}">
    @method('PUT')
    @csrf
    <div class=“mb-3”>
        <label for="brand" class=“form-label text-white”>BRAND</label>
        @error('title')
            <p class="text-danger fs-6">
                {{ $message }}
            </p>
        @enderror
        <input type=“text” name="brand" class=“form-control” required value="{{ old('brand', $car->brand) }}"
            id="brand">
    </div>

    </div>
    <div class="mb-3">
        <label for="name" class="form-label text-white">CAR NAME</label>
        @error('name')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="car_name" class="form-control" id="name" required
            value="{{ old('car_name', $car->car_name) }}">
    </div>
    <div class="mb-3">
        <label for="color" class="form-label text-white">COLOR</label>
        @error('color')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="color" class="form-control" id="color" required
            value="{{ old('color', $car->color) }}">
    </div>
    <div class="mb-3">
        <label for="trasmission" class="form-label text-white">TRASMISSION</label>
        @error('trasmission')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="trasmission" class="form-control" id="trasmission" required
            value="{{ old('trasmission', $car->trasmission) }}">
    </div>
    <div class="mb-3">
        <label for="mileage" class="form-label text-white">MILEAGE</label>
        @error('mileage')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="mileage" class="form-control" id="mileage" required
            value="{{ old('mileage', $car->mileage) }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label text-white">PRICE</label>
        @error('price')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="price" class="form-control" id="price" required
            value="{{ old('price', $car->price) }}">
    </div>
    <div class="mb-3">
        @foreach ($optionals as $optional)
            @if ($errors->any())
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                    name="optional[]" value="{{ $optional->id }}"
                    {{ in_array($optional->id, old('optionals', [])) ? 'checked' : '' }}>
            @else
                <input type="checkbox" name="optional[]" class="form-control" id="optional"
                    value="{{ $optional->id }}" {{ $car->optionals->contains($optional) ? 'checked' : '' }}>
            @endif


            <label for="optional" class="form-label text-white">{{ $optional->name }}</label>
        @endforeach
    </div>

    <button type=“submit” class="btn btn-success">Submit</button>

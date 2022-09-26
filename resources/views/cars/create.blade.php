<form class="col-8 offset-2 bg-dark p-4 rounded" method="POST" action="{{ route('cars.store') }}">
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
            value="{{ old('name', $car->car_name) }}">
    </div>
    <div class="mb-3">
        <label for="color" class="form-label text-white">COLOR</label>
        @error('color')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        <input type="text" name="color" class="form-control" id="color" required
            value="{{ old('name', $car->color) }}">
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
        <label for="optional" class="form-label text-white">OPTIONALS</label>
        @error('optional')
            <p class=“text-danger fs-6”>
                {{ $message }}
            </p>
        @enderror
        @foreach ($optionals as $optional)
            <input type="checkbox" name="optional[]" class="form-control" id="optional" required
            value="{{ old('optional', $car->optional) }}"> {{ $optional->name }} 
        @endforeach
    </div>
    
    <button type=“submit” class="btn btn-success">Submit</button>


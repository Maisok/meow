<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header/>
    <div class="bg-gray-900 min-h-screen py-10 px-4">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach ($cars as $car)
          <div class="bg-gray-800 rounded-lg p-4 text-center">
              <a href="{{ route('cars.show', $car->id) }}">
                  <img class="w-full h-60 object-cover rounded-md mb-4" src="{{ asset('images/car.jpg') }}" alt="{{ $car->mark }} {{ $car->model }}">
              </a>
              <h3 class="text-white font-semibold">{{ $car->mark }} {{ $car->model }}</h3>
              <p class="text-gray-400">{{ $car->price }} RUB</p>
          </div>
      @endforeach
        
          

        </div>
      </div>
      <x-footer/>
</body>
</html>
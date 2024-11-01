<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $cars->mark }} {{ $cars->model }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-900 text-white">
    <x-header/>
    <div class="container mx-auto">
        <div class="text-center text-2xl font-bold text-white mb-6">
            {{ $cars->mark }} {{ $cars->model }}
        </div>

        <!-- Carousel Section -->
        <div class="flex items-center justify-center gap-4 mb-8">
            <div class="flex gap-4">
                <img src="{{ asset('images/car.jpg') }}" alt="{{ $cars->mark }} {{ $cars->model }}" class="w-48 h-48 object-cover rounded-lg">
                <img src="{{ asset('images/car.jpg') }}" alt="{{ $cars->mark }} {{ $cars->model }}" class="w-48 h-48 object-cover rounded-lg">
                <img src="{{ asset('images/car.jpg') }}" alt="{{ $cars->mark }} {{ $cars->model }}" class="w-48 h-48 object-cover rounded-lg">
            </div>
        </div>

        <!-- Color Options -->
        <div class="flex justify-center gap-4 mb-8">
            <div class="w-8 h-8 rounded-full bg-blue-600 border-2 border-gray-300"></div>
            <div class="w-8 h-8 rounded-full bg-red-600 border-2 border-gray-300"></div>
            <div class="w-8 h-8 rounded-full bg-white border-2 border-gray-300"></div>
            <div class="w-8 h-8 rounded-full bg-gray-400 border-2 border-gray-300"></div>
        </div>

        <!-- Specifications Section -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-sm mb-8">
            <div>
                <p class="text-gray-400">Пробег</p>
                <p class="font-semibold">{{ $cars->mileage }} KM</p>
            </div>
            <div>
                <p class="text-gray-400">Год</p>
                <p class="font-semibold">{{ $cars->year }}</p>
            </div>
            <div>
                <p class="text-gray-400">Объем двигателя</p>
                <p class="font-semibold">4.4</p>
            </div>
            <div>
                <p class="text-gray-400">Мощность</p>
                <p class="font-semibold">560 л.с.</p>
            </div>
            <div>
                <p class="text-gray-400">Коробка</p>
                <p class="font-semibold">МТ</p>
            </div>
            <div>
                <p class="text-gray-400">Тип двигателя</p>
                <p class="font-semibold">Бензиновый</p>
            </div>
        </div>

        <!-- Buttons Section -->
        <div class="flex justify-center gap-4">
            <form action="{{ route('book')}}" method="POST">
                @csrf
                <input type="hidden" name="car_id" value="{{ $cars->id }}">
                <input type="hidden" name="start_date" value="{{ now()->format('Y-m-d H:i:s') }}">
                <input type="hidden" name="end_date" value="{{ now()->addDays(7)->format('Y-m-d H:i:s') }}">
                <button type="submit" class="px-6 py-2 bg-purple-700 text-white rounded-md font-semibold hover:bg-purple-600">Забронировать</button>
            </form>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mt-4 text-center text-green-500">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>
</html>
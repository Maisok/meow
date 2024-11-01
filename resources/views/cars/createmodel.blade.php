<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Model</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <x-header/>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Add Car Model</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('cars.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="mark" class="block text-gray-700 text-sm font-bold mb-2">Mark</label>
                <input id="mark" type="text" name="mark" value="{{ old('mark') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('mark')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Model</label>
                <input id="model" type="text" name="model" value="{{ old('model') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('model')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Year</label>
                <input id="year" type="number" name="year" value="{{ old('year') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('year')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="vin" class="block text-gray-700 text-sm font-bold mb-2">VIN</label>
                <input id="vin" type="text" name="vin" value="{{ old('vin') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('vin')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="color" class="block text-gray-700 text-sm font-bold mb-2">Color</label>
                <input id="color" type="text" name="color" value="{{ old('color') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('color')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="mileage" class="block text-gray-700 text-sm font-bold mb-2">Mileage</label>
                <input id="mileage" type="number" name="mileage" value="{{ old('mileage') }}" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('mileage')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                <input id="price" type="number" name="price" value="{{ old('price') }}" required step="0.01"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('price')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Add Model
                </button>
            </div>
        </form>

        <h2 class="text-xl font-bold mb-4">All Car Models</h2>

        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Mark</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Model</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Year</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">VIN</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Color</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Mileage</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($cars as $car)
                    <tr>
                        <td class="text-left py-3 px-4">{{ $car->mark }}</td>
                        <td class="text-left py-3 px-4">{{ $car->model }}</td>
                        <td class="text-left py-3 px-4">{{ $car->year }}</td>
                        <td class="text-left py-3 px-4">{{ $car->vin }}</td>
                        <td class="text-left py-3 px-4">{{ $car->color }}</td>
                        <td class="text-left py-3 px-4">{{ $car->mileage }}</td>
                        <td class="text-left py-3 px-4">{{ $car->price }}</td>
                        <td class="text-left py-3 px-4">
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car model?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
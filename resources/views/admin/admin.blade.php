<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <x-header/>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>

        <div class="flex space-x-4 mb-6">
            {{-- <a href="{{ route('cars.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Car Mark</a> --}}
            <a href="{{ route('cars.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Car Model</a>
            <a href="{{ route('cars.import.form') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Import Cars</a>
        </div>

        <form action="" method="GET" class="mb-6">
            <div class="flex items-center">
                <input type="email" name="search" value="{{ $search ?? '' }}" placeholder="Search by email" class="border border-gray-300 p-2 rounded-l-md w-full">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-md">Search</button>
            </div>
        </form>

        <h2 class="text-xl font-bold mb-4">All Users</h2>

        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Role</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($users as $user)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">{{ $user->name }}</td>
                        <td class="w-1/3 text-left py-3 px-4">{{ $user->email }}</td>
                        <td class="text-left py-3 px-4">{{ $user->employee }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
    <div class="container mx-auto px-4 py-12 flex flex-col items-center">
        <div class="mb-12 text-center">
            <h1 class="text-5xl font-extrabold text-indigo-800 animate-pulse">Categories</h1>
        </div>

        <div class="w-full max-w-6xl">
            <div class="flex justify-between mb-4">
                <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
                </a>
                <a href="{{ route('categories.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300">
                <i class="fas fa-plus mr-2"></i> Add New Category
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white uppercase text-sm leading-normal">
                            <th class="py-4 px-6 text-center">Name</th>
                            <th class="py-4 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($categories as $category)
                            <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-300">
                                <td class="py-4 px-6 text-center font-bold">{{ $category->name }}</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="w-6 mr-4 transform hover:text-purple-500 hover:scale-110 transition duration-300">
                                            <i class="fas fa-edit text-lg"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-6 mr-2 transform hover:text-red-500 hover:scale-110 transition duration-300">
                                                <i class="fas fa-trash text-lg"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <footer class="text-center mt-12 text-gray-600 pb-8">
        <p>&copy; 2023 Ifan Ganteng. All rights reserved.</p>
    </footer> -->
</body>
</html>

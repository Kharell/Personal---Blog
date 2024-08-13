<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
    <div class="container mx-auto px-4 py-12 flex flex-col items-center">
        <div class="mb-12 text-center">
            <h1 class="text-5xl font-extrabold text-indigo-800 animate-pulse">Add New Category</h1>
        </div>

        <div class="w-full max-w-6xl">
            <div class="flex justify-between mb-4">
                <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Categories
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden p-8">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Category Name:
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="name" name="name" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300" type="submit">
                            <i class="fas fa-plus mr-2"></i>Add Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

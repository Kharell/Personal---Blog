<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-purple-500 to-indigo-600 shadow-xl">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="flex space-x-8">
                    <div>
                        <a href="#" class="flex items-center py-6 px-3">
                            <span class="font-bold text-white text-2xl">Personal Blog </span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/profile" class="py-6 px-4 text-white font-semibold hover:bg-indigo-700 rounded-lg transition duration-300">
                        <i class="fas fa-user-circle mr-2 text-xl"></i>Profile
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-12 flex flex-col items-center">
        <div class="mb-12 text-center">
            <h1 class="text-5xl font-extrabold text-indigo-800 animate-pulse">Personal Blog Dashboard</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
            <a href="/posts" class="bg-white hover:bg-blue-50 text-blue-600 font-bold py-8 px-6 rounded-xl shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 hover:scale-105 flex flex-col items-center w-full max-w-sm">
                <i class="fas fa-list-ul text-5xl mb-4"></i>
                <span class="block text-2xl mb-2">View Posts</span>
                <span class="text-sm text-center">Atur dan Rivyou Postingan Anda</span>
            </a>
            <a href="/posts/create" class="bg-white hover:bg-green-50 text-green-600 font-bold py-8 px-6 rounded-xl shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 hover:scale-105 flex flex-col items-center w-full max-w-sm">
                <i class="fas fa-pen-fancy text-5xl mb-4"></i>
                <span class="block text-2xl mb-2">Create New Post</span>
                <span class="text-sm text-center">Silahkan Masukan Postingan Terbaru</span>
            </a>
            <a href="/categories/categoriesIndex" class="bg-white hover:bg-yellow-50 text-yellow-600 font-bold py-8 px-6 rounded-xl shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2 hover:scale-105 flex flex-col items-center w-full max-w-sm">
                <i class="fas fa-tags text-5xl mb-4"></i>
                <span class="block text-2xl mb-2">View Categories</span>
                <span class="text-sm text-center">Silahkan Masukan Kategori Tebaru</span>
            </a>
        </div>
    </div>


    </div>
    <footer class="text-center mt-12 text-gray-600 pb-8">
        <p>&copy; 2023 Karolus Jone Kalang. All rights reserved.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            min-height: 100vh;
        }

        .profile-circle {
            transition: transform 0.3s ease-in-out;
        }

        .profile-circle:hover {
            transform: scale(1.05) rotate(5deg);
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Profile</h1>
        <div class="max-w-md mx-auto bg-white shadow-md rounded-full px-6 pt-4 pb-6 mb-4 profile-circle overflow-hidden">
            <div class="mb-4 text-center">
                <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="Profile Avatar" class="w-24 h-24 rounded-full mx-auto object-cover">
                 <h2 class="text-xl font-semibold mt-3">{{ $user->name }}</h2>
                <p class="text-gray-600 text-sm">{{ $user->username }}</p>
                <p class="text-gray-600 mt-2 text-sm">{{ $user->profile ? $user->profile->bio : '' }}</p>
            </div>
            <!-- <div class="flex justify-center">
                <a href="{{ route('profile.edit') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Edit Profile
                </a>
            </div> -->
        </div>
        <div class="mt-16 text-center">
            <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out text-lg mr-4">
                <i class="fas fa-home mr-2"></i>Back to Dashboard
            </a>
            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out text-lg">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>

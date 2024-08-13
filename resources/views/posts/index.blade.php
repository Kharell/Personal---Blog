<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-5xl font-extrabold text-center text-indigo-800 mb-8 animate-pulse">All Posts</h1>
        <div class="mb-6 flex justify-between items-center">
            <a href="/dashboard" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                <i class="fas fa-arrow-left mr-2"></i>Back to Dashboard
            </a>
            <a href="/posts/create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                <i class="fas fa-plus mr-2"></i>Create New Post
            </a>
        </div>
        <?php if(empty($posts)): ?>
            <p class="text-center text-gray-600">No posts available.</p>
        <?php else: ?>
            <ul class="space-y-6">
                <?php foreach($posts as $post): ?>
                    <li class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($post->title); ?></h2>
                        <p class="text-gray-600 mb-2"><?php echo htmlspecialchars($post->content); ?></p>
                        <p class="text-gray-500 mb-4">Category: <?php echo $post->category ? htmlspecialchars($post->category->name) : 'Uncategorized'; ?></p>
                        <div class="flex justify-end space-x-2">
                            <a href="/posts/<?php echo $post->id; ?>/edit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                                <i class="fas fa-edit mr-2"></i>Edit
                            </a>
                            <form action="/posts/<?php echo $post->id; ?>" method="POST" class="inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                                    <i class="fas fa-trash-alt mr-2"></i>Delete
                                </button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- <footer class="text-center mt-12 text-gray-600">
        <p>&copy; 2023 Ifan Ganteng. All rights reserved.</p>
    </footer> -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Nest</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../src/assets/fontawesome-free-6.7.2-web/css/all.min.css">
</head>

<body class="font-poppins">
    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar w-64 bg-white h-screen shadow-lg transition-all duration-300 flex flex-col">
        <!-- Logo + Toggle -->
        <div class="flex items-center justify-between p-4">
            <h1 class="text-xl font-bold text-indigo-600 transition-opacity duration-300">🌿 Task Nest</h1>
            <button id="toggleBtn" class="text-gray-600 hover:text-indigo-600">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menu -->
        <nav class="flex-1 p-2 space-y-2">
            <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                <i class="fas fa-home w-5 text-center"></i>
                <span class="label">Dashboard</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                <i class="fas fa-tasks w-5 text-center"></i>
                <span class="label">Tasks</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                <i class="fas fa-users w-5 text-center"></i>
                <span class="label">Team</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                <i class="fas fa-cog w-5 text-center"></i>
                <span class="label">Settings</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h2 class="text-3xl font-semibold text-gray-800">Welcome back, Irvan 👋</h2>
        <p class="mt-2 text-gray-600">Versi ini pakai JavaScript biasa. Gak ada Alpine, tapi tetap responsif dan interaktif!</p>
    </main>

</body>

</html>
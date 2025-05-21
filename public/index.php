<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Nest</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../src/assets/fontawesome-free-6.7.2-web/css/all.min.css">
</head>

<body class="font-poppins bg-gray-50">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar w-64 bg-white h-screen shadow-lg transition-all duration-300 flex flex-col">
            <!-- Logo + Toggle -->
            <div class="flex items-center justify-between p-4 pb-8">
                <div class="logo flex items-center text-gray-700 ps-0.5">
                    <span class="fa-solid fa-clipboard-list text-xl"></span>
                    <h1 class="text-xl font-bold transition-opacity duration-300 ps-3 label"></span>Task Nest</h1>
                </div>


            </div>

            <!-- Menu -->
            <nav class="flex-1 p-2 space-y-2">

                <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                    <i class="fas fa-home w-5 text-center"></i>
                    <span class="label">Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                    <i class="fas fa-tasks w-5 text-center"></i>
                    <span class="label">Task</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                    <i class="fas fa-users w-5 text-center"></i>
                    <span class="label">Team</span>
                </a>
                <a href="#" class="flex items-center space-x-3 text-gray-700 hover:bg-indigo-100 p-2 rounded-md transition">
                    <i class="fas fa-gear w-5 text-center"></i>
                    <span class="label">Setting</span>
                </a>

            </nav>
        </aside>

        <!-- Main Area -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Navbar / Topbar -->
            <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
                <button id="toggleBtn" class="text-gray-600 hover:text-indigo-600">
                    <i class=" text-lg fas fa-bars transition-transform duration-300 ease-in-out"></i>
                </button>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hi, Irvan!</span>
                    <img src="https://i.pravatar.cc/32" alt="Avatar" class="w-8 h-8 rounded-full" />
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <h3 class="text-2xl font-bold text-gray-800">Welcome back 👋</h3>
                <p class="mt-2 text-gray-600">Versi ini pakai JavaScript biasa. Gak ada Alpine, tapi tetap responsif dan interaktif!</p>
            </main>

        </div>

    </div>


    <script src="../src/assets/js/app.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan link tailwindnya -->
    <!-- https://tailwindcss.com/docs/guides/laravel -->
    @vite('resources/css/app.css')
    <!-- ========================== -->
    <title>@yield('title', 'Warehouse Inventory')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Warehouse Inventory</h1>
            <nav>
                @auth
                    <a href="{{ route('inventories.index') }}" class="hover:underline">Inventories</a>
                    <a href="{{ route('logout') }}" class="ml-4 hover:underline"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 hover:underline">Register</a>
                @endauth
            </nav>
        </div>
    </header>
    <main class="container mx-auto my-8">
        @yield('content')
    </main>
    <!-- atur footer tetap di bawah w-full fixed bottom-0 -->
    <footer class="bg-gray-800 text-white py-4 w-full fixed bottom-0">
    <!-- ================================================ -->
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Warehouse Inventory
        </div>
    </footer>
</body>
</html>

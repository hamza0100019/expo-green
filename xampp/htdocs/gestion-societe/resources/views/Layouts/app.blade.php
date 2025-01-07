<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex">
        <aside class="w-64 bg-blue-700 text-white h-screen shadow-lg">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Gestion Société</h1>
            </div>
            <nav class="mt-6">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-blue-800">Dashboard</a>
                <a href="{{ route('stocks.index') }}" class="block px-4 py-2 hover:bg-blue-800">Stocks</a>
                <a href="{{ route('employees.index') }}" class="block px-4 py-2 hover:bg-blue-800">Employés</a>
                <a href="{{ route('clients.index') }}" class="block px-4 py-2 hover:bg-blue-800">Clients</a>
                <a href="{{ route('reports.index') }}" class="block px-4 py-2 hover:bg-blue-800">Rapports</a>
                @if (Auth::check() && Auth::user()->role === 'admin')
                    <a href="{{ route('admin.index') }}" class="block px-4 py-2 hover:bg-blue-800">Admin</a>
                @endif
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            @yield('content')
        </div>
    </div>
</body>
</html>

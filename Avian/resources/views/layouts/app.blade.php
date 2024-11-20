<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">

    <header class="bg-blue-800 text-white">
        <div class="max-w-6xl mx-auto py-4 px-6">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-xl font-semibold">My Application</a>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('transactions.create') }}" class="hover:text-blue-300">Tambah Transaksi</a></li>
                        <li><a href="{{ route('transactions.report') }}" class="hover:text-blue-300">Laporan</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="py-16">
        @yield('content')
    </main>

</body>
</html>

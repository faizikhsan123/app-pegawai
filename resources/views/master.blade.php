<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'App Pegawai')</title>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col font-sans">

    {{-- HEADER --}}
    <header class="bg-[#0F172A] text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-wide hover:text-blue-300 transition">
                @yield('page-title', 'App Pegawai')
            </h1>

            {{-- NAVBAR --}}
            <nav>
                <ul class="flex space-x-8">
                    <li>
                        <a href="{{ url('/employes') }}"
                            class="hover:text-blue-300 font-medium transition-colors duration-200">Employee</a>
                    </li>
                    <li>
                        <a href="{{ url('/departements') }}"
                            class="hover:text-blue-300 font-medium transition-colors duration-200">Department</a>
                    </li>
                    <li>
                        <a href="{{ url('/attendance') }}"
                            class="hover:text-blue-300 font-medium transition-colors duration-200">Attendance</a>
                    </li>
                    <li>
                        <a href="{{ url('/positions') }}"
                            class="hover:text-blue-300 font-medium transition-colors duration-200">Posisi</a>
                    </li>
                    <li>
                        <a href="{{ url('/salaries') }}"
                            class="hover:text-blue-300 font-medium transition-colors duration-200">Salaries</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow max-w-7xl mx-auto w-full px-8 py-10 mt-8 bg-white rounded-2xl shadow-md border border-gray-100">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-[#0F172A] text-gray-300 mt-12">
        <div class="text-center py-5 text-sm border-t border-gray-700">
            &copy; {{ date('Y') }}
            <span class="font-semibold text-white">App Pegawai</span>.
            All rights reserved.
        </div>
    </footer>

</body>

</html>

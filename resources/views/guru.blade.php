<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Data Guru</title>
    <link rel="shortcut icon" href="img/logojp.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="h-[2000px]">

    <x-sidebar></x-sidebar>

    {{-- Main Content Section Start --}}
    <main id="main" class="px-4 py-6 lg:max-w-[52rem] xl:max-w-[71.1rem] lg:ms-64 xl:ms-auto h-screen">
        <!-- Main Content -->
        <main class="flex-1">
            <div class="bg-white w-full h-full rounded shadow-lg">
                <!-- Title -->
                <x-header>Data Guru</x-header>
                <hr class="mt-3 border border-slate-500">

                <!-- Search bar -->
                <div class="my-10 px-10 flex justify-between items-center">
                    <form action="" method="post">
                        <div class="flex items-center gap-3">
                            <label for="cari_data" class="text-sm font-semibold text-black">cari data Guru: </label>
                            <div class="relative w-[60%] rounded-lg border border-slate-300">
                                <input type="text" name="" id=""
                                    class="inset-0 px-4 py-2 w-full rounded-lg">

                                <button type="submit" class="absolute top-2 right-1">
                                    <img src="img/icons/search.png" alt="">
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- Nav Tab Start --}}
                    <x-nav-tab></x-nav-tab>
                    {{-- Nav Tab End --}}
                </div>

                <div class="ps-10 pe-4">
                    <hr class="my-5 border border-slate-500">
                </div>


                <!-- Buttons dan NavTab -->
                <div class="flex justify-end items-center gap-6 my-6 px-8">
                        <!-- Tombol Import Start -->
                        <button
                            class="bg-blue hover:shadow-lg text-white font-bold py-2 px-4 rounded focus:outline-none">
                            <a href="/import/importGuru">Export</a>
                        </button>
                        {{-- Tombol Import End --}}

                        <!-- Tombol Tambah Data Start -->
                        <a href="/insert/insertGuru"
                            class="bg-green hover:shadow-lg text-white font-bold py-2 px-4 rounded flex items-center space-x-2 focus:outline-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span>Tambah Data</span>
                        </a>
                        {{-- Tombol Tambah Data End --}}
                </div>


                <!-- Table -->
                <div class="overflow-x-auto px-8 pb-6">
                    <table class="min-w-full bg-gray-100 rounded">
                        <thead class="bg-gray-200 border">
                            <tr class="mb-4">
                                <th class="py-2 px-4 border-b text-left text-gray-600">Id</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Nama</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">NIK</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Mata Pelajaran</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Status</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">1</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">
                                    <button
                                        class="status-on bg-blue font-semibold text-sm text-white py-1 px-3 rounded-full"
                                        onclick="toggleStatus(this)">On</button>
                                </td>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <button class="bg-green text-white font-semibold py-1 px-5 -ml-3 rounded-full"><a
                                            href="/edit/editGuru">Edit</a></button>
                                </td>
                            </tr>
                            <!-- Aman -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </main>
    {{-- Main Content Section End --}}

    <script>
        // Function to toggle the dropdown menus
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.classList.toggle('show');
        }

        // Function To Status
        function toggleStatus(button) {
            if (button.innerText === "On") {
                button.innerText = "Off";
                button.classList.remove("status-on");
                button.classList.add("status-off");
            } else {
                button.innerText = "On";
                button.classList.remove("status-off");
                button.classList.add("status-on");
            }
        }
    </script>
</body>

</html>

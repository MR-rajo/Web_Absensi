<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Mapping Kelas</title>
    <link rel="shortcut icon" href="/img/logojp.png" type="image/x-icon">

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
    <main id="main" class="lg:max-w-[52rem] xl:max-w-[71.1rem] lg:ms-64 xl:ms-auto h-screen">
        <!-- Main Content -->
        <div class="w-full p-8">
            <div class="bg-white px-6 py-8 rounded-lg shadow-md">
                <x-header>Master Data Mapping Kelas</x-header>
                <hr class="mb-3">

                <!-- Buttons -->
                <div class="flex gap-4 mb-4 px-6">
                    <button
                        class="bg-white border text-black hover:bg-main hover:text-white px-6 py-3 rounded-lg flex items-center">
                        <i class="fa-solid fa-arrows-rotate px-3"></i>
                        Refresh Data
                    </button>
                </div>
                <hr>

                <!-- Form -->
                <div class="border-b pt-8 pb-4 font-semibold px-6">
                    <div class="grid grid-cols-2 gap-8 mb-4">
                        <div>
                            <label for="jurusan" class="block text-gray-600">Pilih Jurusan:</label>
                            <select id="jurusan" class="border w-[80%] p-2 rounded-md">
                                <option></option>
                                <option>RPL</option>
                                <option>BR</option>
                                <option>MP</option>
                                <option>AKL</option>
                            </select>
                        </div>
                        <div>
                            <label for="kelas" class="block text-gray-600">Pilih Kelas:</label>
                            <select id="kelas" class="border w-[40%] p-2 rounded-md">
                                <option></option>
                                <option>X</option>
                                <option>XI</option>
                                <option>XII</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="hari" class="block text-gray-600">Pilih Hari:</label>
                            <select id="hari" class="border w-48 p-2 rounded-md">
                                <option></option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                            </select>
                        </div>
                        <div>
                            <label for="mapel" class="block text-gray-600">Pilih Mata Pelajaran:</label>
                            <select id="mapel" class="border w-64 p-2 rounded-md">
                                <option></option>
                                <option>MTK</option>
                                <option>Bahasa Indonesia</option>
                                <option>Bahasa Jepang</option>
                                <option>Bahasa Inggris</option>
                                <option>Sejarah</option>
                                <option>IPAS</option>
                                <option>PJOK</option>
                                <option>Kejuruan</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-10 items-center mb-6 mt-6">
                        <div class="flex items-center">
                            <label for="jam-pelajaran" class="inline-block text-sm text-gray-600">Pilih Jam
                                Pelajaran:</label>
                            <input type="time" id="jam-pelajaran" class="border w-36 p-2 rounded-md">
                        </div>
                        <div class="flex items-center">
                            <label for="jam-dari" class="block text-sm text-gray-600 mr-3">Dari:</label>
                            <input type="time" id="jam-dari" class="border w-36 p-2 rounded-md">
                        </div>
                        <div class="flex items-center">
                            <label for="jam-sampai" class="block text-sm text-gray-600 mr-3">Sampai:</label>
                            <input type="time" id="jam-sampai" class="border w-36 p-2 rounded-md">
                        </div>
                    </div>
                    <div class="mb-8">
                        <label for="guru" class="block text-sm text-gray-600">Pilih Guru:</label>
                        <select id="guru" class="border w-60 p-2 rounded-md">
                            <option>Pilih Guru</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-8">
                        <label class="block text-gray-600 mr-5">Simpan Data Mapping Kelas :</label>
                        <button class="bg-main text-white px-6 py-2 text-sm font-semibold rounded-xl">Apply</button>
                        <a href="/import/maping"
                            class="bg-main text-white px-6 py-2 text-sm font-semibold rounded-xl">Export</a>
                    </div>
                </div>
                <hr class="border-2">

                <!-- Table -->
                <div class="mt-6">
                    <h3 class="text-sm font-semibold mb-4">Mapping Kelas :</h3>
                    <table class="w-full bg-gray-100 rounded-lg shadow-lg text-left">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="p-3">Kelas</th>
                                <th class="p-3">Jurusan</th>
                                <th class="p-3">Hari</th>
                                <th class="p-3">Mapel</th>
                                <th class="p-3">Jam</th>
                                <th class="p-3">Guru</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Empty Rows -->
                            <tr class="border-b">
                                <td class="p-3">-</td>
                                <td class="p-3">-</td>
                                <td class="p-3">-</td>
                                <td class="p-3">-</td>
                                <td class="p-3">-</td>
                                <td class="p-3">-</td>
                                <td class="py-2 px-4 border-b">
                                    <button class="bg-green text-white font-semibold py-1 px-5 -ml-3 rounded-full"><a
                                            href="../formEdit/editTU.html">Edit</a></button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    {{-- Main Content Section End --}}

    <script>
        // Function to toggle the dropdown menus
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.classList.toggle('show');
        }
    </script>
</body>

</html>

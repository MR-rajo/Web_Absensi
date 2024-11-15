<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

<body class="bg-bgDekstop">

    <x-nav-user></x-nav-user>

    <!-- Main Content -->
    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8 pb-10 pt-20">
        <div class="flex flex-col sm:flex-row items-center mb-4 space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="bg-white p-4 rounded-lg shadow-xl flex space-x-2">
                <div class="flex items-center space-x-2">
                    <label for="bulan" class="text-gray-700">Bulan</label>
                    <select id="bulan" class="border border-gray-300 rounded-md p-2">
                        <option>Oktober</option>
                    </select>
                </div>
                <div class="flex items-center space-x-2">
                    <label for="tahun" class="text-gray-700">Tahun</label>
                    <select id="tahun" class="border border-gray-300 rounded-md p-2">
                        <option>2024</option>
                    </select>
                </div>
            </div>
            <div class="bg-white py-2 px-3 rounded-lg shadow-xl flex items-center">
                <select id="kelas" class=" rounded-md px-4 p-4">
                    <option disabled selected>Kelas</option>
                    <option value="">BR</option>
                    <option value="">MP</option>
                    <option value="">AK</option>
                    <option value="">RPL</option>
                </select>
            </div>
        </div>


        <!-- Absensi Table -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div
                class="flex flex-col sm:flex-row justify-between items-center mb-4 bg-white rounded-t-lg p-4 space-y-4 sm:space-y-0">
                <h2 class="text-lg sm:text-xl font-semibold">
                    Data Hadir Siswa
                </h2>
                <!-- Search Input -->
                <div class="relative bg-white p-2 rounded-full shadow-lg w-full sm:w-auto cursor-pointer"
                    onclick="document.getElementById('searchInput').focus();">
                    <input class="px-7 py-2 pr-10 rounded-full w-full border-none focus:outline-none" id="searchInput"
                        placeholder="Masukkan Pencarian" type="text" />
                    <button type="submit" class="me-3 absolute right-3 top-1/3">
                        <img alt="Search Icon" class="" height="20" src="/img/Search.png" width="20" />
                    </button>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex border-b border-gray-300 mb-4">
                <a href="DaftarAbsensiGuru.html" class="px-4 py-2 text-hitam hover:text-main">Guru</a>
                <button class="px-4 py-2 text-main border-b-2 border-main font-semibold">Siswa</button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full text-left border-collapse">
                    <thead>
                        <tr class="text-center">
                            <th class="border-b-2 py-2 px-2 sm:px-4">No</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4">Nama Lengkap</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4">Mata Pelajaran</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4">Kelas</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4">Check In</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4">Check Out</th>
                            <th class="border-b-2 py-2 px-2 sm:px-4 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <!-- Row 1 -->
                        <tr class="bg-bgGelap">
                            <td class="py-2 px-2 sm:px-4">1</td>
                            <td class="py-2 px-2 sm:px-4">-</td>
                            <td class="py-2 px-2 sm:px-4">-</td>
                            <td class="py-2 px-2 sm:px-4">-</td>
                            <td class="py-2 px-2 sm:px-4">-</td>
                            <td class="py-2 px-2 sm:px-4">-</td>
                            <td class="py-2 px-2 sm:px-4 flex justify-center items-center">
                                <span class="bg-bgLogOut text-white px-4 py-3 rounded-lg text-sm">Tidak Hadir</span>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="py-2 px-2 sm:px-4">2</td>
                            <td class="py-2 px-2 sm:px-4">Muhammad</td>
                            <td class="py-2 px-2 sm:px-4">Matematika</td>
                            <td class="py-2 px-2 sm:px-4">RPL</td>
                            <td class="py-2 px-2 sm:px-4">07:30</td>
                            <td class="py-2 px-2 sm:px-4">10:00</td>
                            <td class="py-2 px-2 sm:px-4 flex justify-center items-center">
                                <span class="bg-ijoBtn text-white px-9 py-3 rounded-lg text-sm">Hadir</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

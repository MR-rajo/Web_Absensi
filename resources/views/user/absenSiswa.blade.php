<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa</title>
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
    <div class="max-w-7xl mx-auto mt-8 px-4 pt-20">

        <div class="mb-6">
            <select class="w-full md:w-1/3 h-16 px-4 py-2 border rounded-[10px] shadow-2xl md:mr-2 mr-1">
                <option>Mata Pelajaran</option>
            </select>
        </div>

        <!-- Welcome Section -->
        <div class="md:flex justify-between items-center h-[178px] md:mb-14 mb-48">
            <div
                class="bg-gradient-to-r from-[#226691] to-[#3AAEF7] text-white p-4 rounded-[10px] w-full h-full mr-5 flex justify-between lg:w-3/4">
                <div class="w-[620px]">

                    <h1 class="text-2xl md:text-4xl font-bold ">Selamat Datang di SMK Jakarta Pusat 1</h1>
                    <h3 class="font-semibold text-sm md:text-xs mt-1">Semangat Sekolahnya Yhc, Silahkan Absen Terlebih
                        Dahulu</h3>

                    <p class="text-xs mt-6 md:mt-10">Senin, 14 Oktober 2024</p>
                </div>
                <div class="lg:flex justify-center items-center hidden md:block">
                    <button
                        class="bg-bgHadir hover:bg-green-600 text-white text-2xl font-bold px-4 py-3  rounded-lg h-[120px] w-[220px] flex justify-center items-center">
                        <span class="py-3">
                            Absen Masuk
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="85px" viewBox="0 -960 960 960"
                                width="85px" fill="#ffff" class="h">
                                <path
                                    d="M481-120v-60h299v-600H481v-60h299q24 0 42 18t18 42v600q0 24-18 42t-42 18H481Zm-55-185-43-43 102-102H120v-60h363L381-612l43-43 176 176-174 174Z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="flex w-full h-full justify-center items-center rounded-[10px] lg:w-1/4 md:bg-white">
                <button
                    class="bg-bgHadir hover:bg-green-600 text-white text-2xl font-bold pl-3 py-3 flex justify-center items-center  rounded-lg h-[120px] w-1/2 md:hidden mr-2">
                    <span class="py-3">
                        Absen Masuk
                    </span>
                    <span class="py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" height="85px" viewBox="0 -960 960 960" width="85px"
                            fill="#ffff">
                            <path
                                d="M481-120v-60h299v-600H481v-60h299q24 0 42 18t18 42v600q0 24-18 42t-42 18H481Zm-55-185-43-43 102-102H120v-60h363L381-612l43-43 176 176-174 174Z" />
                        </svg>
                    </span>
                </button>
                <button
                    class="bg-bgLogOut hover:bg-red-600 text-white text-2xl font-bold md:px-4 pl-3 py-3 rounded-lg h-[120px] w-1/2 lg:w-52 flex items-center">
                    <span class="py-3">
                        Absen Keluar
                    </span>
                    <span class="py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" height="85px" viewBox="0 -960 960 960" width="85px"
                            fill="#ffff">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                        </svg>
                    </span>

                </button>
            </div>
        </div>

        <!-- Date Picker -->
        <div class="mb-6 mt-4">
            <h2 class="font-semibold text-lg">Tanggal</h2>
            <div class="bg-white lg:w-[28%] w-full mt-2 p-4 rounded-lg shadow-lg flex items-center space-x-2 mr-2">
                <!-- Month Selector -->
                <label for="month" class="text-sm font-semibold mr-1">Bulan</label>
                <select id="month"
                    class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500 mr-2">
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>

                <!-- Year Selector -->
                <label for="year" class="text-sm font-semibold mr-1">Tahun</label>
                <select id="year"
                    class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>2023</option>
                    <option selected>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                </select>
            </div>
        </div>
        
        <div class="md:flex md:justify-between ">
            <div class="md:w-3/4 md:mr-5">
                <h1 class="text-2xl font-semibold bg-white mb-2 h-10 py-1 px-4 rounded-t-lg ">Absensi Siswa</h1>
            </div>
            <form action="" method="post" class="md:w-1/4 ">
                <div class="flex justify-end rounded-t-lg mb-2 bg-white relative">
                    <input type="text" name="search" placeholder="Masukkan Pencarian"
                        class="w-full px-4 py-2 rounded-t-2xl ">
                    <button type="submit" class="absolute top-1 right-1">
                        <svg role="img" viewBox="0 0 24 24" width="30px" id="search"
                            class="mx-2 text-slate-400" xmlns="http://www.w3.org/2000/svg">
                            <title>SearXNG</title>
                            <path class="text-salate-400"
                                d="m13.716 17.261 6.873 6.582L24 20.282l-6.824-6.536a9.11 9.11 0 0 0 1.143-4.43c0-5.055-4.105-9.159-9.16-9.159S0 4.261 0 9.316c0 5.055 4.104 9.159 9.159 9.159a9.11 9.11 0 0 0 4.557-1.214ZM9.159 2.773a6.546 6.546 0 0 1 6.543 6.543 6.545 6.545 0 0 1-6.543 6.542 6.545 6.545 0 0 1-6.542-6.542 6.545 6.545 0 0 1 6.542-6.543ZM7.26 5.713a4.065 4.065 0 0 1 4.744.747 4.064 4.064 0 0 1 .707 4.749l1.157.611a5.376 5.376 0 0 0-.935-6.282 5.377 5.377 0 0 0-6.274-.987l.601 1.162Z" />
                        </svg>
                    </button>
                </div>
            </form>

        </div>

        <div class="bg-white shadow-lg rounded-lg p-4 mb-10 overflow-x-auto">
            <table class="min-w-full table-auto border-collapseo">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Mata Pelajaran</th>
                        <th class="px-4 py-2">Check In</th>
                        <th class="px-4 py-2">Jam Pelajaran</th>
                        <th class="px-4 py-2">Check Out</th>
                        <th class="px-4 py-2 text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-200 border-t">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">14 Oktober 2024</td>
                        <td class="px-4 py-2">Matematika</td>
                        <td class="px-4 py-2">07:30</td>
                        <td class="px-4 py-2">07:00 - 08:30</td>
                        <td class="px-4 py-2">15:15</td>
                        <td class="px-4 py-2 text-center">
                            <span class="bg-bgHadir text-white px-4 lg:px-8 py-1 text-sm rounded">Hadir</span>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2 text-center flex md:block">
                            <span class="bg-red-500 text-white px-3 py-1 text-sm rounded">Tidak Hadir</span>
                        </td>
                    </tr>
                    <tr class="bg-gray-200 border-t">
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">14 Oktober 2024</td>
                        <td class="px-4 py-2">Matematika</td>
                        <td class="px-4 py-2">07:30</td>
                        <td class="px-4 py-2">07:00 - 08:30</td>
                        <td class="px-4 py-2">15:15</td>
                        <td class="px-4 py-2 text-center">
                            <span class="bg-bgHadir text-white px-4 lg:px-8 py-1 text-sm rounded">Hadir</span>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">4</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2">-</td>
                        <td class="px-4 py-2 text-center flex md:block">
                            <span class="bg-red-500 text-white px-3 py-1 text-sm rounded">Tidak Hadir</span>
                        </td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
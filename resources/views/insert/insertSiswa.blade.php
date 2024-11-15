<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah Data Guru</title>
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

<body>
    <div class="w-full mx-auto max-w-4xl min-h-screen shadow-lg grid grid-cols-3 gap-2">
        <!-- Sisi Kiri -->
        <div class="bg-blueSec col-span-1 p-4">
            <img src="/img/logojp.png" alt="Logo" class="w-7 h-7">
        </div>

        <!-- Sisi Kanan (Formulir) -->
        <div class="bg-white col-span-2 p-10">
            <h1 class="text-3xl mb-8 text-center">Create New Data Siswa</h1>
            <form>
                <!-- Input Nama -->
                <div class="mb-10 flex space-x-4">
                    <div class="mb-4">
                        <input
                            class="appearance-none border-b-2 border-gray-300 w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                            id="name" type="text" placeholder="Your Name">
                    </div>

                    <!-- Input Password -->
                    <div class="mb-4 pl-14 w-56">
                        <input type="password"
                            class="appearance-none border-b-2 border-gray-300 w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                            id="password" type="text" placeholder="Create Password">
                        </select>
                    </div>
                </div>

                <!-- Input NIK -->
                <div class="mb-10 flex space-x-4">
                    <div class="mb-4">
                        <input
                            class="appearance-none border-b-2 border-gray-300 w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                            id="name" type="text" placeholder="Your NIK">
                    </div>

                    <!-- Input Confirm Password -->
                    <div class="mb-4 pl-14 w-56">
                        <input
                            class="appearance-none border-b-2 border-gray-300 w-30 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                            id="password" type="text" placeholder="Confirm Password">
                        </select>
                    </div>
                </div>


                <!-- Dropdown Kelas -->
                <div class="mb-5 flex items-center space-x-4">
                    <div class="mb-8 mt-4 mr-14">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="class">
                            Your Class :
                        </label>
                        <select
                            class=" border rounded border-gray-300 w-52 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                            id="class">
                            <option value=""></option>
                            <option value="10">X</option>
                            <option value="11">XI</option>
                            <option value="12">XII</option>
                        </select>
                    </div>

                    <!-- Tombol Status -->
                    <div>
                        <label class="block text-gray-700 mb-2 font-bold">Status</label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-500" name="status" value="on">
                            <span class="ml-2">ON</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio text-blue-500" name="status" value="off">
                            <span class="ml-2">OFF</span>
                        </label>
                    </div>

                </div>

                <!-- Dropdown Jurusan -->
                <div class="mb-16">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="jurusan">
                        Jurusan
                    </label>
                    <select
                        class=" border rounded border-gray-300 w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500"
                        id="jurusan">
                        <option value=""></option>
                        <option value="RPL">RPL</option>
                        <option value="BR">BR</option>
                        <option value="MP">MP</option>
                        <option value="AKL">AKL</option>
                    </select>
                </div>


                <!-- Tombol Simpan -->
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blueBtn text-white font-semibold py-2 px-40 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Save data
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

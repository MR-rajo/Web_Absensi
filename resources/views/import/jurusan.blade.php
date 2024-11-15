<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Import</title>
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">

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

<body class="h-[2000px] bg-gray-100">

    <x-sidebar></x-sidebar>

    {{-- Main Content Section Start --}}
    <main id="main" class="p-4 lg:max-w-[52rem] xl:max-w-[71.1rem] lg:ms-64 xl:ms-auto h-screen">
        <div class="bg-white px-6 py-8 rounded shadow-sm">
            <!-- Title -->
            <x-header>Export Jurusan dan Kelas</x-header>
            <hr class="mt-3 mb-6">

            <!-- Instructions -->
            <div class="mb-6">
                <h3 class="font-semibold text-lg text-gray-500">Petunjuk Singkat</h3>
                <p class="text-sm text-gray-600 max-w-lg">
                    Menarik data jurusan & kelas bisa dilakukan dengan mengunduh data dari file Ms. Excel.
                    Format file excel harus sesuai kebutuhan aplikasi
                </p>
            </div>

            <hr class="my-6">

            <!-- File Upload Form -->
            <form>
                <div class="mb-4">
                    <label for="file-upload" class="block text-gray-600 font-semibold">Masukan File
                        (.xls/.xlsx/.csv)</label>
                    <input type="file" id="file-upload"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 mb-10">
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4 justify-between items-center">
                    <button type="submit"
                        class="bg-main text-white hover:bg-blue-900 px-4 py-2 rounded-md">Export</button>
                    <button type="button" class="bg-bgLogOut text-white px-4 py-2 rounded-md"><a
                            href="/guru">Kembali</a></button>
                </div>
            </form>
        </div>
    </main>
    {{-- Main Content Section End --}}
</body>

</html>

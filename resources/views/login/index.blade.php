<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
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

<body class="flex items-center justify-center min-h-screen bg-gray-100 font-poppins">
    <div class="flex flex-col md:flex-row w-full h-screen">
        <!-- Login Section -->
        <div class="w-full md:w-2/3 bg-white p-6 sm:p-8 md:p-16 flex flex-col justify-center items-center relative">
            <!-- Logo dan Nama Sekolah -->
            <div class="absolute top-4 left-4 md:top-8 md:left-16 flex items-center space-x-2">
                <img alt="School Logo" class="w-10 h-10" src="/img/logojp.png" />
                <h1 class="text-base sm:text-lg md:text-xl font-bold whitespace-nowrap">SMK Jakarta Pusat 1</h1>
            </div>

            <!-- Form Login -->
            <div class="w-full max-w-sm sm:max-w-md mt-16 sm:mt-24">
                <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-center">Log In</h2>
                <form>
                    <div class="mb-6 relative">
                        <input
                            class="w-full p-4 pl-12 bg-gray-200 rounded-lg placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="NIK/NISN" type="text" />
                    </div>
                    <div class="mb-10 relative">
                        <input
                            class="w-full p-4 pl-12 bg-gray-200 rounded-lg placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Password" type="password" />
                        <div class="absolute inset-y-0 right-4 flex items-center">
                            <img src="/img/IkonMata.png" alt="Toggle visibility" class="w-5 h-5 cursor-pointer" />
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="bg-main font-semibold text-white py-3 px-12 sm:px-16 rounded-lg hover:bg-blue-600 transition-colors"
                            type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Banner Section -->
        <div
            class="w-full md:w-1/3 bg-gradient-to-r from-bgLogin to-bgGradient text-white p-8 md:p-16 flex flex-col justify-center items-center relative hidden md:flex">
            <div class="absolute inset-0 p-0">
                <img src="/img/Background.png" alt="Background Image" class="w-full h-full object-cover opacity-50" />
            </div>
            <div class="relative z-10 text-center">
                <h2 class="text-2xl md:text-4xl font-bold mb-4">Hello SobatJP!</h2>
                <p class="mb-6">Silahkan Login Terlebih Dahulu Ya</p>
            </div>
        </div>
    </div>
</body>

</html>

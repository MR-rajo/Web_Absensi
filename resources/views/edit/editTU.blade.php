<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit TU</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

           <!-- Font Awesome -->
           <link
           rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
           integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
           crossorigin="anonymous"
           referrerpolicy="no-referrer"
         />
    
         {{-- Google Fonts --}}
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        @vite('resources/css/app.css')
</head>
<body class="h-[2000px] bg-gray-100">

    <x-sidebar></x-sidebar>

    {{-- Main Content Section Start --}}
    <main id="main" class="p-4 lg:max-w-[52rem] xl:max-w-[71.1rem] lg:ms-64 xl:ms-auto h-screen">
        <div class="bg-white px-6 py-8 rounded shadow-md">
            <!-- Title -->
            <x-header>Form Edit Data TU</x-header>
            <hr class="mt-3 mb-6">

            <!-- Form -->
            <form>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-600 font-semibold text-lg">Nama :</label>
                    <input type="text" id="nama" class="border-2 w-1/3 px-4 py-2 mt-1 rounded-md">
                </div>
                
                <div class="mb-4">
                    <label for="role" class="block text-gray-600 font-semibold text-lg">Role :</label>
                    <!-- <input type="text" id="role" class="border-2 w-1/2 p-2 mt-1 rounded-md"> -->
                    <select class=" border-2 rounded-md w-1/3 py-2 px-4 mt-1 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="role">
                      <option value=""></option>
                      <option value="Perpus">Perpus</option>
                      <option value="CleaningService">Cleaning Service</option>
                      <option value="TU">TU</option>
                  </select>
                </div>

                <div class="mb-4">
                    <label for="nik" class="block text-gray-600 font-semibold text-lg">NIK :</label>
                    <input type="text" id="nik" class="border-2 w-1/3 px-4 py-2 mt-1 rounded-md">
                </div>

                <div class="mb-10">
                  <label for="status" class="block text-gray-600 text-lg">Status :</label>
                  <label class="inline-flex items-center">
                      <input type="radio" name="status" value="on" class="form-radio text-blue-500">
                      <span class="ml-2 font-semibold">On</span>
                  </label>
                  <label class="inline-flex items-center ml-6">
                      <input type="radio" name="status" value="off" class="form-radio text-blue-500">
                      <span class="ml-2 font-semibold">Off</span>
                  </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-green text-white hover:bg-green-800 px-7 py-2 rounded-lg">Edit</button>
            </form>
        </div>
    </main>
    {{-- Main Content Section End --}}
</body>
</html>
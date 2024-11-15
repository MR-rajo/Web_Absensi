<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Mapel</title>
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
    <main id="main" class="p-8 lg:max-w-[52rem] xl:max-w-[71.1rem] lg:ms-64 xl:ms-auto h-screen">
        <!-- Main Content -->
        <main class="flex-1">
            <div class="bg-white rounded shadow-lg">
                <!-- Title -->
                <x-header>Master Jurusan dan Kelas</x-header>
                <hr class="mt-3 border border-slate-500 mb-6">

                {{-- Head Start --}}
                <div class="px-8 mb-2">
                    <div class="py-6 px-4 bg-secondary w-1/2 border border-black rounded-lg">
                        <div class="flex items-center gap-8">

                            {{-- Input 1 Start --}}
                            <div class="flex flex-col gap-2">
                                <label for="jurusan" class="font-normal text-lg text-black">Jurusan : </label>
                                <div class="flex items-center gap-2">
                                    <div class="px-4 py-2 bg-white rounded-lg border border-black w-52">
                                        <select name="" id="" class="w-full h-full">
                                            <option value=""></option>
                                        </select>

                                    </div>
                                    <button type="submit"
                                        class="bg-green text-white text-xs rounded-3xl font-normal p-2">Add</button>
                                </div>
                            </div>
                            {{-- Input 1 End --}}

                            {{-- Input 2 Start --}}
                            <div class="flex flex-col gap-2">
                                <label for="jurusan" class="font-normal text-lg text-black">Kelas : </label>
                                <div class="flex items-center gap-2">
                                    <div class="px-4 py-2 bg-white rounded-lg border border-black w-32">
                                        <select name="" id="" class="w-full h-full">
                                            <option value=""></option>
                                        </select>

                                    </div>
                                    <button type="submit"
                                        class="bg-green text-white text-xs rounded-3xl font-normal p-2">Add</button>
                                </div>
                            </div>
                            {{-- Input 2 End --}}
                        </div>
                    </div>
                </div>
                {{-- Head End --}}

                <div class="flex items-center w-1/2 justify-between px-8">
                    <button type="submit"
                        class="px-4 py-2 bg-main text-white font-normal text-sm rounded-xl hover:shadow-lg transition-all duration-300">Apply</button>
                    <a href="/import/jurusan"
                        class="px-4 py-2 bg-main text-white font-normal text-sm rounded-xl hover:shadow-lg transition-all duration-300">Export</a>
                </div>

                <div class="ps-10 pe-4">
                    <hr class="my-5 border border-slate-500">
                </div>


                <!-- Table -->
                <div class="overflow-x-auto px-8 pb-6">

                    <div class="">
                        <h2 class="font-semibold text-black text-sm mb-3">Murid :</h2>
                    </div>
                    <table class="min-w-full bg-gray-100 rounded">
                        <thead class="bg-gray-200 border">
                            <tr class="mb-4">
                                <th class="py-2 px-4 border-b text-left text-gray-600">Id</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Nama</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Kelas</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">Jurusan</th>
                                <th class="py-2 px-4 border-b text-left text-gray-600">NISN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">1</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">-</td>
                                <td class="py-2 px-4 border-b">-</td>
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
            if (button.innerText === "on") {
                button.innerText = "off";
                button.classList.remove("status-on");
                button.classList.add("status-off");
            } else {
                button.innerText = "on";
                button.classList.remove("status-off");
                button.classList.add("status-on");
            }
        }
    </script>
</body>

</html>

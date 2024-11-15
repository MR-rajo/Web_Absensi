<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Absensi</title>
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

<body class="">

    <x-navbar></x-navbar>

    <!-- Main Content Start -->
    <main>
        <!-- Hero Section Start -->
        <section id="hero" class="pt-40 md:pt-44 lg:pt-52 pb-20">
            <div class="w-full px-4">
                <div class="container mx-auto">
                    <div class="grid md:grid-cols-2 justify-between gap-14">
                        <!-- Content Left Start -->
                        <div class="flex flex-col gap-6 md:gap-8 order-2 md:order-1">
                            <h2
                                class="lg:max-w-lg text-4xl lg:text-6xl font-bold text-black leading-snug
                        ">
                                Kelola <span class="text-main">Absensi</span> Tanpa Ribet</h2>

                            <p class="font-medium text-black text-sm xl:text-[1.1rem] leading-snug md:max-w-lg">Website
                                ini bertujuan untuk mempermudah proses laporan absensi Siswa, Guru dan Tata Usaha yang
                                lebih efektif</p>

                            <a href=""
                                class="block w-[95%] md:w-[50%] lg:w-[30%] xl:w-[35%] bg-main text-white px-6 py-3 text-center rounded-md font-semibold border border-main hover:bg-white hover:text-main transition-all duration-300">Login</a>
                        </div>
                        <!-- Content Left End -->

                        <!-- Content Right Start -->
                        <div class="order-1 md:order-2 lg:w-[80%]">
                            <img src="img/hero.png" class="w-full object-cover" alt="">
                        </div>
                        <!-- Content Right End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- CTA Section Start -->
        <section id="cta" class="pt-14 pb-16">
            <div class="w-full px-4">
                <div class="container mx-auto">
                    <!-- Header Section Start -->
                    <div class="w-full mb-8 md:mb-16">
                        <h2 class="text-2xl font-semibold text-black">Kenapa Harus Memilih <span
                                class="text-main">Website</span> Ini?</h2>
                    </div>
                    <!-- Header Section End -->

                    <!-- Content Section Start -->
                    <div class="grid md:grid-cols-2 gap-8 md:gap-8 lg:gap-12">
                        <!-- Content 1 Start -->
                        <div
                            class="bg-white px-6 py-8 md:px-8 md:py-12 lg:px-10 rounded-2xl shadow-md hover:shadow-xl group hover:scale-110 transition-all duration-300 mb-2 md:mb-0">
                            <div class="flex flex-col gap-4 lg:gap-6">
                                <div
                                    class="px-3 py-3 md:px-4 md:py-4 w-14 h-14 md:w-16 md:h-16 rounded-full bg-gradient-to-b from-linear1 to-linear2 shadow-2xl">
                                    <img src="img/Icons/icons1.png" class="w-full h-full" alt="">
                                </div>

                                <!-- Title Start -->
                                <div class="">
                                    <h4 class="font-semibold text-black mb-4">Rekap Absensi Yang Baik</h4>

                                    <div class="w-[60px] bg-main rounded-full h-1 mb-4"></div>

                                    <p class="font-medium text-sm lg:text-[1rem]">Mencatat otomatis riwayat absensi
                                        siswa, guru dan TU. Dapat melihat jumlah kehadiran, terlamabat Dll</p>
                                </div>
                                <!-- Title End -->
                            </div>
                        </div>
                        <!-- Content 1 End -->

                        <!-- Content 2 Start -->
                        <div
                            class="bg-white px-6 py-8 md:px-8 md:py-12 lg:px-10 rounded-2xl shadow-md hover:shadow-xl group hover:scale-110 transition-all duration-300 mb-2 md:mb-0">
                            <div class="flex flex-col gap-4 lg:gap-6">
                                <div
                                    class="px-3 py-3 md:px-4 md:py-4 w-14 h-14 md:w-16 md:h-16 rounded-full bg-gradient-to-b from-linear1 to-linear2 shadow-2xl">
                                    <img src="img/Icons/icons2.png" class="w-full h-full" alt="">
                                </div>

                                <!-- Title Start -->
                                <div class="">
                                    <h4 class="font-semibold text-black mb-4">Meminimalisir Kecurangan</h4>

                                    <div class="w-[60px] bg-main rounded-full h-1 mb-4"></div>

                                    <p class="font-medium text-sm lg:text-[1rem]">Semua data absensi siswa, guru dan TU
                                        akan tersimpan sehingga meminimalisir kecurangan dan memanipulasi data</p>
                                </div>
                                <!-- Title End -->
                            </div>
                        </div>
                        <!-- Content 2 End -->

                        <!-- Content 3 Start -->
                        <div
                            class="bg-white px-6 py-8 md:px-8 md:py-12 lg:px-10 rounded-2xl shadow-md hover:shadow-xl group hover:scale-110 transition-all duration-300 mb-2 md:mb-0">
                            <div class="flex flex-col gap-4 lg:gap-6">
                                <div
                                    class="px-3 py-3 md:px-4 md:py-4 w-14 h-14 md:w-16 md:h-16 rounded-full bg-gradient-to-b from-linear1 to-linear2 shadow-2xl">
                                    <img src="img/Icons/icons3.png" class="w-full h-full" alt="">
                                </div>

                                <!-- Title Start -->
                                <div class="">
                                    <h4 class="font-semibold text-black mb-4">Lebih Praktis</h4>

                                    <div class="w-[60px] bg-main rounded-full h-1 mb-4"></div>

                                    <p class="font-medium text-sm lg:text-[1rem]">Dengan presensi tidak perlu antri lagi
                                        untuk absen, karyawan dapat melakukan absensi melalui Smartphone masing-masing.
                                    </p>
                                </div>
                                <!-- Title End -->
                            </div>
                        </div>
                        <!-- Content 3 End -->

                        <!-- Content 4 Start -->
                        <div
                            class="bg-white px-6 py-8 md:px-8 md:py-12 lg:px-10 rounded-2xl shadow-md hover:shadow-xl group hover:scale-110 transition-all duration-300 mb-2 md:mb-0">
                            <div class="flex flex-col gap-4 lg:gap-6">
                                <div
                                    class="px-3 py-3 md:px-4 md:py-4 w-14 h-14 md:w-16 md:h-16 rounded-full bg-gradient-to-b from-linear1 to-linear2 shadow-2xl">
                                    <img src="img/Icons/icons4.png" class="w-full h-full" alt="">
                                </div>

                                <!-- Title Start -->
                                <div class="">
                                    <h4 class="font-semibold text-black mb-4">Aksesibilitas</h4>

                                    <div class="w-[60px] bg-main rounded-full h-1 mb-4"></div>

                                    <p class="font-medium text-sm lg:text-[1rem]">Guru, staf, dan siswa dapat mengakses
                                        data absensi dari mana saja dan kapan saja selama terhubung ke internet.</p>
                                </div>
                                <!-- Title End -->
                            </div>
                        </div>
                        <!-- Content 4 End -->
                    </div>
                    <!-- Content Section End -->
                </div>
            </div>
        </section>
        <!-- CTA Section End -->

        <!-- Category Section Start -->
        <section id="category" class="pt-16 pb-20 md:pb-32">
            <div class="w-full px-4">
                <div class="container mx-auto">
                    <!-- Header Section Start -->
                    <div class="w-full mb-8 md:mb-16 flex justify-center md:justify-end">
                        <h2 class="text-2xl font-semibold text-black">Konsentrasi Keahlian</h2>
                    </div>
                    <!-- Header Section End -->

                    <!-- Content Section Start -->
                    <div class="grid md:grid-cols-2 gap-8 md:gap-6 lg:gap-10 xl:gap-12">
                        <!-- Card 1 Start -->
                        <div
                            class="px-6 py-6 lg:px-8 lg:pt-8 lg:pb-10 rounded-md shadow-lg group hover:bg-bgRPL transition-all duration-300 cursor-pointer">
                            <div class="bg-bgRPL px-8 py-3 rounded mb-7 group-hover:bg-white">
                                <h1 class="text-white font-semibold text-sm lg:text-lg group-hover:text-bgRPL">Rekayasa
                                    Perangkat Lunak</h1>
                            </div>

                            <div class="">
                                <p class="font-medium text-black text-sm group-hover:text-white mb-8">Rekayasa Perangkat
                                    Lunak adalah sebuah konsentrasi keahlian yang mempelajari bahasa pemrograman untuk
                                    membuat suatu aplikasi berbasis web-site/web-app serta aplikasi mobile dan game.
                                </p>

                                <p class="font-medium text-sm text-black group-hover:text-white mb-6 md:mb-8">Prospek
                                    Kerja Rekayasa Perangkat Lunak</p>

                                <div class="space-y-4 md:space-y-4">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgRPL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgRPL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            WEB Developer</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgRPL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgRPL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Mobile Developer</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgRPL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgRPL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Game Developer</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgRPL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgRPL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            UI/UX Designer</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgRPL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgRPL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            System Analyst</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 1 End -->

                        <!-- Card 2 Start -->
                        <div
                            class="px-6 py-6 lg:px-8 lg:pt-8 lg:pb-10 rounded-md shadow-lg group hover:bg-bgAKL transition-all duration-300 cursor-pointer">
                            <div class="bg-bgAKL px-8 py-3 rounded mb-7 group-hover:bg-white">
                                <h1 class="text-white font-semibold text-sm lg:text-lg group-hover:text-bgAKL">
                                    Akuntansi</h1>
                            </div>

                            <div class="">
                                <p class="font-medium text-black text-sm group-hover:text-white mb-8">Akuntansi adalah
                                    konsentrasi keahlian yang mempelajari teknik dalam mengukur dan mengelola sebuah
                                    transaksi dengan melakukan pengidentifikasian, pencatatan, penggolongan dan
                                    peringkasan yang disajikan pada laporan keuangan
                                </p>

                                <p class="font-medium text-sm text-black group-hover:text-white mb-6">Prospek Kerja
                                    Akuntansi</p>

                                <div class="space-y-4 md:space-y-4">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgAKL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgAKL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Sistem Informasi Akuntansi</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgAKL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgAKL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Akuntansi Bisnis</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgAKL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgAKL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Akuntansi Keuangan</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgAKL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgAKL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Konsultan Pajak</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgAKL group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgAKL">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Akuntan Publik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 End -->

                        <!-- Card 3 Start -->
                        <div
                            class="px-6 py-6 lg:px-8 lg:pt-8 lg:pb-10 rounded-md shadow-lg group hover:bg-bgMP transition-all duration-300 cursor-pointer">
                            <div class="bg-bgMP px-8 py-3 rounded mb-7 group-hover:bg-white">
                                <h1 class="text-white font-semibold text-sm lg:text-lg group-hover:text-bgMP">Manajemen
                                    Perkantoran</h1>
                            </div>

                            <div class="">
                                <p class="font-medium text-black text-sm group-hover:text-white mb-8">Jurusan Manajemen
                                    Perkantoran merupakan program studi yang memberikan pemahaman dan keterampilan dalam
                                    mengelola serta menyelenggarakan berbagai aspek administratif dan operasional di
                                    lingkungan perkantoran.
                                </p>

                                <p class="font-medium text-sm text-black group-hover:text-white mb-6">Prospek Kerja
                                    Manajemen Perkantoran</p>

                                <div class="space-y-4 md:space-y-4">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgMP group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgMP">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Staff Adminstrasi</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgMP group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgMP">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Sekretaris</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgMP group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgMP">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Asisten Manager</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgMP group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgMP">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Resepsionis</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgMP group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgMP">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Public Relation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 End -->

                        <!-- Card 4 Start -->
                        <div
                            class="px-6 py-6 lg:px-8 lg:pt-8 lg:pb-10 rounded-md shadow-lg group hover:bg-bgBR transition-all duration-300 cursor-pointer">
                            <div class="bg-bgBR px-8 py-3 rounded mb-7 group-hover:bg-white">
                                <h1 class="text-white font-semibold text-sm lg:text-lg group-hover:text-bgBR">Bisnis
                                    Retail</h1>
                            </div>

                            <div class="">
                                <p class="font-medium text-black text-sm group-hover:text-white mb-8">Bisnis Retail
                                    adalah konsentrasi keahlian yang mempelajari dan mempersiapkan untuk dapat terjun ke
                                    binsis retail secara keseluruhan. Seperti customer service, pengelolaan bisnis
                                    retail, visual merchandising dan produk kreatif kewirausahaan.
                                </p>

                                <p class="font-medium text-sm text-black group-hover:text-white mb-6">Prospek Kerja
                                    Bisnis Retail</p>

                                <div class="space-y-4 md:space-y-4">
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgBR group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgBR">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Chief Marketing Officer</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgBR group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgBR">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Digital Marketing</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgBR group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgBR">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Konsultan Retail</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgBR group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgBR">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Public Relation</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-6 h-6 md:w-7 md:h-7 p-1 flex justify-center items-center rounded-lg bg-bgBR group-hover:bg-white">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-white fill-current group-hover:fill-bgBR">
                                                <path
                                                    d="M16.5784 0.709403C16.2991 0.430199 15.8411 0.430199 15.5618 0.709403L7.10575 9.1295L2.75091 4.76246C2.47161 4.48224 2.01672 4.48224 1.73536 4.76246L0.209476 6.28121C-0.0698253 6.55837 -0.0698253 7.01451 0.209476 7.29371L6.59336 13.6939C6.87266 13.9711 7.32755 13.9711 7.60993 13.6939L18.1032 3.24167C18.3866 2.96247 18.3866 2.50531 18.1032 2.22508L16.5784 0.709403Z" />
                                            </svg>

                                        </div>
                                        <p
                                            class="text-black group-hover:text-white font-medium text-sm md:text-[1rem]">
                                            Kasir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 End -->
                    </div>
                    <!-- Content Section End -->
                </div>
            </div>
        </section>
        <!-- Category Section End -->

        <!-- Maps Section Start -->
        <section id="maps" class="pt-12 pb-20 md:pb-14 bg-bgRPL">
            <div class="w-full px-4">
                <div class="container mx-auto">
                    <div class="w-full h-44 md:h-96 lg:h-[450px] mb-6">
                        <iframe class="w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.65798917037!2d106.8204!3d-6.17565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d525ce8be1%3A0xce3ad79b85371985!2sSMK%20Jakarta%20Pusat%201!5e0!3m2!1sid!2sid!4v1729134765366!5m2!1sid!2sid"
                            height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="grid md:grid-cols-2 md:justify-between gap-6 md:gap-20 lg:gap-36">
                        <div class="flex gap-2">
                            <img src="img/Icons/location.png" class="w-8 h-8" alt="">
                            <p class="text-white text-sm font-medium">Jl. Abdul Muis No.44 1, RT.1/RW.8, Petojo Sel.,
                                Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</p>
                        </div>

                        <div class="flex gap-2">
                            <img src="img/Icons/telp.png" class="w-7 h-7" alt="">
                            <p class="text-white font-medium">+6285213819519</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Maps Section End -->

        <!-- Footer Section Start -->
        <footer id="footer" class="pt-16 pb-20">
            <div class="w-full px-4">
                <div class="container mx-auto">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 lg:gap-8">
                        <div class="flex flex-col">
                            <h2 class="font-semibold text-black text-[1rem] md:text-lg mb-6">SMK Jakarta Pusat 1</h2>

                            <p class="text-slate-500 font-medium text-sm text-justify">SMK Jakarta Pusat 1 merupakan
                                sekolah yang terletak di jantung Kota Jakarta adalah salah satu sekolah SMK Pusat
                                Keunggulan tahun 2022 dan 2023 serta Sekolah Adiwiyata. Sekolah ini memiliki keunggulan
                                sebagai sekolah yang berada di lingkungan industri kreatif, jasa dan manufaktur
                                di pusat ibukota</p>
                        </div>

                        <div class="flex flex-col">
                            <h2 class="font-semibold text-black text-[1rem] md:text-lg mb-6 tracking-wider">KOMPETENSI
                                KEAHLIAN</h2>

                            <div class="space-y-4">
                                <p class="text-slate-500 font-medium text-sm max-w-32">Rekayasa
                                    Perangkat Lunak</p>
                                <p class="text-slate-500 font-medium text-sm max-w-40">Akuntansi dan
                                    Keuangan Lembaga</p>
                                <p class="text-slate-500 font-medium text-sm max-w-32">Manajemen Perkantoran</p>
                                <p class="text-slate-500 font-medium text-sm">Bisnis Retail</p>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <h2 class="font-semibold text-black text-[1rem] md:text-lg mb-6">SMK Jakarta Pusat 1</h2>

                            <div class="space-y-3">
                                <p class="text-slate-500 font-medium text-sm"><a href="">Instagram</a></p>
                                <p class="text-slate-500 font-medium text-sm"><a href="">Tiktok</a></p>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <h2 class="font-semibold text-black text-[1rem] md:text-lg mb-6">CONTACT</h2>

                            <div class="space-y-3">
                                <p class="text-slate-500 font-medium text-sm text-justify">Jl. Abdul Muis No.44 1,
                                    RT.1/RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota
                                    Jakarta 10160</p>
                                <p class="text-slate-500 font-medium text-sm text-justify">+6285213819519</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
        <div class="w-full py-4 bg-slate-300 px-6 lg:px-4 flex justify-center">
            <h2 class="font-semibold text-slate-800 text-sm md:text-lg lg:text-xl">&copy; 2024 Team TBL & TEFA SMK
                Jakarta Pusat 1 All Rights Reserved</h2>
        </div>
    </main>
    <!-- Main Content End -->


</body>

</html>

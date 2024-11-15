<nav class="w-[16.5rem] min-h-screen bg-white shadow-lg rounded-md fixed top-0 left-0">
    <div class="pt-4 pb-3 px-6 border-b-2 border-slate-500">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10">
                <img src="/img/logo.png" alt="" class="w-full h-full object-cover">
            </div>

            <h1 class="text-main font-semibold text-sm leading-4 max-w-xs"><span class="max-w-md block">Admin</span>
                SMK Jakarta Pusat 1</h1>
        </div>
    </div>

    {{-- Nav Menu Section Start --}}
    <div class="pt-4 px-4">
        <ul>
            <!-- Data Tata Usaha, Guru, Dan Siswa Start -->
            <a href="/allGTK"
                class="{{ request()->is('allGTK') ? 'bg-main text-white fill-white' : 'text-black' }} px-8 py-3 flex items-center justify-between rounded-lg text-slate-600 text-sm hover:bg-main hover:text-white cursor-pointer mb-2">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6">
                        <svg viewBox="0 0 15 15" class="w-full h-full fill-current group-hover:fill-white"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_327_2583)">
                                <g clip-path="url(#clip1_327_2583)">
                                    <g clip-path="url(#clip2_327_2583)">
                                        <path
                                            d="M7.5 7.5C8.24168 7.5 8.9667 7.28007 9.58339 6.86801C10.2001 6.45596 10.6807 5.87029 10.9645 5.18506C11.2484 4.49984 11.3226 3.74584 11.1779 3.01841C11.0333 2.29098 10.6761 1.6228 10.1517 1.09835C9.6272 0.573904 8.95902 0.216751 8.23159 0.0720569C7.50416 -0.0726377 6.75016 0.00162482 6.06494 0.285453C5.37971 0.569282 4.79404 1.04993 4.38199 1.66661C3.96993 2.2833 3.75 3.00832 3.75 3.75C3.75099 4.74426 4.1464 5.69751 4.84945 6.40056C5.55249 7.1036 6.50574 7.49901 7.5 7.5ZM7.5 1.25C7.99445 1.25 8.4778 1.39662 8.88893 1.67133C9.30005 1.94603 9.62048 2.33648 9.8097 2.79329C9.99892 3.25011 10.0484 3.75277 9.95196 4.23773C9.8555 4.72268 9.6174 5.16814 9.26777 5.51777C8.91814 5.8674 8.47268 6.1055 7.98773 6.20197C7.50277 6.29843 7.00011 6.24892 6.54329 6.0597C6.08648 5.87048 5.69603 5.55005 5.42133 5.13893C5.14662 4.7278 5 4.24445 5 3.75C5 3.08696 5.26339 2.45108 5.73223 1.98223C6.20107 1.51339 6.83696 1.25 7.5 1.25Z" />
                                        <path
                                            d="M7.5 8.75C6.00867 8.75165 4.57889 9.34482 3.52435 10.3994C2.46982 11.4539 1.87665 12.8837 1.875 14.375C1.875 14.5408 1.94085 14.6997 2.05806 14.8169C2.17527 14.9342 2.33424 15 2.5 15C2.66576 15 2.82473 14.9342 2.94194 14.8169C3.05915 14.6997 3.125 14.5408 3.125 14.375C3.125 13.2147 3.58594 12.1019 4.40641 11.2814C5.22688 10.4609 6.33968 10 7.5 10C8.66032 10 9.77312 10.4609 10.5936 11.2814C11.4141 12.1019 11.875 13.2147 11.875 14.375C11.875 14.5408 11.9408 14.6997 12.0581 14.8169C12.1753 14.9342 12.3342 15 12.5 15C12.6658 15 12.8247 14.9342 12.9419 14.8169C13.0592 14.6997 13.125 14.5408 13.125 14.375C13.1233 12.8837 12.5302 11.4539 11.4756 10.3994C10.4211 9.34482 8.99133 8.75165 7.5 8.75Z" />
                                    </g>
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_327_2583">
                                    <rect width="15" height="15" transform="matrix(1 0 0 -1 0 15)" />
                                </clipPath>
                                <clipPath id="clip1_327_2583">
                                    <rect width="15" height="15" transform="matrix(1 0 0 -1 0 15)" />
                                </clipPath>
                                <clipPath id="clip2_327_2583">
                                    <rect width="15" height="15" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <span class=" font-semibold">Data GTK</span>
                </div>
            </a>

            <a href="/master/jurusan"
                class="{{ request()->is('master/jurusan') ? 'bg-main text-white fill-white' : 'text-black' }} px-8 py-3 flex items-center justify-between rounded-lg text-slate-600 text-sm hover:bg-main hover:text-white cursor-pointer mb-2 group">
                <div class="flex items-center gap-2">
                    <div class="w-7 h-7">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-full h-full fill-current group-hover:fill-white" viewBox="0 0 64 64"
                            id="teacher">
                            <path
                                d="M12.25 45a8.5 8.5 0 1 1 8.5-8.5 8.51 8.51 0 0 1-8.5 8.5Zm0-14a5.5 5.5 0 1 0 5.5 5.5 5.51 5.51 0 0 0-5.5-5.5Z">
                            </path>
                            <path
                                d="M19.75 57h-15a1.5 1.5 0 0 1-1.5-1.5v-7a6.51 6.51 0 0 1 6.5-6.5h5a6.51 6.51 0 0 1 6.5 6.5v7a1.5 1.5 0 0 1-1.5 1.5Zm-13.5-3h12v-5.5a3.5 3.5 0 0 0-3.5-3.5h-5a3.5 3.5 0 0 0-3.5 3.5Z">
                            </path>
                            <path
                                d="M20.25 51a1.5 1.5 0 0 1-1.13-2.49l14-16a1.5 1.5 0 1 1 2.26 2l-14 16a1.49 1.49 0 0 1-1.13.49zm39-41h-49a1.5 1.5 0 0 1 0-3h49a1.5 1.5 0 0 1 0 3zm0 31h-21a1.5 1.5 0 0 1 0-3h21a1.5 1.5 0 0 1 0 3z">
                            </path>
                            <path
                                d="M55.25 41a1.5 1.5 0 0 1-1.5-1.5v-31a1.5 1.5 0 0 1 3 0v31a1.5 1.5 0 0 1-1.5 1.5zm-41-17a1.5 1.5 0 0 1-1.5-1.5v-14a1.5 1.5 0 0 1 3 0v14a1.5 1.5 0 0 1-1.5 1.5zm22-5h-11a1.5 1.5 0 0 1 0-3h11a1.5 1.5 0 0 1 0 3zm7 8h-18a1.5 1.5 0 0 1 0-3h18a1.5 1.5 0 0 1 0 3z">
                            </path>
                        </svg>
                    </div>

                    <span class=" font-semibold">Data Jurusan</span>
                </div>
            </a>

            <a href="/master/mapel"
                class="{{ request()->is('master/mapel') ? 'bg-main text-white fill-white' : 'text-black' }} px-8 py-3 flex items-center justify-between rounded-lg text-slate-600 text-sm hover:bg-main hover:text-white cursor-pointer mb-2">
                <div class="flex items-center gap-2 group">
                    <div class="w-6 h-6">

                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="w-full h-full fill-current group-hover:fill-white" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16.56C8.775 16.56 8.55 16.5075 8.3625 16.4025C6.96 15.6375 4.4925 14.8275 2.9475 14.625L2.73 14.595C1.7475 14.475 0.9375 13.5525 0.9375 12.555V3.49501C0.9375 2.90251 1.17 2.36251 1.5975 1.97251C2.025 1.58251 2.58 1.39501 3.165 1.44751C4.815 1.57501 7.305 2.40001 8.715 3.28501L8.895 3.39001C8.9475 3.42001 9.06 3.42001 9.105 3.39751L9.225 3.32251C10.635 2.43751 13.125 1.59751 14.7825 1.45501C14.7975 1.45501 14.8575 1.45501 14.8725 1.45501C15.42 1.40251 15.9825 1.59751 16.4025 1.98751C16.83 2.37751 17.0625 2.91751 17.0625 3.51001V12.5625C17.0625 13.5675 16.2525 14.4825 15.2625 14.6025L15.015 14.6325C13.47 14.835 10.995 15.6525 9.6225 16.41C9.4425 16.515 9.225 16.56 9 16.56ZM2.985 2.56501C2.745 2.56501 2.5275 2.64751 2.355 2.80501C2.1675 2.97751 2.0625 3.22501 2.0625 3.49501V12.555C2.0625 12.9975 2.445 13.425 2.8725 13.485L3.0975 13.515C4.785 13.74 7.3725 14.5875 8.8725 15.405C8.94 15.435 9.0375 15.4425 9.075 15.4275C10.575 14.595 13.1775 13.74 14.8725 13.515L15.1275 13.485C15.555 13.4325 15.9375 12.9975 15.9375 12.555V3.50251C15.9375 3.22501 15.8325 2.98501 15.645 2.80501C15.45 2.63251 15.2025 2.55001 14.925 2.56501C14.91 2.56501 14.85 2.56501 14.835 2.56501C13.4025 2.69251 11.0925 3.46501 9.8325 4.25251L9.7125 4.33501C9.3 4.59001 8.715 4.59001 8.3175 4.34251L8.1375 4.23751C6.855 3.45001 4.545 2.68501 3.075 2.56501C3.045 2.56501 3.015 2.56501 2.985 2.56501Z"/>
                            <path d="M9 15.9301C8.6925 15.9301 8.4375 15.6751 8.4375 15.3676V4.11755C8.4375 3.81005 8.6925 3.55505 9 3.55505C9.3075 3.55505 9.5625 3.81005 9.5625 4.11755V15.3676C9.5625 15.6826 9.3075 15.9301 9 15.9301Z"/>
                            <path d="M5.8125 6.93005H4.125C3.8175 6.93005 3.5625 6.67505 3.5625 6.36755C3.5625 6.06005 3.8175 5.80505 4.125 5.80505H5.8125C6.12 5.80505 6.375 6.06005 6.375 6.36755C6.375 6.67505 6.12 6.93005 5.8125 6.93005Z"/>
                            <path d="M6.375 9.18005H4.125C3.8175 9.18005 3.5625 8.92505 3.5625 8.61755C3.5625 8.31005 3.8175 8.05505 4.125 8.05505H6.375C6.6825 8.05505 6.9375 8.31005 6.9375 8.61755C6.9375 8.92505 6.6825 9.18005 6.375 9.18005Z"/>
                            </svg>                            
                    </div>

                    <span class=" font-semibold">Data Mapel</span>
                </div>
            </a>

            <a href="/mapingKelas"
                class="{{ request()->is('mapingKelas') ? 'bg-main text-white fill-white' : 'text-black' }} px-8 py-3 flex items-center justify-between rounded-lg text-slate-600 text-sm hover:bg-main hover:text-white cursor-pointer mb-2">
                <div class="flex items-center gap-2 group">
                    <div class="w-6 h-6">
                        <?xml version="1.0" encoding="iso-8859-1"?>

                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="w-full h-full fill-current group-hover:fill-white" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.34082 13.1719C5.03032 13.1719 4.77832 12.9199 4.77832 12.6094V7.46436C4.77832 7.15386 5.03032 6.90186 5.34082 6.90186C5.65132 6.90186 5.90332 7.15386 5.90332 7.46436V12.6094C5.90332 12.9199 5.65132 13.1719 5.34082 13.1719Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.84106 13.1712C8.53056 13.1712 8.27856 12.9192 8.27856 12.6087V5.0014C8.27856 4.6909 8.53056 4.4389 8.84106 4.4389C9.15156 4.4389 9.40356 4.6909 9.40356 5.0014V12.6087C9.40356 12.9192 9.15156 13.1712 8.84106 13.1712Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2837 13.1711C11.9732 13.1711 11.7212 12.9191 11.7212 12.6086V10.1831C11.7212 9.87261 11.9732 9.62061 12.2837 9.62061C12.5942 9.62061 12.8462 9.87261 12.8462 10.1831V12.6086C12.8462 12.9191 12.5942 13.1711 12.2837 13.1711Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.298 1.875C3.219 1.875 1.875 3.29775 1.875 5.50125V12.1237C1.875 14.3272 3.219 15.75 5.298 15.75H12.327C14.4067 15.75 15.75 14.3272 15.75 12.1237V5.50125C15.75 3.29775 14.4067 1.875 12.327 1.875H5.298ZM12.327 16.875H5.298C2.57775 16.875 0.75 14.9655 0.75 12.1237V5.50125C0.75 2.6595 2.57775 0.75 5.298 0.75H12.327C15.0472 0.75 16.875 2.6595 16.875 5.50125V12.1237C16.875 14.9655 15.0472 16.875 12.327 16.875Z"/>
                            </svg>                            
                    </div>

                    <span class=" font-semibold">Data Maping Kelas</span>
                </div>
            </a>

            <a href="/rekap"
                class="{{ request()->is('rekap') ? 'bg-main text-white fill-white' : 'text-black' }} px-8 py-3 flex items-center justify-between rounded-lg text-slate-600 text-sm hover:bg-main hover:text-white cursor-pointer mb-2">
                <div class="flex items-center gap-2 group">
                    <div class="w-6 h-6">
                        <?xml version="1.0" encoding="iso-8859-1"?>

                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="w-full h-full fill-current group-hover:fill-white" viewBox="0 0 18 18"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.625 14.0625C2.3175 14.0625 2.0625 13.8075 2.0625 13.5V5.25C2.0625 1.9425 3.0675 0.9375 6.375 0.9375H11.625C14.9325 0.9375 15.9375 1.9425 15.9375 5.25V12.75C15.9375 12.87 15.9375 12.9825 15.93 13.1025C15.9075 13.41 15.63 13.65 15.33 13.6275C15.0225 13.605 14.7825 13.335 14.805 13.0275C14.8125 12.9375 14.8125 12.84 14.8125 12.75V5.25C14.8125 2.5725 14.31 2.0625 11.625 2.0625H6.375C3.69 2.0625 3.1875 2.5725 3.1875 5.25V13.5C3.1875 13.8075 2.9325 14.0625 2.625 14.0625Z"/>
                            <path d="M12.75 17.0625H5.25C3.495 17.0625 2.0625 15.63 2.0625 13.875V13.3875C2.0625 11.895 3.2775 10.6875 4.7625 10.6875H15.375C15.6825 10.6875 15.9375 10.9425 15.9375 11.25V13.875C15.9375 15.63 14.505 17.0625 12.75 17.0625ZM4.7625 11.8125C3.8925 11.8125 3.1875 12.5175 3.1875 13.3875V13.875C3.1875 15.015 4.11 15.9375 5.25 15.9375H12.75C13.89 15.9375 14.8125 15.015 14.8125 13.875V11.8125H4.7625Z"/>
                            <path d="M12 5.8125H6C5.6925 5.8125 5.4375 5.5575 5.4375 5.25C5.4375 4.9425 5.6925 4.6875 6 4.6875H12C12.3075 4.6875 12.5625 4.9425 12.5625 5.25C12.5625 5.5575 12.3075 5.8125 12 5.8125Z"/>
                            <path d="M9.75 8.4375H6C5.6925 8.4375 5.4375 8.1825 5.4375 7.875C5.4375 7.5675 5.6925 7.3125 6 7.3125H9.75C10.0575 7.3125 10.3125 7.5675 10.3125 7.875C10.3125 8.1825 10.0575 8.4375 9.75 8.4375Z"/>
                            </svg>
                            
                    </div>

                    <span class=" font-semibold">Rekap Absensi</span>
                </div>
            </a>
        </ul>
    </div>
    {{-- Nav Menu Section End --}}
</nav>


<script>
    // Function to toggle the dropdown menus
    function toggleDropdown(id) {
        var dropdown = document.getElementById(id);
        dropdown.classList.toggle('show');
    };
</script>

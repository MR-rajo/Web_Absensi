<div class="">
    <div class="py-4">
        <div class="flex items-center gap-4">
            <a href="/allGTK" class="{{ request()->is('allGTK') ? 'bg-main text-white font-semibold' : 'bg-main text-gray-600 font-normal' }} px-6 py-2 rounded-md">All</a>
            <a href="/admin" class="{{ request()->is('admin') ? 'bg-main text-white font-semibold' : 'bg-main text-gray-600 font-normal' }} px-6 py-2 rounded-md">Tata Usaha</a>
            <a href="/guru" class="{{ request()->is('guru') ? 'bg-main text-white font-semibold' : 'bg-main text-gray-600 font-normal' }} px-6 py-2 rounded-md">Guru</a>
        </div>
    </div>
</div>
<?php

use Illuminate\Support\Facades\Route;

// Landing Page Start
Route::get('/', function () {
    return view('home');
});
// Landing Page End


// Rekap Absensi Start
Route::get('/rekap', function () {
    return view('rekap');
});
// Rekap Absensi End



// Route Menu Sidebar Start

Route::get('/allGTK', function () {
    return view('allGTK', ['title' => 'Data Tata Usaha']);
});

Route::get('/admin', function () {
    return view('admin', ['title' => 'Data Tata Usaha']);
});

Route::get('/guru', function () {
    return view('guru', ['title' => 'Data Guru']);
});

Route::get('/siswa', function () {
    return view('siswa', ['title' => 'Data Siswa']);
});

Route::get('/mapingKelas', function () {
    return view('mapingKelas', ['title' => 'Master Data Mapping Kelas']);
});

// Route Menu Sidebar End



// Insert Start

Route::get('/insert/insertTU', function () {
    return view('insert/insertTU', ['title' => 'Create New Data TU']);
});

Route::get('/insert/insertGuru', function () {
    return view('insert/insertGuru', ['title' => 'Create New Data Guru']);
});

Route::get('/insert/insertSiswa', function () {
    return view('insert/insertSiswa', ['title' => 'Create New Data Siswa']);
});

// Insert End



// Import Menu Start
Route::get('import/importTU', function () {
    return view('import/importTU');
});

Route::get('import/importGuru', function () {
    return view('import/importGuru');
});

Route::get('import/importSiswa', function () {
    return view('import/importSiswa');
});

Route::get('import/jurusan', function () {
    return view('import/jurusan');
});

Route::get('import/mapel', function () {
    return view('import/mapel');
});

Route::get('import/maping', function () {
    return view('import/maping');
});
// Import Menu End



// Edit Start
Route::get('edit/editTU', function () {
    return view('edit/editTU');
});

Route::get('edit/editGuru', function () {
    return view('edit/editGuru');
});

Route::get('edit/editSiswa', function () {
    return view('edit/editSiswa');
});
// Edit End



// Master Data Start
Route::get('master/mapel', function () {
    return view('master/mapel', ['title' => 'Master Mata Pelajaran']);
});

Route::get('master/jurusan', function () {
    return view('master/jurusan');
});
// Master Data End



// User Start
Route::get('user/siswa', function () {
    return view('user/siswa');
});

Route::get('user/guru', function () {
    return view('user/guru');
});

Route::get('user/absenSiswa', function () {
    return view('user/absenSiswa');
});

Route::get('user/absenGuru', function () {
    return view('user/absenGuru');
});
// User End


// Login Start
Route::get('login/index', function () {
    return view('login/index');
});
// Login End
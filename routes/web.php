<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Utama / Home
Route::get('/', function () {
    return view('home');
});

// Halaman Tentang Saya / About
Route::get('/about', function () {
    return view('about', [
        'nama' => 'Andi Arjuna Putra',
        'jurusan' => 'Teknik Informatika',
        'institusi' => 'Fakultas Ilmu Komputer',
        'email' => 'andiarjuna0701@gmail.com',
        'bio' => 'Mahasiswa Teknik Informatika yang tertarik pada pengembangan web, framework Laravel, dan teknologi software engineering.'
    ]);
});

// Halaman Blog / Kumpulan Artikel
Route::get('/blog', function () {
    $posts = [
        [
            'judul' => 'Pengenalan Dasar Framework Laravel',
            'penulis' => 'Andi Arjuna Putra',
            'tanggal' => '16 Oktober 2024',
            'ringkasan' => 'Laravel adalah framework PHP berbasis MVC yang dirancang untuk mempermudah developer membangun aplikasi web dengan cepat dan aman.'
        ],
        [
            'judul' => 'Memahami Konsep Routing dan Controller',
            'penulis' => 'Andi Arjuna Putra',
            'tanggal' => '18 Oktober 2024',
            'ringkasan' => 'Routing mengatur bagaimana request pengguna diarahkan ke Controller atau langsung ke Blade View yang sesuai.'
        ],
        [
            'judul' => 'Pengelolaan Asset Statis (CSS, JS, Gambar)',
            'penulis' => 'Andi Arjuna Putra',
            'tanggal' => '20 Oktober 2024',
            'ringkasan' => 'File CSS, JavaScript, dan media disimpan dalam folder public agar dapat diakses langsung oleh browser melalui URL publik.'
        ]
    ];

    return view('blog', [
        'posts' => $posts
    ]);
});

// Halaman Kontak / Contact
Route::get('/contact', function () {
    return view('contact', [
        'email' => 'andiarjuna0701@gmail.com',
        'whatsapp' => '+62 812-3456-7890',
        'instagram' => '@andiarjuna_',
        'github' => 'https://github.com/Junnzxy',
        'linkedin' => 'https://linkedin.com/in/andiarjuna'
    ]);
});

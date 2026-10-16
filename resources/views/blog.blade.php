<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Kumpulan Artikel Web</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/blog" class="active">Blog</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <h1>Daftar Artikel Blog</h1>
        <p>Kumpulan catatan dan wawasan seputar teknologi web dan pengembangan aplikasi menggunakan Laravel.</p>

        @forelse ($posts as $post)
            <article>
                <h2>{{ $post['judul'] }}</h2>
                <div class="meta">
                    Ditulis oleh: <strong>{{ $post['penulis'] }}</strong> | {{ $post['tanggal'] }}
                </div>
                <p>{{ $post['ringkasan'] }}</p>
            </article>
        @empty
            <article>
                <h2>Pengenalan Framework Laravel</h2>
                <div class="meta">Ditulis oleh: Penulis Blog | 16 Oktober 2024</div>
                <p>Laravel adalah salah satu framework PHP paling populer dengan ekosistem yang luas dan sintaks yang bersih.</p>
            </article>
            <article>
                <h2>Memahami Arsitektur MVC</h2>
                <div class="meta">Ditulis oleh: Penulis Blog | 18 Oktober 2024</div>
                <p>Model-View-Controller memisahkan logika bisnis, tampilan antarmuka, dan alur kontrol aplikasi.</p>
            </article>
            <article>
                <h2>Manajemen Asset Statis di Laravel</h2>
                <div class="meta">Ditulis oleh: Penulis Blog | 20 Oktober 2024</div>
                <p>Menyimpan file CSS, JS, dan gambar di folder public memudahkan pengelolaan asset aplikasi.</p>
            </article>
        @endforelse
    </div>

    <footer>
        <p>&copy; 2024 Praktikum Pemrograman Web - All Rights Reserved</p>
    </footer>

    <script src="/js/blog.js"></script>
</body>
</html>

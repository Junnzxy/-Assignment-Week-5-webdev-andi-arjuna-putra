<!doctype html>
<html>
  <head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Profil Mahasiswa</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about" class="active">About</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <h1>Tentang Saya (About Us)</h1>
        <p>Halaman ini menampilkan profil dan data diri yang dikirim langsung melalui Route di Laravel ke Blade View.</p>

        <div class="profile-card">
            <img src="/img/profile.png" alt="Foto Profil {{ $nama }}" width="180">
            <div class="profile-info">
                <h3>Biodata Mahasiswa</h3>
                <table>
                    <tr>
                        <td class="label">Nama Lengkap</td>
                        <td>: <strong>{{ $nama }}</strong></td>
                    </tr>
                    <tr>
                        <td class="label">Jurusan</td>
                        <td>: {{ $jurusan }}</td>
                    </tr>
                    <tr> bn
                        <td class="label">Institusi</td>
                        <td>: {{ $institusi }}</td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td>: {{ $email }}</td>
                    </tr>
                    <tr>
                        <td class="label">Bio</td>
                        <td>: {{ $bio }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Praktikum  mrograman Web - All Rights Reserved</p>
    </footer>

    <script src="/js/about.js"></script>
</body>
</html>

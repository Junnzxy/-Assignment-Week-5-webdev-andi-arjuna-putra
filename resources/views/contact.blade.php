<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | Hubungi Kami</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/blog">Blog</a>
        <a href="/contact" class="active">Contact</a>
    </nav>

    <div class="container">
        <h1>Hubungi Kami (Contact Us)</h1>
        <p>Jika ada pertanyaan, diskusi, atau keperluan seputar materi perkuliahan dan kolaborasi proyek, silakan hubungi saluran berikut:</p>

        <ul class="contact-list">
            <li>
                <strong>Email Resmi</strong>
                <span>: <a href="mailto:{{ $email ?? 'andiarjuna0701@gmail.com' }}">{{ $email ?? 'andiarjuna0701@gmail.com' }}</a></span>
            </li>
            <li>
                <strong>WhatsApp</strong>
                <span>: <a href="https://wa.me/6289580511294" target="_blank">{{ $whatsapp ?? '+62 895-8051-1294' }}</a></span>
            </li>
            <li>
                <strong>Instagram</strong>
                <span>: <a href="https://instagram.com/rjnaptra_" target="_blank">{{ $instagram ?? '@rjnaptra_' }}</a></span>
            </li>
            <li>
                <strong>GitHub</strong>
                <span>: <a href="{{ $github ?? 'https://github.com/Junnzxy' }}" target="_blank">{{ $github ?? 'https://github.com/Junnzxy' }}</a></span>
            </li>
            <li>
                <strong>LinkedIn</strong>
                <span>: <a href="{{ $linkedin ?? 'https://linkedin.com/in/andiarjuna' }}" target="_blank">{{ $linkedin ?? 'linkedin.com/in/andiarjuna' }}</a></span>
            </li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 Praktikum Pemrograman Web - All Rights Reserved</p>
    </footer>

    <script src="/js/contact.js"></script>
</body>
</html>

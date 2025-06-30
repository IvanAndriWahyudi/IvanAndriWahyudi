<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Tur Virtual Masjid</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Menghilangkan margin dan padding default */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            background-color: #000;
        }

        /* Kontainer utama yang memegang semua elemen */
        .hero-container {
            height: 100vh;
            width: 100vw;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        /* Kontainer untuk slideshow latar belakang */
        .background-slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0; /* Berada di lapisan paling belakang */
        }
        
        /* Styling untuk setiap slide di latar belakang */
        .background-slideshow .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            /* Animasi untuk fade dan zoom (ken burns) selama 16 detik */
            animation: kenburns-fade 16s infinite ease-in-out;
        }
        
        /* Memberi delay pada slide kedua agar muncul setelah slide pertama */
        .background-slideshow .slide:nth-child(2) {
            animation-delay: 8s; /* Setengah dari durasi animasi utama */
        }

        /* Animasi Keyframes untuk efek fade dan zoom */
        @keyframes kenburns-fade {
            0% {
                opacity: 0;
                transform: scale(1.05);
            }
            12.5% { /* Fade in selama 2 detik */
                opacity: 1;
            }
            87.5% { /* Tetap terlihat dan zoom out perlahan selama 12 detik */
                opacity: 1;
                transform: scale(1);
            }
            100% { /* Fade out selama 2 detik */
                opacity: 0;
                transform: scale(1);
            }
        }

        /* Lapisan gelap di atas gambar untuk membuat teks lebih mudah dibaca */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1; /* Di atas slideshow, di bawah konten */
        }

        /* Konten yang berada di atas lapisan overlay */
        .hero-content {
            position: relative;
            z-index: 2; /* Di lapisan paling depan */
            padding: 20px;
            max-width: 800px;
        }

        /* Styling untuk judul utama */
        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Styling untuk deskripsi */
        .hero-content p {
            font-size: 1.2rem;
            font-weight: 400;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Styling untuk tombol ajakan (Call to Action) */
        .cta-button {
            display: inline-block;
            padding: 15px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            background-color: #28a745; /* Warna hijau yang terinspirasi dari masjid */
            border: none;
            border-radius: 50px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #218838; /* Warna hijau lebih gelap saat di-hover */
            transform: scale(1.05);
            cursor: pointer;
        }
        
        /* Penyesuaian untuk layar kecil (ponsel) */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .cta-button {
                padding: 12px 28px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="hero-container">
        <div class="background-slideshow">
            <!-- Menggunakan gambar Anda dari folder 'images' -->
            <div class="slide" style="background-image: url('images/1.jpeg');"></div>
            <div class="slide" style="background-image: url('images/2.jpeg');"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <!-- GANTI TULISAN DI BAWAH INI -->
            <h1>Selamat Datang di Masjid <br> Al-Ihsan</h1>
            <p>Jelajahi keindahan dan arsitektur masjid kami secara virtual dari mana saja di seluruh dunia.</p>
            
            <!-- Ganti 'tour.html' dengan nama file halaman tur virtual Anda -->
            <a href="tour.html" class="cta-button">Mulai Tur Virtual</a>
        </div>
    </div>

</body>
</html>

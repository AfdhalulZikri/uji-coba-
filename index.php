<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" href="assets/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - Beranda</title>
</head>

<body>

    <?php include "navbar.php"; ?>

    <h1 class="judul-utama">PT M.B.G</h1>
    <img src="https://tse1.mm.bing.net/th/id/OIP._aN9u7Uy87z5B7iVYdokkAAAAA?pid=Api&h=220&P=0" alt="">
  
    <hr>

    <div class="container">
        <div class="box">
            
    <h2>Visi</h2>
    <p>
        Menjadi perusahaan teknologi terdepan dalam inovasi dan layanan digital.
    </p>
        </div>
        <div class="box">
        <h2>Misi</h2>
    <p>
        Memberikan solusi teknologi yang efektif, efisien, dan berkualitas tinggi.
    </p>

        </div>
        <div class="box">
        <h2>Layanan Perusahaan</h2>
    <p>
        Kami menyediakan layanan <strong>pengembangan web</strong>,
        <em>mobile application</em>, dan sistem informasi.
    </p>
        </div>
    </div>

    <div id="konten">

    <p>Ini adalah isi konten utama.</p>
    
    <h2>Tentang Kami</h2>
        <p>
            PT M.B.G adalah perusahaan yang bergerak di bidang
            pengembangan perangkat lunak dan solusi digital.
        </p>

        <p>
            PT M.B.G adalah perusahaan yang bergerak di bidang
            pengembangan perangkat lunak dan solusi digital.<br>
            PT M.B.G adalah perusahaan yang bergerak di bidang
            pengembangan perangkat lunak dan solusi digital.
        </p>

        <button onclick="tampilPesan()">Klik Saya</button>
         <button onclick="gantiWarna()">Ganti Warna Background</button>
        <button onclick="tampilJam()">Tampilkan Jam</button>
        <p id="info"></p>
    </div>

    <hr>

     <script src="assets/js/script.js"></script>

</body>

</html>
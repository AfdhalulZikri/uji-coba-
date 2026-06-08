<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>

    <?php include "navbar.php"; ?>
    
<hr>

<h1>Form Pendaftaran</h1>

<div id="konten"> 
    
    <form action="proses.php" method="POST">

        <label>Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">

        <label>Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Masukkan email">

        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Masukkan Password"><br><br>
        
        <label>Nomor Telepon:</label><br>
        <input type="tel" name="telepon" placeholder="Contoh: 08123456789"><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir"><br><br>
            
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="L"> Laki-laki
        <input type="radio" name="jk" value="P"> Perempuan<br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding<br><br>

        <label>Jurusan:</label><br>
        <select name="jurusan">
            <option value="TI">Teknologi Informasi</option>
            <option value="SI">Sistem Informasi</option>
        </select><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" placeholder="Masukkan alamat lengkap"></textarea><br><br>

        <button type="submit">Daftar</button>

    </form>

    </div>

    <p id="pesan"></p>

    <script src="assets/js/script.js"></script>
    
</body>
</html>
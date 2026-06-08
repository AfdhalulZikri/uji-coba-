<?php

$nama = $_POST['nama'];
$email = $_POST['email'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Hasil Pendaftaran</title>
</head>

<body>

<?php

if(empty($nama)) {

    echo "Nama wajib diisi";

}

elseif(strlen($nama) < 3) {

    echo "Nama terlalu pendek";

}

else {

    echo "<h2>Data Pendaftaran</h2>";

    echo "Selamat datang, " . $nama . "<br><br>";

    echo "Tanggal Pendaftaran: " . date("d-m-Y") . "<br><br>";

    echo "Nama: " . $nama . "<br>";

    echo "Email: " . $email;

}

?>

</body>
</html>
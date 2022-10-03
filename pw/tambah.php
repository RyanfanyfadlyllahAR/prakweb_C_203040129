<?php

require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data buku</title>
</head>

<body>
    <h3>Form Tambah Data buku</h3>
    <form action="" method="POST">
        <ul>
            <li>
                  <label>
                    Gambar :
                    <input type="text" name="gambar" required>
                </label>
                
            </li>
            
            <li>
                <label>
                    judul :
                    <input type="text" name="judul" required>
                </label>
            </li>
            <li>
               <label>
                    penulis :
                    <input type="text" name="penulis" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>
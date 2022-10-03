<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_c_203040129_pw');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{

    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $penulis  = htmlspecialchars($data['penulis']);
    
  

    $query = "INSERT INTO
               buku
                VALUES
                (null, '$nama', '$penulis', '$judul',);
                ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id){
 $conn = koneksi();
 mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
 return mysqli_affected_rows($conn);
}


function ubah($data)
{

    $conn = koneksi();

    $id = $data['id'];
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $nrp  = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
   

    $query = "UPDATE buku SET
                img = '$img',
                nama = '$penulis',
                judul = '$judul',
                WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM buku 
                WHERE
                 nama LIKE '%$keyword%' OR 
                nrp LIKE '%$keyword%'
                ";
    $result = mysqli_query($conn, $query);
        $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}   

function login($data)
{
 $conn = koneksi();

 $username = htmlspecialchars($data['Username']);
 $password =htmlspecialchars($data['Password']);

 // cek dulu username
 if($user = query("SELECT * FROM user WHERE username = '$username'")){
    // cek password
    if(password_verify($password, $user['password'])){
         // set session
    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
    }
   
 } 
    return [
         'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
 }




function registrasi ($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);   


    // jika username / password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
            alert('username/password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika username sudah ada
    if(query("SELECT * FROM user WHERE username = '$username'")) {
         echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // jika password < 5 digit
    if(strlen($password1) <5) {
        echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    //jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // imsert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}



?>
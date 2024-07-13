<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_produk');
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from users where username ='$username', password='$password'");
$result = mysqli_fetch_array(mysqli_query($koneksi, $data));

if($result){
    echo json_encode([
        'pesan' => 'login Sukses'
    ]);
}else{
    echo json_encode([
        'pesan' => 'login Gagal'
    ]);
}
?>
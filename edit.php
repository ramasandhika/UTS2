<?php 

require "function.php";
$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];
stmt("UPDATE tbl_rama SET 
        nama_rama = '$nama',
        email_rama = '$email',
        alamat_rama = '$alamat'
        WHERE id_rama = $id;");


if(rowCount() > 0){
    echo "<script>
    alert('Data berhasil di edit');
    document.location.href = 'index.php';
    </script>";
}else{
    error();
}


<?php

function connectionDB(){
    try{
        
        $dsn = "mysql:host=localhost;dbname=u958888159_fitguru";
        $conn = new PDO($dsn, "u958888159_andrebilly", "Apaajadeh10.");
        return $conn;

    }catch(PDOException $e){

        return $e;

    }
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $judul = htmlspecialchars($data["product"]);
    
    // upload foto
    $foto = upload();
    if( !$foto ) {
        return false;
    }

    $query = "INSERT INTO product VALUES('', '$judul', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
                return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
            return false;
    }

    // // cek jika ukuran terlalu besar
    // if( $ukuranFile > 1000000 ) {
    //     echo "<script>
    //             alert('ukuran gambar terlalu besar!');
    //             </script>";
    //         return false;
    // }

    // lolos pengecekan
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru);
    return $namaFileBaru;
    
}




function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM gallery WHERE id = $id");
    return mysqli_affected_rows($conn);
}




function ubah($data){
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);

    $fotoLama = htmlspecialchars($data["fotoLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['foto']['error'] === 4 ) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

    $query = "UPDATE product SET judul = '$judul', foto = '$foto' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM gallery WHERE judul LIKE '%$keyword%'";
    return query($query);
}

?>
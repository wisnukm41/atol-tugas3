<?php
    include 'connection.php';
    $tempat = $_POST['nama_tempat'];
    $deskripsi = $_POST['deskripsi'];
    $id = $_POST['id'];

    if(!empty($_FILES['gambar']['name'])){
        $allowed = ['jpg','png','jpeg'];
        $nama = $_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $ext = explode(".",$nama);
        $ext = end($ext);
        if(in_array($ext,$allowed) && $size < 5044070){
            $gambar = bin2hex(random_bytes(10)).".".$ext;  
            move_uploaded_file($file_tmp,'gambar/'.$gambar);
            unlink("gambar/".$_POST['old_img']);
        } else {
            $link = "edit.php?error=ukuran file terlalu besar, atau tipe file tidak sesuai!";
            header("location: ".$link);
        }
    } else {
        $gambar = $_POST['old_img'];
    }

    $query = "UPDATE `tour` SET `tempat`='$tempat', `deskripsi`='$deskripsi', `gambar`='$gambar' WHERE `id`='$id'; ";
    $res = mysqli_query($conn, $query);
    if($res){
        header('location: index.php?success=data berhasil diubah');
    }
    else{
        $link = "edit.php?error=".mysqli_error($conn);
        header("location: ".$link);
    }
    

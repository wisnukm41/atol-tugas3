<?php 
    include 'connection.php';
    $tempat = $_POST['nama_tempat'];
    $deskripsi = $_POST['deskripsi'];
    
    $allowed = ['jpg','png','jpeg'];
    $nama = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $ext = explode(".",$nama);
    $ext = end($ext);
    
    if(in_array($ext,$allowed) && $size < 5044070){
        $gambar = bin2hex(random_bytes(10)).".".$ext;

        move_uploaded_file($file_tmp,'gambar/'.$gambar);

        $query = "INSERT INTO `tour` (`tempat`,`deskripsi`,`gambar`) VALUES ('$tempat','$deskripsi','$gambar');";
        
        $res = mysqli_query($conn,$query);

        
        if($res){
            header('location: index.php?success=data berhasil ditambah');
        }
        else{
            $link = "add.php?error=".mysqli_error($conn);
            header("location: ".$link);
        }

    } else {
        $link = "add.php?error=ukuran file terlalu besar, atau tipe file tidak sesuai!";
        header("location: ".$link);
    }


    

   

  

   
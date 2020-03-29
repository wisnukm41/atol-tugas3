<?php
    include 'connection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM `tour` WHERE `id`='$id'";
    $res = mysqli_query($conn, $query);

    if($res){
        header('location: index.php?success=data berhasil dihapus');
    } else {
        $link = "index.php?error=".mysqli_error($conn);
        header("location: ".$link);
    }
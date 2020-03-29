<?php include 'connection.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
    <body>
        <h1>Ubah Perjalanan</h1>
        <div class="container">
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert__error">
                    Error : <?= $_GET['error'] ?>
                </div>
            <?php endif; 
                $id = $_GET['id'];
                $query = "SELECT * FROM `tour` WHERE `id`='$id'; ";
                $res = mysqli_query($conn,$query);
                if(mysqli_num_rows($res) > 0):
                $res = mysqli_fetch_assoc($res);
            ?>
            <form class="form" action="do_edit.php" method="post" enctype="multipart/form-data"> 
                <div class="input">
                    <div class="input__label">
                        <label for="nama_tempat">Nama Tempat</label>
                    </div>
                        <input class="input__items" type="text" id="nama_tempat" name="nama_tempat" required value="<?= $res['tempat'] ?>">
                </div>
                <div class="input">
                    <div class="input__label">
                        <label for="deskripsi">Deskripsi</label>
                    </div>
                
                        <textarea class="input__items" name="deskripsi" id="deskripsi" required cols="30" rows="8"><?= $res['deskripsi'] ?></textarea>
                    
                </div>
                <div class="input">
                    <div class="input__label">
                        <label for="gambar_old">Gambar Sebelumnya</label>
                    </div>
                    <div class="input__items">
                        <img src="gambar/<?= $res['gambar'] ?>" alt="">
                        <input type="hidden" class="img" name="old_img" value="<?= $res['gambar'] ?>">
                        <input type="hidden" name="id" value="<?= $id ?>">
                    </div>
                </div>
                <div class="input">
                    <div class="input__label">
                        <label for="gambar">Gambar Baru </label>                      
                    </div>
                    <small>*Tidak Perlu Upload Ulang Jika Tidak Ingin Mengubah Gambar Sebelumnya</small>
                    <div class="input__items">
                        <input type="file" id="gambar" name="gambar" accept=".png,.jpeg,.jpg">
                    </div>
                </div>
                <div class="input">
                    <a href="index.php" class="btn btn__edit">Kembali</a><button class="btn btn__submit">Ubah Data</button>
                </div>
            </form>
                <?php else: ?>
                <h2>Data Perjalanan Tidak Ditemukan</h2>
                <a href="index.php" class="btn btn__edit">Kembali</a>
                <?php endif; ?>
        </div>
    </body>
</html>
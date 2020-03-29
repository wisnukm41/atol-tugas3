<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>
    <body>
        <h1>Tambah Perjalanan</h1>
        <div class="container">
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert__error">
                    Error : <?= $_GET['error'] ?>
                </div>
            <?php endif; ?>
            <form class="form" action="do_add.php" method="post" enctype="multipart/form-data"> 
                <div class="input">
                    <div class="input__label">
                        <label for="nama_tempat">Nama Tempat</label>
                    </div>
                        <input class="input__items" type="text" id="nama_tempat" name="nama_tempat" required>
                </div>
                <div class="input">
                    <div class="input__label">
                        <label for="deskripsi">Deskripsi</label>
                    </div>
                
                        <textarea class="input__items" name="deskripsi" id="deskripsi" required cols="30" rows="8"></textarea>
                    
                </div>
                <div class="input">
                    <div class="input__label">
                        <label for="gambar">Gambar</label>
                    </div>
                    <div class="input__items">
                        <input type="file" id="gambar" name="gambar" accept=".png,.jpeg,.jpg" required>
                    </div>
                </div>
                <div class="input">
                    <a href="index.php" class="btn btn__edit">Kembali</a><button class="btn btn__submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </body>
</html>
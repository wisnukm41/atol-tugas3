<!-- import koneksi -->
<?php include 'connection.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
    <body>
        <h1>Tour Perjalanan</h1>
        <div class="container">
        <!-- Cek Apakah Ada Pemberitahuan Error atau Sukses -->
        <?php if(isset($_GET['success'])): ?>
        <div class="alert alert__success">
            <?= $_GET['success'] ?>
        </div>
        <?php endif;
         if(isset($_GET['error'])): ?>
            <div class="alert alert__error">
                Error : <?= $_GET['error'] ?>
            </div>
        <?php endif; ?>
        <a class="btn btn__add" href="add.php">Tambah Data</a>
        <table border=1>
            <thead>
                <tr>
                    <td width=8%>No</td>
                    <td width=18%>Nama Tempat</td>
                    <td width=30%>Deskripsi</td>
                    <td>Gambar</td>
                    <td width=15%>Aksi</td>
                </tr>
            </thead>
            <?php 
                $query = "SELECT * FROM `tour` ORDER BY `tempat`;";
                $res = mysqli_query($conn,$query);
            ?>

            <tbody>
                <?php if(mysqli_num_rows($res) > 0): 
                    $i=0;
                    foreach ($res as $res) :
                ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td class="content"><?= $res['tempat'] ?></td>
                    <td class="content"><?= $res['deskripsi'] ?></td>
                    <td>
                        <img class="img" src="<?= "gambar/". $res['gambar'] ?>" alt="<?= "Gambar ".$res['tempat'] ?>">
                    </td>
                    <td class="action">
                        <a href="edit.php?id=<?= $res['id'] ?>" class="btn btn__edit">Ubah</a>
                        <a href="delete.php?id=<?= $res['id'] ?>" class="btn btn__delete" onclick="return confirm('Yakin ?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    endforeach;
                    else: ?>
                <tr>
                    <td colspan=5>Tidak Ada Data</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </body>
</html>
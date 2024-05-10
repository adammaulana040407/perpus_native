<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="mt-3">Selamat Di Toko Damy</h3>
        <form id="siswaForm" action="" method="post">
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk:</label>
                <input type="text" name="nama_produk" id="namaProduk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Produk</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $nama_produk = $_POST['nama_produk'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];

            // Masukkan proses insert ke dalam database di sini
            include "koneksi.php";
            $insert = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga) VALUES ('$nama_produk', '$deskripsi', '$harga')");
            if($insert){
                echo '<div class="alert alert-success mt-3">Produk berhasil ditambahkan!</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Gagal menambahkan produk: ' . mysqli_error($koneksi) . '</div>';
            }
        }
        ?>

        <h3 class="mt-5">Tampil Produk</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PRODUK</th>
                    <th>DESKRIPSI</th>
                    <th>HARGA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_produk = mysqli_query($koneksi, "SELECT * FROM produk");
                $no = 0;
                while($produk = mysqli_fetch_array($qry_produk)) {
                    $no++;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $produk['nama_produk'] ?></td>
                    <td><?= $produk['deskripsi'] ?></td>
                    <td><?= $produk['harga'] ?></td>
                    <td>
                        <a href="edit_produk.php?id=<?= $produk['id_produk'] ?>" class="btn btn-success">Edit</a> | 
                        <a href="?hapus=<?= $produk['id_produk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>

        <?php
        if(isset($_GET['hapus'])){
            $id_produk = $_GET['hapus'];
            $hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");
            if($hapus){
                echo '<div class="alert alert-success mt-3">Produk berhasil dihapus!</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Gagal menghapus produk: ' . mysqli_error($koneksi) . '</div>';
            }
        }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_GET['id'])) {
    $id_produk = $_GET['id'];
    $query_produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
    $produk = mysqli_fetch_assoc($query_produk);
} else {
    echo "Produk tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="mt-3">Edit Produk</h3>
        <form action="" method="post">
            <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk']; ?>">
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk:</label>
                <input type="text" name="nama_produk" id="namaProduk" class="form-control" value="<?php echo $produk['nama_produk']; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $produk['deskripsi']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $produk['harga']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $update_produk = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga='$harga' WHERE id_produk='$id_produk'");
    if($update_produk) {
        echo '<script>alert("Data produk berhasil diperbarui.");window.location.href="tampil_produk.php";</script>';
    } else {
        echo '<script>alert("Gagal memperbarui data produk: ' . mysqli_error($koneksi) . '");</script>';
    }
}
?>

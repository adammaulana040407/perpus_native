<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            color: #495057;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .container {
            max-width: 960px;
            margin-top: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
    </style>
    <title>TOKO DAMY</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TOKO DAMY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="buku.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded">
    <!-- Konten di sini -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
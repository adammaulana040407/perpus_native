<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8d7da; /* Warna latar belakang - Merah muda */
        }
        .rounded {
            background-color: #f8d7da; /* Warna latar belakang - Merah muda */
        }
        .btn-success {
            background-color: #ffc107; /* Warna tombol - Kuning */
            border-color: #ffc107; /* Warna border tombol - Kuning */
        }
    </style>
    <title>Toko Damy</title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            <form action="proses_login.php" method="post">
                <h3 align="center">LOGIN Toko Damy</h3>
                Username:
                <input type="text" name="username" value="" class="form-control">
                Password:
                <input type="password" name="password" class="form-control"><br>
                <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="modal" tabindex="-1" id="logoutModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Benerean Mau Resign?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelLogout">Tidak Jadi Keluar</button>
                    <a href="?logout=true" class="btn btn-primary">Iya, Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#logoutModal').modal('show');

            $('#cancelLogout').click(function(){
                window.location.href = 'home.php'; // Ubah 'home.php' dengan alamat halaman home Anda
            });
        });
    </script>
</body>
</html>
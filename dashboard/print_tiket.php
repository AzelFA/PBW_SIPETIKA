<?php
require 'header.php';

// Ambil ID order dari URL
$id_order = $_GET['id'];

// Query SQL untuk mendapatkan data tiket
$sql = "SELECT t_order.*, jadwal.*, tiket.*
        FROM t_order
        JOIN jadwal ON jadwal.id = t_order.id_jadwal
        JOIN tiket ON tiket.id_order = t_order.id
        WHERE t_order.id = '$id_order'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Generate kode tiket secara otomatis (misalnya menggunakan timestamp)
$kode_tiket = "TKT" . time();

include 'sidebar.php';
include 'navbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Print Tiket</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <div class="col-sm-8">
                <div class="jumbotron bg-white">
                    <div class="jumbotron-fluid mt-5">
                        <div class="title">
                            <div class="col-sm-12">
                                <table class="table table-bordered">
                                    <tbody class="text-left">
                                        <tr>
                                            <th scope="row">Kode Tiket</th>
                                            <td><?= $kode_tiket; ?></td>
                                        </tr>
                                        <!-- Informasi lainnya -->
                                        <tr>
                                            <th scope="row">Nama Penumpang</th>
                                            <td><?= $row['nama_penumpang']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Asal</th>
                                            <td><?= $row['asal']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tujuan</th>
                                            <td><?= $row['tujuan']; ?></td>
                                        </tr>
                                        <!-- Kolom-kolom lain yang diperlukan -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <a href="order.php" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php include 'footer.php'; ?>

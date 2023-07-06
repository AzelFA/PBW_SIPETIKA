<?php 

	require 'server/config.php';
	session_start();


	require 'pages/templates/header.php';
	require 'pages/navbar/navbar.php';

    if (isset($_POST['cari'])) {
        $cari = $_POST['keyword'];
        $QueryString = "SELECT jadwal.id, jadwal.asal, jadwal.tujuan, jadwal.kelas, jadwal.harga, jadwal.tanggal, jadwal.waktu FROM jadwal WHERE
    	jadwal.id LIKE '%$cari%' or jadwal.asal LIKE '%$cari%' or jadwal.tujuan LIKE '%$cari%' or jadwal.kelas LIKE '%$cari%' or jadwal.harga LIKE '%$cari%' or jadwal.tanggal LIKE '%$cari%' or jadwal.waktu LIKE '%$cari%'";
        $SQL = mysqli_query($conn, $QueryString);
    } else {
        $SQL = mysqli_query($conn, "select * from jadwal ORDER BY id DESC");
    }
 ?>
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<div class="wrapper">
	<div class="jumbotron text-center bg-warning header">
			<section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                <h1>PESAN TIKET SEKARANG 🚆</h1>
                <p>Selamat Datang Di SIPETIKA !! Selamat Menikmati Layanan Kami dan Semoga Perjalanan Anda Lancar dan Menyenangkan!.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/image/kereta.jpg" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>        

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fas fa-search"></i>
                        <h3>Pesan Tiket</h3>
                        <p> Pesan tiket sekarang dengan mudah, cepat, praktis dan aman.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fas fa-ticket-alt"></i>
                        <h3>Bayar</h3>
                        <p> Bayar pesanan anda dengan memasukan kode booking yang telah disediakan.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <h3>Nikmati Perjalanan</h3>
                        <p> Nikmati perjalanan anda dengan layanan yang kami sediakan untuk anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron box-search ">
			<div class="col-sm-12  overflow-auto">
				<div class="container">
					<h4>Jadwal Kereta Api</h4>
				    <form action="" method="post">
				    	<div class="row">
				    		<div class="col-sm-10">
				    			<input type="text" name="keyword" class="form-control" size="10" placeholder="Search" autofocus autocomplete="off">
				    		</div>
				    		<div class="col-sm-2">
				    			<input type="submit" name="cari" class="form-control btn btn-primary">
				    		</div>
				        
				    	</div>
				    </form> 
				    <table class="table">
				        <thead>
				            <tr>
				                <th>No</th>
				                <th>asal</th>
				                <th>Tujuan</th>
				                <th>Kelas</th>
				                <th>Harga</th>
				                <th>Tanggal Berangkat</th>
				                <th>Waktu Keberangkatan</th>
				                <?php if(isset($_SESSION['status'])) {?>
				                <th>Order</th>
				            	<?php }else{ ?>

				            	<?php } ?>
				            </tr>
				        </thead>
				        <tbody>
				            <?php
				            $i = 1;
				            while ($data = mysqli_fetch_array($SQL) and extract($data)) { 
			            		$jam = substr($waktu,0,2);
								$time = (int)$jam;
								if ($time > 12) {
									$date = ' PM';
								}else if($time <12){
									$date = ' AM';
								}else{}

				             ?>
				                <tr>
				                    <td><?= $i++ ?></td>
				                    <td><?= $asal ?></td>
				                    <td><?= $tujuan ?></td>
				                    <td><?= $kelas ?></td>
				                    <td><?= $harga ?></td>
				                    <td><?= $tanggal ?></td>
				                    <td><?= $waktu.$date ?></td>
				                    <?php if(isset($_SESSION['status'])) {?>
				                		<td><a href='order.php?id=<?= $id?>' class="btn btn-warning">Check Now</a></td>
			            			<?php }else{ ?>

				            		<?php } ?>
				                    
				                </tr>
				            <?php }
				            ?>
				        </tbody>
				    </table>
				</div>	
			</div>
					
						
					
			<?php  ?>	
		</div>
	</div>
		
</div>

	
?>












<?php include 'pages/templates/footer.php';?>


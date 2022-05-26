<!--Muhammad Akmal Fadhlillah
    1302190103  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MedStory | Pusat Bantuan</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css"/>
        
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="smartDoc">SmartDoc</a></li>
                <li><a href="history">Forum</a></li>
                <li><a href="dataKu">Dataku</a></li>
				<li><a href="nomorDarurat">Darurat</a></li>
                <li style="float:right"><button type="submit" class='btn btn-danger' data-toggle="modal" data-target="#signOutModal" style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></li>
                <li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
					<!--DropDown menu navigation-->
					<div id="dropdown-content">
					<a href="#">Pusat Bantuan</a>
					<a href="tentang">Tentang</a>
					<a href="kebijakan">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>
        <main>

		<!--Announcement-->
		<br><br><br>
		<h2 style="margin-left: 16%; font-size:20px;">Pengaturan >> Pusat Bantuan</h2>
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
			<h1 style="text-align: left;">Pengumuman Terbaru</h1>
			<?php foreach($dataUpdate as $data){
				echo "<p style='font-size:14px;'>".$data['tanggal']." (".$data['jam'].") || ".$data['deskripsi']."</p>";
			} ?>
      <br>
		</div>
			
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
			<h1 style="text-align: left;">Pusat Bantuan</h1>
			<!--Card bantuan-->
			<div class="row mt-3">
        <div class='col-md-4 mt-3'>
          <div class='card' style="padding:1%; border-width:3px;">
            <div class='card-body'>
				<h4>Cara membuat akun baru dan cara mengganti password</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#caraAkunBaruModal">Lihat detail</button>
            </div>
          </div>
        </div>

				<div class='col-md-4 mt-3'>
          <div class='card' style="padding:1%; border-width:3px;">
            <div class='card-body'>
				<h4>Cara memperbarui booking konsultasi</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#caraBookingModal">Lihat detail</button>
            </div>
          </div>
        </div>

				<div class='col-md-4 mt-3'>
          <div class='card' style="padding:1%; border-width:3px;">
            <div class='card-body'>
				<h4>Cara mengedit akun dan foto profil</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#caraEditAkunModal">Lihat detail</button>
            </div>
          </div>
        </div>

				<div class='col-md-4 mt-3'>
          <div class='card' style="padding:1%; border-width:3px;">
            <div class='card-body'>
								<h4>Cara menggunakan forum</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#caraForumModal">Lihat detail</button>
            </div>
          </div>
        </div>

				<div class='col-md-4 mt-3'>
          <div class='card' style="padding:1%; border-width:3px;">
            <div class='card-body'>
								<h4>Cara mencetak dokumen</h4>
                <button class="btn btn-primary" data-toggle="modal" data-target="#caraCetakModal">Lihat detail</button>
            </div>
          </div>
        </div>

      </div>
		</div>
		<br>

		<!-- Modal -->
				<!-- Cara buat akun baru -->
				<div class="modal fade" id="caraAkunBaruModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p>1. Pada menu landing pilih "Buat Akun"</p>
							<p>2. Lengkapi data diri, data akun, dan foto profil</p>	
							<p>3. Tekan tombol browse untuk memilih file image yang ingin diupload</p>
							<p>4. Tekan tombol "Selanjutnya"</p>
							<p>5. Jika berhasil maka web akan langsung mengarah pada menu riwayat. Jika gagal periksa kembali data yang Anda masukkan</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Cara booking konsultasi -->
				<div class="modal fade" id="caraBookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p>1. Pilih menu riwayat</p>	
							<p>2. Pada section "Konsultasi Lanjutan & Berobat", Anda akan melihat tabel</p>
							<p>3. Jika ingin mengubah jadwal, cukup tekan tombol "Edit"</p>
							<p>4. Masukkan tanggal dan jam yang ingin dipesan ulang</p>
							<p>5. Tekan tombol "Simpan" untuk memperbarui booking konsultasi</p>
							<p>6. Sementara, jika ingin membatalkan. Tekan tombol "Batalkan" pada tabel</p>
							<p>7. Masukkan password untuk konfirmasi pembatalan Anda</p>
							<p>8. Jika sudah, tekan tombol "Ya, Saya Yakin" untuk mengonfirmasi penghapusan</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Cara Edit akun -->
				<div class="modal fade" id="caraEditAkunModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p>1. Buka menu Akun</p>
							<p>2. Pada section kanan, Anda cukup mengganti pada kolom input yang sudah menampilkan data akun Anda</p>
							<p>3. Jika sudah tekan tombol "Simpan Perubahan"</p>
							<p>4. Selanjutnya, jika ingin mengganti foto profil. Tekan tombol "Browse" untuk memilih foto yang terletak pada section kiri</p>
							<p>5. Jika sudah tekan tombol "Ganti Foto"</p>	
							</div>
						</div>
					</div>
				</div>

				<!-- Cara menggunakan forum -->
				<div class="modal fade" id="caraForumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p>1. Buka menu Forum</p>
							<p>2. Tekan tombol "Buat Pertanyaan"</p>	
							<p>3. Pilih kategori pertanyaan</p>
							<p>4. Ketikan pertanyaan Anda pada text box</p>
							<p>5. Tekan tombol "Kirim" untuk memposting</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Cara mencetak dokumen -->
				<div class="modal fade" id="caraCetakModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p>1. Buka menu Dataku</p>
							<p>2. Tekan tombol dengan icon "print" pada menu navigasi sebelah kiri</p>	
							<p>3. Atur metode download. Dan tekan tombol simpan</p>
							</div>
						</div>
					</div>
				</div>
		
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
        <section style="background-color: #4183D7; padding-top: 3px;">
        <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Deskripsi -->
            <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">MedStory</h6>
            <p style="color: whitesmoke;">
              MedStory merupakan sebuah aplikasi yang menyimpan data riwayat kesehatan setiap kali
              seseorang berobat. Dilengkapi dengan fitur scan QR, live chat dengan dokter, forum kesehatan,
              informasi kesehatan, nomor darurat, dan juga pencarian dokter. 
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">Kelompok 4</h6>
            <p style="color: whitesmoke;">
              <a class="text-reset">Leonardho R. Sitanggang</a>
            </p>
            <p style="color: whitesmoke;">
              <a class="text-reset">Fauzan Reza Ananda</a>
            </p>
            <p style="color: whitesmoke;">
              <a class="text-reset">Muhammad Rafi Alfarisi</a>
            </p>
            <p style="color: whitesmoke;">
              <a class="text-reset">Muhammad Akmal Fadhlillah</a>
            </p>
            <p style="color: whitesmoke;">
                <a class="text-reset">Ananda Ardian Pratama P.</a>
              </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: #212121; font-size: large;">NIM</h6>
            <p style="color: whitesmoke;">
                <a class="text-reset">1302194041</a>
            </p>
            <p style="color: whitesmoke;">
                <a class="text-reset">1302194003</a>
            </p>
            <p style="color: whitesmoke;">
                <a class="text-reset">1302194024</a>
            </p>
            <p style="color: whitesmoke;">
                <a class="text-reset">1302190103</a>
            </p>
            <p style="color: whitesmoke;">
                <a class="text-reset">1302194049</a>
            </p>
          </div>
        </section>

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302190103-Muhammad Akmal Fadhlillah</div>
        </footer>

		<!-- Sign out Modal -->
		<div class="modal fade" id="signOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" style='color:black; font-size:16px;'>Apakah Anda yakin?...</h5>
			</div>
			<div class="modal-footer">
				<div class='container-fluid'>
				<form action='landing/logout' method='post'>
					<input required name='validation' type='text' style="background:#f4f4f4; border-width: 0 0 3px; 
						border-bottom: 3.5px solid #4183D7; color:#212121; width:200px; margin-left:40px; border-radius:4px;" placeholder="'KONFIRMASI'"></input>
					<button class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-success">Ya</button>
				</form>
				</div>
			</div>			
			</div>
		</div>
		</div>	

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!--Ajax for json-->
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		
		<!--Jquery-->
		<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRB.js'; ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonRP.js'; ?>"></script>
		
        <script>
        $(document).ready(function(){
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
        })
        </script>
    </body>
</html>

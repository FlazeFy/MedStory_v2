<!--Muhammad Akmal Fadhlillah
    1302190103  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>PusatBantuanPage_1302190103</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/MainPage.css'; ?>" />
        
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="myData">Dataku</a></li>
                <li><a href="history">Riwayat</a></li>
                <li><a href="diskusi">Forum</a></li>
                <li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> <?= $data = $this->session->userdata('userTrack'); ?></a></li>
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

        <!--Side Navigation menu.-->
	    <div id="Navigation2">
		    <ul>
			    <li><a href="myData"><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href="cariDokter"><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href="nomorDarurat"><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href="covid"><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>

		<!--Announcement-->
		<br><br><br>
		<h2 style="margin-left: 16%;">Pengaturan >> Pusat Bantuan</h2>
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

				<!--Javascript signout-->
				<script type="text/javascript">
						function signOut(){
								//Verifikasi SignOut
								var pop = window.confirm("Apakah Anda yakin?");

									//Kondisi.
									if(pop){
											window.location.href = "http://localhost/MedStory";
											alert("Berhasil keluar");
									} else {
											alert("Sign-Out dibatalkan");
									}
							}
        	</script>

				<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
				<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<!--Ajax for json-->
				<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

					<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
					-->
				
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

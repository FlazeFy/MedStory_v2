<!--Ananda Ardian Pratama P.
    1302194049  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MyDataPage_1302194049</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/MainPage.css'; ?>" />
        
		<style>
			#myBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				right: 30px;
				z-index: 99;
				font-size: 18px;
				border: none;
				background-color: #22A7F0;
				padding: 15px;
				border-radius: 6px;
			}
		</style>
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li id="active"><a href="">Dataku</a></li>
                <li><a href="history">Riwayat</a></li>
                <li><a href="diskusi">Forum</a></li>
                <li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> <?= $data = $this->session->userdata('userTrack'); ?></a></li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
                        <!--DropDown menu navigation-->
                        <div id="dropdown-content">
                            <a href="pusatBantuan">Pusat Bantuan</a>
                            <a href="tentang">Tentang</a>
                            <a href="kebijakan">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>

        <!--Side Navigation menu.-->
	    <div id="Navigation2">
		    <ul>
			    <li><a onclick="print()"><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href="cariDokter"><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href="nomorDarurat"><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href="covid"><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>
		
		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>

		<!--Kartu berobat-->
		<br><br><br>
		<h2 style="margin-left: 16%;">Selamat datang, <?= $data = $this->session->userdata('userTrack'); ?></h2>
		<div id="printArea">
		<div class="container-fluid" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;">
		<p style="font-style:italic; font-size:14px;">Terakhir diperbarui: <?= $data = $this->session->userdata('lastLogin');?> </p></div>
		<div class="container-fluid" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px; 
		background-color: #333333;">
          <h1 style="text-align: left; color:white;">Dataku</h1>
				<div class="container">
				<img src="assets/uploads/user_<?php foreach($dataUser as $data){echo $data['namaPengguna'];} ?>.jpg" alt="Admin" class="rounded-circle img-fluid" 
				style="width:200px; height:200px; float:right; margin-top:-12%;">
					<h3 style="color:white; font-size:18px;"><?php foreach($dataUser as $data){echo $data['namaLengkap'];} ?><h3>
					<h3 style="color:white; font-size:18px;"><?php foreach($dataUser as $data){echo $data['tinggiBadan'];} ?> cm & <?php foreach($dataUser as $data){echo $data['beratBadan'];} ?> kg<h3>
					<h3 style="color:white; font-size:18px;"><?php foreach($dataUser as $data){echo $data['nik'];} ?><h3>
					<h3 style="color:white; font-size:18px;"><?php foreach($dataUser as $data){echo $data['tempatLahir'];} ?> , <?php foreach($dataUser as $data){echo $data['tanggalLahir'];} ?><h3>
					<h3 style="color:white; font-size:18px;"><?php foreach($dataUser as $data){echo $data['alamat'];} ?><h3>
					<h3 style="color:white; font-size:20px; float:right; font-weight:bold;"><?php foreach($dataUser as $data){echo $data['golDarah'];} ?><h3><br>
					<button style="background:#F6404F; color:white; border-radius:5px; border:none; font-size:24px; float:right" data-toggle="modal" data-target="#scanQR"><img id="MyData" src="assets/qr.png">Scan QR</button>
				</div>
			</form>
		</div>
		<br>

		<!-- Data rekam medis -->
		<!-- Alergi -->
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
	    <h1 style="text-align: left;">Alergi</h1>
			<div class="container">
			<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -5%; margin-right: -1%;" 
			data-toggle="modal" data-target="#helpAlergiModal"><hr>
				<?php foreach($dataAlergi as $data){
					echo "<h3 style='font-size:18px;'> - ".$data['alergi']."</h3>";
				} ?>
			</div>
		</div>

		<!-- Alergi -->
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
	    <h1 style="text-align: left;">Penyakit</h1>
			<div class="container">
			<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -5%; margin-right: -1%;" 
			data-toggle="modal" data-target="#helpPenyakitModal"><hr>
				<?php foreach($dataPenyakit as $data){
					echo "<h3 style='font-size:18px;'> - ".$data['penyakit']." (".$data['tahun'].")</h3>";
				} ?>
			</div>
		</div>

		<!-- Vaksinasi dan imunisasi -->
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
	    <h1 style="text-align: left;">Vaksinasi & Imunisasi</h1>
			<div class="container">
			<img type="button" src="assets/Info.png" id="helpPemeriksaan" style="float: right; height: 35px; width: 35px; margin-top: -5%; margin-right: -1%;" 
			data-toggle="modal" data-target="#helpVaksinModal"><hr>
				<?php foreach($dataVaksinasi as $data){
					echo "<h3 style='font-size:18px;'> - ".$data['jenis']." (".$data['tahun'].")</h3>";
				} ?>
			</div>
		</div>
		</div><!-- Print Area End -->

		<!-- Modal -->
				<!-- Rekam Medis Help -->
				<div class="modal fade" id="helpAlergiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tentang</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<p id="alergi">...</p>	
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="helpPenyakitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tentang</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
								<p id="penyakit">...</p>
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="helpVaksinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tentang</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
								<p id="vaksinasi">...</p>
							</div>
							<div class="modal-footer">
								<p>Untuk informasi lebih lanjut, kunjungi </p>
								<button type="button" class="btn btn-primary" style="background-color: #4183D7; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">Bantuan</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Scan QR -->
				<div class="modal fade" id="scanQR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">QR Code</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style="text-align: left">
							<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8"
							style="display: block; margin-left: auto; margin-right: auto;"/>
							</div>
							<div class="modal-footer">
								<!--Random QR Code-->
								<h2 style="display: block; margin-left: auto; margin-right: auto;"><?php foreach($dataUser as $data){echo rand(2, 8), $data['nik'];} ?></h2>
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

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194049-Ananda Ardian Pratama P.</div>
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
			function print() {
				var divContents = document.getElementById("printArea").innerHTML;
				var a = window.open('', '', 'height=500, width=500');
				a.document.write('<html>');
				a.document.write('<body>');
				a.document.write(divContents);
				a.document.write('</body></html>');
				a.document.close();
				a.print();
			}
			//Back to the top js.
			var mybutton = document.getElementById("myBtn");
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
				}
			}

			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
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
				<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonDataku.js'; ?>"></script>
        <script>
        $(document).ready(function(){
          $('.collapsible').click(function(e) {
              e.stopPropagation();
              $('#iconDrop').css({
                  "-ms-transform" : "rotate(180deg)",      //Internet Explorer  
                  "-webkit-transform": "rotate(180deg)",   //Chrome & Safari
                  "-moz-transform": "rotate(180deg)",      //Firefox
                  "-o-transform" : "rotate(180deg)",       //Opera
                  "transform": "rotate(180deg)"            //Others
              });
          });
					$(function () {
						$('[data-toggle="popover"]').popover()
					})
        })
        </script>
    </body>
</html>

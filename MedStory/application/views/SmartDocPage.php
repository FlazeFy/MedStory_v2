<!--Leonardho R Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MedStory | SmartDoc</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css" />
        
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
					<img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
					<li id="active"><a href="myData">SmartDoc</a></li>
					<li><a href="history">Forum</a></li>
					<li><a href="diskusi">Dataku</a></li>
					<li><a href="nomorDarurat">Darurat</a></li>
						<li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
						<li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="http://localhost/MedStory/assets/MyData.png"> <?= $data = $this->session->userdata('userTrack'); ?></a></li>
						<div id="ddParent">
						<button id="dropbutton"><img id="set" src="http://localhost/MedStory/assets/Setting.png"></button>
						<!--DropDown menu navigation-->
						<div id="dropdown-content">
							<a href="pusatBantuan">Pusat Bantuan</a>
							<a href="tentang">Tentang</a>
							<a href="kebijakan">Kebijakan & Privasi</a>
						</div>
					</div>
				</ul>
			</div>

			<!--Back to top.-->
			<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
				<img src='http://localhost/MedStory/assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
			</button>

			<br><br><br>
			<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
				<h5 style="text-align: left; color:#696969;">Kalkulator BMI</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h5 class='font-weight-bold'>Apa itu BMI?</h5>                        
								<p>Body Mass Index (BMI) atau Indeks Massa Tubuh (IMT) adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas.</p>
							</div>
							<div class='col-md-6'>
								<div class="row">
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Tinggi Badan (Cm)</h5>
										<input type="number" class="form-control" id="tinggi" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Berat Badan (Kg)</h5>
										<input type="number" class="form-control" id="berat" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<button class='btn btn-success' style='height:100px;' id='hitung'>Hitung</button>
									</div>
								</div>	
								<h5 class='font-weight-bold' id='hasil'></h5>				
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
				<h5 style="text-align: left; color:#696969;">RoboDoc</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h5 class='font-weight-bold'>Apa itu RoboDoc?</h5>                        
								<p>RoboDoc adalah fitur yang dapat mendukung Anda untuk mengetahui penyakit yang Anda derita dengan cepat dan tanpa perlu diagnosa lansung dengan dokter. Anda cukup memberitahukan gejala yang Anda derita kepada RoboDoc. Dan kami akan menampilkan daftar kemungkinan penyakit yang Anda derita.</p>
							</div>
							<div class='col-md-6'>
								<div class="row">
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Gejala</h5>
										<textarea rows="3" cols="60" name="gejala" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121; border-radius:5px;" required>Sertakan tanda "," untuk menambahkan gejala lainnya</textarea><br>
									</div>
									<div class="col-sm">
										<button class='btn btn-success' type='submit'>Cari</button>
									</div>
								</div>	
								<h5 class='font-weight-bold' id='hasil'></h5>				
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
				<h5 style="text-align: left; color:#696969;">Kalkulator Kalori</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h5 class='font-weight-bold'>Apa itu Kalkulator kalori?</h5>                        
								<p>Dengan alat ini Anda mengetahui berapa asupan kalori yang dibutuhkan. Hasil perhitungannya dapat Anda gunakan sebagai salah satu acuan untuk mengontrol asupan kalori per hari.</p>
							</div>
							<div class='col-md-6'>
								<div class="row">
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Tinggi Badan (Cm)</h5>
										<input type="number" class="form-control" id="tinggi" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Berat Badan (Kg)</h5>
										<input type="number" class="form-control" id="berat" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Umur (Thn)</h5>
										<input type="number" class="form-control" id="umur" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
								</div>	
								<div class="row">
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Aktivitas</h5>
										<select class="form-control" id="aktivitas" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
											<option value="1">Tidak pernah berolahraga dalam seminggu</option>
											<option value="2">1-3 kali dalam seminggu</option>
											<option value="3">3-5 kali dalam seminggu</option>
											<option value="4">6-7 kali dalam seminggu</option>
											<option value="5">Setiap hari / Pekerjaan fisik</option>
										</select>
									</div>
								</div>	
								<div class="row">
									<div class="col-sm">
										<button class='btn btn-success' style='margin-top:10px;'>Hitung</button>
									</div>
								</div>
							</div>
						</div>
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

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194041-Leonardho R Sitanggang</div>
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

			//BMI
			window.onload = () => {
				let button = document.querySelector("#hitung");
			
				// Function for calculating BMI
				button.addEventListener("click", calculateBMI);
			};
			
			function calculateBMI() {
				let tinggi = parseInt(document.querySelector("#tinggi").value);
				let berat = parseInt(document.querySelector("#berat").value);
				let result = document.querySelector("#hasil");
			
				if (tinggi === "" || isNaN(tinggi)) 
					result.innerHTML = "Tinggi badan tidak valid";
			
				else if (berat === "" || isNaN(berat)) 
					result.innerHTML = "Berat badan tidak valid";
			
				else {
					let bmi = (berat / ((tinggi * tinggi) / 10000)).toFixed(2);
		
					if (bmi < 18.6) {
						result.innerHTML = `Kurus : <span>${bmi}</span>`;
					} else if (bmi >= 18.6 && bmi < 24.9) {
						result.innerHTML = `Normal : <span>${bmi}</span>`;
					} else { 
						result.innerHTML = `Obesitas : <span>${bmi}</span>`;
					}
				}
			}
        </script>

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!--Ajax for json-->
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script>
        $(document).ready(function(){
			$('.collapsible').click(function(e) {
				e.stopPropagation();
			});
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
        })
        </script>
    </body>
</html>

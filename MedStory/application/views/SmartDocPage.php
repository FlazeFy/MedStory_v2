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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
			* {
			box-sizing: border-box;
			}

			/*the container must be positioned relative:*/
			.autocomplete {
			position: relative;
			display: inline-block;
			}

			input {
			border: 1px solid transparent;
			background-color: #f1f1f1;
			padding: 10px;
			font-size: 16px;
			}

			input[type=text] {
			background-color: #f1f1f1;
			width: 100%;
			}

			input[type=submit] {
			background-color: DodgerBlue;
			color: #fff;
			cursor: pointer;
			}

			.autocomplete-items {
			position: absolute;
			border-bottom: none;
			border-top: none;
			z-index: 99;
			/*position the autocomplete items to be the same width as the container:*/
			top: 100%;
			left: 0;
			right: 0;
			border-radius:5px;
			}

			.autocomplete-items div {
			padding: 10px;
			color:white;
			cursor: pointer;
			background-color: #22A7F0;
			border-bottom: 1px solid #d4d4d4; 
			border-radius:5px;
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
			background-color: #4183D7; 
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
			background-color: DodgerBlue !important; 
			color: white; 
			}

.nav-pills-custom .nav-link {
    color: #212121;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link:hover {
    color: white;
    background: #22A7F0;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: white;
    background: #4183D7;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #4183D7;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
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
						<li style="float:right"><form action='landing/logout' method='post'><button type="submit" class='btn btn-danger' style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></form></li>
						<li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
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
									<form autocomplete="off" action="smartDoc/searchGejala" method="POST">
										<div class="col-sm">
											<h5 class='font-weight-100' style='font-size: 16px;'>Gejala</h5>
											<div class="autocomplete" style="width:300px;">
												<textarea rows="3" cols="60" name="gejala" style="background:#f4f4f4; border-width: 0 0 3px; 
													border-bottom: 3.5px solid #4183D7; color:#212121; border-radius:5px;" id="myInput" required>Sertakan tanda "," untuk menambahkan gejala lainnya</textarea><br>
											</div>
										</div>
										<div class="col-sm">
											<button class='btn btn-success' type='submit'>Cari</button>
										</div>
									</form>
								</div>
								

								<h5 class='font-weight-bold' id='hasil'></h5>				
							</div>
						</div>
						
						<!-- Demo header-->
						<section class="">
							<h5 class='font-weight-100' style='font-size: 16px;'>Menampilkan
							<?php
								$count = 0;
								$namaGejala = $this->session->userdata('gejala');
								foreach($dataGejala as $gejala){
									if($gejala['nama_gejala'] == $namaGejala){
										foreach($dataRelasi as $relasi){
											if($relasi['id_gejala'] == $gejala['id_gejala']){
												foreach($dataPenyakit as $penyakit){
													if($penyakit['id_penyakit'] == $relasi['id_penyakit']){
														$count++;
													}
												}
											}
										}
									}
								}
								echo $count." Pencarian";
							?>
							</h5>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3" style="max-height: calc(80vh - 140px); max-width:auto; overflow-y: auto;">
										<!-- Tabs nav -->
										<div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<?php
												$state = ' active';
												$namaGejala = $this->session->userdata('gejala');
												foreach($dataGejala as $gejala){
													if($gejala['nama_gejala'] == $namaGejala){
														foreach($dataRelasi as $relasi){
															if($relasi['id_gejala'] == $gejala['id_gejala']){
																foreach($dataPenyakit as $penyakit){
																	if($penyakit['id_penyakit'] == $relasi['id_penyakit']){
																		echo"<a class='nav-link mb-3 p-3 shadow".$state."' id='v-pills-".$penyakit['id_penyakit']."-tab' data-toggle='pill' href='#v-pills-".$penyakit['id_penyakit']."' role='tab' aria-controls='v-pills-".$penyakit['id_penyakit']."' aria-selected='true'>
																		<span class='font-weight-bold small text-uppercase'>".$penyakit['nama_penyakit']."</span></a>";
																		$state = ' ';
																	}
																}
															}
														}
													}
												}
											?>
										</div>
									</div>

									<div class='col-md-9'>
										<!-- Tabs content -->
										<div class='tab-content' id='v-pills-tabContent'>
											<?php
												$state = ' active';
												$namaGejala = $this->session->userdata('gejala');
												foreach($dataGejala as $gejala){
													if($gejala['nama_gejala'] == $namaGejala){
														foreach($dataRelasi as $relasi){
															if($relasi['id_gejala'] == $gejala['id_gejala']){
																foreach($dataPenyakit as $penyakit){
																	if($penyakit['id_penyakit'] == $relasi['id_penyakit']){
																		echo"<div class='tab-pane fade shadow rounded bg-white show ".$state." p-4' id='v-pills-".$penyakit['id_penyakit']."' role='tabpanel' aria-labelledby='v-pills-".$penyakit['id_penyakit']."-tab' style='border: 3px solid #4183D7;'>
																			<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>".$penyakit['nama_penyakit']."</h5>
																			<div style='float:right; margin-top:-50px;'>
																				<h5 style='font-size:14px; color:#212121;'><img style='width:25px;' src='http://localhost/MedStory/assets/icon/rasio.png'> Rasio di Indonesia</h5>
																					<p style='font-size:12px; color:#616161;'>".$penyakit['rasio']."</p>
																			</div>
																			<h5 style='font-size:16px; color:#212121;'><img style='width:25px;' src='http://localhost/MedStory/assets/icon/penanganan.png'> Penanganan</h5>
																				<p style='font-size:14px; color:#616161; margin-bottom:20px;'>".$penyakit['penanganan']."</p>
																			<h5 style='font-size:16px; color:#212121;'><img style='width:25px;' src='http://localhost/MedStory/assets/icon/obat.png'> Obat</h5>
																				<p style='font-size:14px; color:#616161; margin-bottom:20px;'>".$penyakit['obat']."</p>
																			<h5 style='font-size:16px; color:#212121;'><img style='width:25px;' src='http://localhost/MedStory/assets/icon/pencegahan.png'> Pencegahan</h5>
																				<p style='font-size:14px; color:#616161; margin-bottom:20px;'>".$penyakit['pencegahan']."</p>
																			<h5 style='font-size:16px; color:#212121;'><img style='width:25px;' src='http://localhost/MedStory/assets/icon/gejala.png'> Gejala lainnya</h5>";
																			foreach($dataRelasi as $relasi2){
																				if($relasi2['id_penyakit'] == $penyakit['id_penyakit']){
																					foreach($dataGejala as $gejala2){
																						if($gejala2['id_gejala'] == $relasi2['id_gejala']){
																							echo"<a style='font-size:14px; color:#616161;'>".$gejala2['nama_gejala'].", </a>";
																						}
																					}
																				}
																			}																			
																		echo"</div>";
																		$state = ' ';
																	}
																}
															}
														}
													}
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</section>

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

		<script>
			function autocomplete(inp, arr) {
				var currentFocus;

				inp.addEventListener("input", function(e) {
					var a, b, i, val = this.value;
					closeAllLists();
					if (!val) { return false;}
					currentFocus = -1;
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					this.parentNode.appendChild(a);
					for (i = 0; i < arr.length; i++) {
						if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
							b = document.createElement("DIV");
							b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
							b.innerHTML += arr[i].substr(val.length);
							b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
							b.addEventListener("click", function(e) {
								inp.value = this.getElementsByTagName("input")[0].value;
								closeAllLists();
							});
							a.appendChild(b);
						}
					}
				});
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						currentFocus++;
						addActive(x);
					} else if (e.keyCode == 38) { 
						currentFocus--;
						addActive(x);
					} else if (e.keyCode == 13) {
						e.preventDefault();
						if (currentFocus > -1) {
							if (x) x[currentFocus].click();
						}
					}
				});
				function addActive(x) {
					if (!x) return false;
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					x[currentFocus].classList.add("autocomplete-active");
				}
				function removeActive(x) {
					for (var i = 0; i < x.length; i++) {
					x[i].classList.remove("autocomplete-active");
					}
				}
				function closeAllLists(elmnt) {
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
					if (elmnt != x[i] && elmnt != inp) {
						x[i].parentNode.removeChild(x[i]);
					}
					}
				}
				document.addEventListener("click", function (e) {
					closeAllLists(e.target);
				});
			}

			var gejala = [<?php foreach($dataGejala as $gejala){echo "'"; echo $gejala['nama_gejala']; echo "',";} ?>];		
			autocomplete(document.getElementById("myInput"), gejala);
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

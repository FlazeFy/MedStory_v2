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
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

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
				padding: 15px;
				border-radius:100%; 
				background:#22A7F0; 
				box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
			}
			* {
			box-sizing: border-box;
			}
			.carousel {
				margin: 5px auto;
				padding: 0 30px;
			}
			.carousel .item {
				color: #808080;
				min-height: 325px;
				text-align: center;
				overflow: hidden;
				background: white;
			}
			.carousel .item h4 {
				font-size: 18px;
			}
			.carousel .item h4, .carousel .item p, .carousel .item ul {
				margin-bottom: 5px;
			}
			.carousel-control-prev, .carousel-control-next {
				height: 44px;
				width: 40px;
				background: #4183D7;	
				margin: auto 0;
				border-radius: 4px;
				opacity: 0.8;
			}
			.carousel-control-prev:hover, .carousel-control-next:hover {
				background: #4183D7;
				opacity: 1;
			}
			.carousel-control-prev i, .carousel-control-next i {
				font-size: 36px;
				position: absolute;
				top: 50%;
				display: inline-block;
				margin: -19px 0 0 0;
				z-index: 5;
				left: 0;
				right: 0;
				color: #fff;
				text-shadow: none;
				font-weight: bold;
			}
			.carousel-control-prev i {
				margin-left: -2px;
			}
			.carousel-control-next i {
				margin-right: -4px;
			}		
			.carousel-indicators {
				bottom: -20px;
			}
			.carousel-indicators li, .carousel-indicators li.active {
				width: 10px;
				height: 10px;
				margin: 4px;
				border-radius: 50%;
				border: none;
			}
			.carousel-indicators li {	
				background: rgba(0, 0, 0, 0.2);
			}
			.carousel-indicators li.active {	
				background: rgb(40, 207, 54);
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
					<li id="active"><a href="smartDoc">SmartDoc</a></li>
					<li><a href="history">Forum</a></li>
					<li><a href="dataKu">Dataku</a></li>
					<li><a href="nomorDarurat">Darurat</a></li>
						<li style="float:right"><button type="submit" class='btn btn-danger' data-toggle="modal" data-target="#signOutModal" style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></li>
						<li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
						<div id="ddParent">
						<button id="dropbutton"><img id="set" src="http://localhost/MedStory/assets/Setting.png"></button>
						<!--DropDown menu navigation-->
						<div id="dropdown-content">
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
				<h5 style="text-align: left; font-weight:w600;">Kalkulator BMI</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h6 style='color:black;'>Apa itu BMI?</h6>                        
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
								<h5 class='font-weight-w500' id='hasil'></h5>				
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
				<h5 style="text-align: left; font-weight:w600;">RoboDoc</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h6 style='color:black;'>Apa itu RoboDoc?</h6>                        
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
								

								<h5 class='font-weight-w500' id='hasil'></h5>				
							</div>
						</div>
						
						<!-- Demo header-->
						<section class="">
							<h5 class='font-weight-100' style='font-size: 14px; color:#808080; font-style:italic;'>Menampilkan
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
																				<p style='font-size:14px; color:#616161; margin-bottom:20px;'>"; 
																				foreach($dataRelasiObat as $relObat){
																					if($relObat['id_penyakit'] == $penyakit['id_penyakit']){
																						foreach($dataObat as $obat){
																							if($relObat['id_obat'] == $obat['id_obat']){
																								echo "<a type='button' style='color:#22A7F0; text-decoration:underline;' data-toggle='modal' data-target='#modalObat".$obat['id_obat']."' title='".$obat['namaObat']."'>".$obat['namaObat'].",</a>";
																							}
																						}
																					}
																				}
																				echo"</p>
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
				<h5 style="text-align: left; font-weight:w600;">Kalkulator Kalori</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h6 style='color:black;'>Apa itu Kalkulator kalori?</h6>                        
								<p>Dengan alat ini Anda mengetahui berapa asupan kalori yang dibutuhkan. Hasil perhitungannya dapat Anda gunakan sebagai salah satu acuan untuk mengontrol asupan kalori per hari.</p>								
								<h5 class='font-weight-w500' id='hasilCal'></h5>
							</div>
							<div class='col-md-6'>
								<div class="row">
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Tinggi Badan (Cm)</h5>
										<input type="number" class="form-control" id="tinggiCal" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Berat Badan (Kg)</h5>
										<input type="number" class="form-control" id="beratCal" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Umur (Thn)</h5>
										<input type="number" class="form-control" id="umurCal" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
								</div>	
								<div class="row" style='margin-top:5px;'>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Aktivitas</h5>
										<select class="form-control" id="aktivitasCal" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
											<option value="1">Tidak pernah berolahraga dalam seminggu</option>
											<option value="2">1-3 kali dalam seminggu</option>
											<option value="3">3-5 kali dalam seminggu</option>
											<option value="4">6-7 kali dalam seminggu</option>
											<option value="5">Setiap hari / Pekerjaan fisik</option>
										</select>
									</div>
									<div class="col-sm-3">
										<h5 class='font-weight-100' style='font-size: 16px;'>Jenis Kelamin</h5>
										<select class="form-control" id="jKelaminCal" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
											<option value="1">Pria</option>
											<option value="2">Wanita</option>
										</select>
									</div>
								</div>	
								<div class="row">
									<div class="col-sm">
										<button class='btn btn-success' style='margin-top:10px;' id='hitungCal'>Hitung</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
				<h5 style="text-align: left; font-weight:w600;">Kartu Menuju Sehat</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>
								<h6 style='color:black;'>Apa itu KMS?</h6>                        
								<p>Kartu Menuju Sehat adalah suatu patokan yang digunakan untuk mencatat grafik perkembangan setiap anak dengan mengacu pada berat badan, umur, serta jenis kelamin. Alat ini juga digunakan untuk melihat perkembangan balita tersebut dan menjadi acuan agar menjaga bayi tetap sehat dan mendapatkan gizi yang tepat.</p>							
							</div>
							<div class='col-md-6'>
								<form method='POST' action='smartDoc/hitungKMS'>
								<div class="row" >
									<input class='form-control' type='text' name='id_user' 
										value='<?php foreach ($dataUser as $data){echo $data['id_user'];}?>' hidden></input>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Nama Anak</h5>
										<input type="name" class="form-control" name="namaAnak" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm-3">
										<h5 class='font-weight-100' style='font-size: 16px;'>Jenis Kelamin</h5>
										<select class="form-control" name="jKelaminAnak" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
											<option value="Pria">Pria</option>
											<option value="Wanita">Wanita</option>
										</select>
									</div>
								</div>	
								<div class="row" style='margin-top:5px;'>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Tinggi Badan (Cm)</h5>
										<input type="number" class="form-control" name="tinggiAnak" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Berat Badan (Kg)</h5>
										<input type="number" class="form-control" name="beratAnak" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>
									<div class="col-sm">
										<h5 class='font-weight-100' style='font-size: 16px;'>Tanggal Lahir</h5>
										<input type="date" class="form-control" name="tglLahirAnak" style="background:#f4f4f4; border-width: 0 0 3px; 
											border-bottom: 3.5px solid #4183D7; color:#212121;">
									</div>	
								</div>	
								<div class="row">
									<div class="col-sm">
										<button class='btn btn-success' style='margin-top:10px;' type='submit'>Hitung</button>
									</div>
								</div>
								</form>
							</div>
						</div>
						<br>
						<div class='row'>
							<div class='col-md-7'>
							<h5 class='font-weight-w500' data-toggle="collapse" href="#collapseriwayatKMS" role='button' style='color:#4183D7;'><i class="fa fa-history"></i> Riwayat<i class="fa fa-angle-down" style='float:right;'></i></h5><hr>  
								<div id="collapseriwayatKMS" class='card-body collapse show' style='width:100%;'>
									<?php
									$i = 0;
									$jml = 0;
									foreach($dataKMS as $kms){
										$jml++;
									}
									if ($jml > 0){ 
										echo"<div id='carouselKMS' class='carousel slide' data-ride='carousel' data-interval='0' style='top:-30px;'>
										<!-- Carousel indicators -->
										<ol class='carousel-indicators'>";
										$item = 0;
										$page = 0;
										foreach($dataKMS as $kms){
											if($item == 0 && $page == 0){
												echo"<li data-target='#carouselKMS' data-slide-to='0' class='active'></li>";
												$item++;
												$page++;
											} else if ($item % 3 == 0){
												echo"<li data-target='#carouselKMS' data-slide-to='".$page."'></li>";
												$item++;
												$page++;
											} else if ($item % 3 != 0){
												$item++;
											}
										}
										echo"</ol>   
										<!-- Wrapper for carousel items -->
										<div class='carousel-inner'>";
										$k = 1;
										$state = ' active';
										foreach($dataKMS as $kms){
											if($k % 4 == 0  || $k == 1){
												echo"<div class='item carousel-item".$state."' >
												<div class='row' style='margin:20px;'>";
											}
											echo"<div class='card' style='border-radius:6px; border:none; height:100px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
												margin-bottom:5px; width:100%;'>
												<div class='row' style=''>
													<div class='col-sm-1' style='background:#4183D7; left:10px; top:-5px; height:100px; border-top-left-radius: 6px; border-bottom-left-radius: 6px;'>
														<h4 style='margin-top:35px; margin-left:-5px; color:white;'>"; 
														if($kms['jenisKelamin'] == 'Wanita'){
															echo"<i class='fa fa-venus fa-md'></i>"; 
														} else {
															echo"<i class='fa fa-mars fa-md'></i>"; 
														}
														
														echo"</h4>
													</div>
													<div class='col-sm' >
														<p style='font-size:14px; color:#22A7F0; text-align:left; margin-top:10px;'><i class='fa-solid fa-baby'></i> ".$kms['namaAnak']."</p>
														<p style='font-size:14px; color:grey; text-align:left;'><i class='fa-solid fa-weight-scale'></i> ".$kms['berat']." kg / ".$kms['tinggi']." cm</p>
														<p style='font-size:14px; color:grey; text-align:left;'><i class='fa-solid fa-calendar'></i> ".$kms['tanggalLahirA']."</p>
													</div>
													<div class='col-sm' >
														<p style='font-size:12px; color:grey; float:right; white-space: nowrap; font-style:italic;'>dibuat pada ".$kms['datecreated']."</p>
														<button class='btn btn-info' style='float:right; margin-top:25px;' data-toggle='modal' data-target='#detailKMS".$kms['id_kms']."'>Detail</button>
													</div>
												</div>
											</div>";
											$i++;
											$k++;
											$state = ' ';
											if($k % 4 == 0){
												echo"</div>
											</div>";
											}
										}
										echo"</div>
										</div></div>
										<!-- Carousel controls -->
										<a class='carousel-control-prev' href='#carouselKMS' data-slide='prev'>
											<i class='fa fa-angle-left'></i>
										</a>
										<a class='carousel-control-next' href='#carouselKMS' data-slide='next'>
											<i class='fa fa-angle-right'></i>
										</a>
										</div>";
									} else {
										echo "<div class='container'>
											<p style='font-style:italic; text-align:center; color:grey; font-size:14px;'>Anda belum pernah menghitung KMS</p>
											<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
												margin-left: auto; margin-right: auto; width: 200px; height: 200px; margin-top:-20px;'>
										</div>";
									}
									?> 
								</div>    	
							</div>
							<div class='col-md-4'>
								<h6 style='color:black;'>Hasil hitung :</h6>   
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
            <h6 class="text-uppercase fw-w500 mb-4" style="color: #212121; font-size: large;">MedStory</h6>
            <p style="color: whitesmoke;">
              MedStory merupakan sebuah aplikasi yang menyimpan data riwayat kesehatan setiap kali
              seseorang berobat. Dilengkapi dengan fitur scan QR, live chat dengan dokter, forum kesehatan,
              informasi kesehatan, nomor darurat, dan juga pencarian dokter. 
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4">
            <h6 class="text-uppercase fw-w500 mb-4" style="color: #212121; font-size: large;">Kelompok 4</h6>
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
            <h6 class="text-uppercase fw-w500 mb-4" style="color: #212121; font-size: large;">NIM</h6>
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

		<?php
		foreach($dataRelasiObat as $relObat){
			foreach($dataObat as $obat){
				if($relObat['id_obat'] == $obat['id_obat']){
					echo"<!-- Deskripsi Obat Modal -->
					<div class='modal fade' id='modalObat".$obat['id_obat']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalObat".$obat['id_obat']."' aria-hidden='true'>
					<div class='modal-dialog modal-lg' role='document'>
						<div class='modal-content'>
						<div class='modal-header'>
							<h5 class='modal-title'>".$obat['namaObat']."</h5>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
						</div>
						<div class='modal-body'>
							<div class='container'>
								<div class='row'>
									<div class='col-md-6'>
										<h5 style='font-size:16px;'>Deskripsi</h5>
										<p>".$obat['deskripsi']."</p>
										<h5 style='font-size:16px;'>Aturan Pakai</h5>
										<p>".$obat['deskripsi']."</p>
									</div>
									<div class='col-md-6'>
										<h5 style='font-size:16px;'>Efek Samping</h5>
										<p>".$obat['deskripsi']."</p>
										<h5 style='font-size:16px;'>Penyakit Terkait</h5>";
										foreach($dataRelasiObat as $relObat2){
											if($obat['id_obat'] == $relObat2['id_obat']){
												foreach($dataPenyakit as $penyakit2){
													if($penyakit2['id_penyakit'] == $relObat2['id_penyakit']){
														echo"<a>".$penyakit2['nama_penyakit']."</a>";
													}
												}
												
											}
										}
									echo"</div>
								</div>
								<a style='font-style:italic; font-size:12px; color:grey;'><i class='fa fa-info-circle'></i> Terakhir diperbarui ".$obat['lastUpdate']."</a>
							</div>
						</div>
						</div>
					</div>
					</div>";
				}
			}
		}
		?>

		<?php
			foreach($dataKMS as $kms){
				echo"<!-- Modal -->
				<div class='modal fade' id='detailKMS".$kms['id_kms']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
				<div class='modal-dialog modal-lg' role='document'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title' id='exampleModalLongTitle'>Kartu Menuju Sehat</h5>
						<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>
					<div class='modal-body'>
						<div class='container'>
							<div class='row'>
								<table class='table table-striped'>
									<thead>
									<tr>
										<th scope='col-sm' class='w-25'>Nama Anak</th>
										<th scope='col-md'>".$kms['namaAnak']."</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<th scope='row'>Jenis Kelamin</th>
										<td>".$kms['jenisKelamin']."</td>
									</tr>
									<tr>
										<th scope='row'>Umur</th>
										<td> thn</td>
									</tr>
									<tr>
										<th scope='row'>Tinggi</th>
										<td>".$kms['tinggi']."</td>
									</tr>
									<tr>
										<th scope='row'>Berat</th>
										<td>".$kms['berat']."</td>
									</tr>
									</tbody>
								</table>

								<div class='col-md'>
									<p style='font-weight:500;'>Berat badan menurut umur ".$kms['jenisKelamin']."</p>
									<!--Diagram-->
								</div>
								<div class='col-md'>
									<p style='font-weight:500;'>Tinggi badan menurut umur ".$kms['jenisKelamin']."</p>
									<!--Diagram-->
								</div>
							</div>
						</div>
					</div>
					<div class='modal-footer'>
						<p style='float: left; font-size: 13px; color:grey;'><i class='fa fa-info-circle'></i> Umur 16 hari keatas akan dibulatkan menjadi 1 bulan.</p>
					</div>
					</div>
				</div>
				</div>";
			}
		?>

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

				let button2 = document.querySelector("#hitungCal");
			
				// Function for calculating daily calorie
				button2.addEventListener("click", calculateCal);
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
			function calculateCal() {
				let tinggi2 = parseInt(document.querySelector("#tinggiCal").value);
				let berat2 = parseInt(document.querySelector("#beratCal").value);
				let usia = parseInt(document.querySelector("#umurCal").value);
				let aktivitas = parseInt(document.querySelector("#aktivitasCal").value);
				let jKelamin = parseInt(document.querySelector("#jKelaminCal").value);

				let result2 = document.querySelector("#hasilCal");
				if(aktivitas=="1"){
					aktivitas = 1.2;
				} else if(aktivitas=="2"){
					aktivitas = 1.4;
				} else if(aktivitas=="3"){
					aktivitas = 1.6;
				} else if(aktivitas=="4"){
					aktivitas = 1.8;
				} else {
					aktivitas = 2;
				}

				
				if(jKelamin == '1'){
					let total = (((88.4 + 13.4 * berat2) + (4.8 * tinggi2) - (5.68 * usia)) * aktivitas).toFixed(0);
					result2.innerHTML = `<span>${total} Cal</span>`;
				} else if(jKelamin == '2'){
					let total = (((447.6 + 9.25 * berat2) + (3.10 * tinggi2) - (4.33 * usia)) * aktivitas).toFixed(0);
					result2.innerHTML = `<span>${total} Cal</span>`;
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

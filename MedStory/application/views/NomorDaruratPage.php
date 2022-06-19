<!DOCTYPE html>
<html>
    <head>
        <title>MedStory | Darurat</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
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
			p {
				font-size:14px;
			}

			/*Accordion praktik dokter.*/
			#accordionDoctor .btn.btn-primary{
				background-color: transparent; 
				border:none; 
				margin-bottom:1%; 
				max-width:120px; 
				max-height:120px;
			}
			#accordionDoctor .btn.btn-primary img{
				width:60px; 
				border: 2.5px solid #4183D7;
			}
			#accordionDoctor .btn.btn-primary h5{
				font-size:14px; 
				color:#4183D7; 
				white-space: nowrap;
			}

			/*Message Info.*/
			#msgNoDokter1{
				font-style:italic; 
				text-align:center; 
				color:grey;
			}
			#imgNoDokter{
				display: block;
				margin-left: auto; 
				margin-right: auto; 
				width: 200px;
			}

			/*Carousel.*/
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
			.carousel .thumb-wrapper {
				padding: 15px 10px;
				background: #fff;
				border-radius: 6px;
				text-align: center;
				position: relative;
				box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			}
			.carousel .item .img-box {
				height: 120px;
				margin-bottom: 10px;
				width: 100%;
				position: relative;
			}
			.carousel .item img {	
				display: inline-block;
				position: absolute;
				bottom: 0;
				margin: 0 auto;
				left: 0;
				right: 0;
			}
			.carousel .item h4 {
				font-size: 18px;
			}
			.carousel .item h4, .carousel .item p, .carousel .item ul {
				margin-bottom: 5px;
			}
			.carousel .thumb-content .btn {
				color: #7ac400;
				font-size: 11px;
				text-transform: uppercase;
				font-weight: bold;
				background: none;
				border: 1px solid #7ac400;
				padding: 6px 14px;
				margin-top: 5px;
				line-height: 16px;
				border-radius: 20px;
			}
			.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
				color: #fff;
				background: #7ac400;
				box-shadow: none;
			}
			.carousel .thumb-content .btn i {
				font-size: 14px;
				font-weight: bold;
				margin-left: 5px;
			}
			.carousel .item-price {
				font-size: 13px;
				padding: 2px 0;
			}
			.carousel .item-price strike {
				opacity: 0.7;
				margin-right: 5px;
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

			/*Card information hover.*/
			.col-md-6 .row .col-sm .card:hover {
				height : 210px;  
				background-color : #22A7F0;
				color:white;
			}
			.col-md-6 .row .col-sm .card {
				position: relative;
				height : 150px;  
				border-radius: 6px; 
				text-align: center;
				display : flex;
				flex-direction : column;
				box-shadow : 0 5px 20px rgba(0,0,0,0.5);
				transition : 0.3s ease-in-out;
				padding:10px;
				box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			}
			.col-md-6 .row .col-sm .card #content2 {
				position : relative;
				padding : 5px;
				color : whitesmoke;
				text-align : center;
				visibility : hidden;
				opacity : 0;
				transition : 0.3s ease-in-out;	
			}
			.col-md-6 .row .col-sm .card:hover #content2 {
				margin-top : 2px;
				visibility : visible;
				opacity : 1;
				transition-delay: 0.2s;
			}
			.row .col-sm .thumb-wrapper:hover {
				background-color : #22A7F0;
				color:white;
			}
			.row .col-sm .thumb-wrapper:hover h6 {
				color:white;
			}
		</style>
    </head>
	
    <body>
		<!--Main Navigation menu.-->
		<div id="Navigation">
			<ul>
				<img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
				<li><a href="smartDoc">SmartDoc</a></li>
				<li><a href="history">Forum</a></li>
				<li><a href="dataKu">Dataku</a></li>
				<li id="active"><a href="nomorDarurat">Darurat</a></li>
				<li style="float:right"><button data-toggle="modal" data-target="#signOutModal" type="submit" class='btn btn-danger' style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></li>
				<li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
				<div id="ddParent">
					<button id="dropbutton"><img width="30" src="http://localhost/MedStory/assets/Setting.png"></button>
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
			<img src='http://localhost/MedStory/assets/Back.png' width='35px' style="transform: rotate(90deg);">
		</button>

		<!--Content.-->
		<br><br><br>
		<div class="container bg-white mb-2 mt-2 p-3" style="border-radius: 10px;">
			<div id="accordion">
				<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">
					<i class="fa-solid fa-hospital"></i> Fasilitas Kesehatan</button>
				<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
					<i class="fa-solid fa-stethoscope"></i> Praktek Dokter</button>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<!--Fasilitas kesehatan.-->
						<div class="collapse show" id="multiCollapseExample1" data-parent="#accordion">
							<div class="container">
								<h5>Fasilitas Kesehatan</h5>
								<?php
									$i = 1; //Make collapse unique.
									$status = ' show'; //Initial class.
									foreach($dataFaskes as $data){ echo"
										<div id='accordion2'>
											<div class='card m-3' style='border-radius:6px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:0;'>
												<div class='card-header' id='headingOne' style='border-width:1px; border-radius:6px; background:white;'> 
													<h5 class='mb-0'>
														<h5>".$data['namaFaskes']."</h5>
														<div class='container'>
															<h3 style='font-size:18px; float:right;'>".$data['rating']."</h3>
															<img src='http://localhost/MedStory/assets/Rating.png' width='20px' height='20px' alt='rating' style='float:right;'>
														</div>
														<h5 style='font-size:14px; color:#808080; font-weight: 400;'><i class='fa-solid fa-location-dot'></i> ".$data['alamat']."</h5>
														<h5 style='font-size:14px; color:#808080; font-weight: 400;'><i class='fa-solid fa-phone'></i> ".$data['kontak']."</h5>
													</h5>
													<h5 style='font-size:14px; float:left; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapseOne'>Detail
														<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
												</div>
												<!--Extend-->
												<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordion2'>
													<div class='card-body'>
														<div class='container'>
															<div class='row'>
																<div class='col-md-6'>
																	<div class='row'>
																		<div class='col-md-8'>
																			<img src='http://localhost/MedStory/assets/faskesImage/faskes".$data['id_faskes'].".jpeg' width='320' height='170' style='border-radius:6px;' alt=''><hr>
																		</div>
																		<div class='col-md-4'>
																			<button class='btn btn-success m-2' data-toggle='modal' data-target='#loc".$data['id_faskes']."'><i class='fa-solid fa-location-dot'></i> Lihat Lokasi</button>
																			<form class='form-inline' action='nomorDarurat/copyCoor' method='post'>
																				<button class='btn btn-primary m-2' type='submit' onclick='locationCopy".$data['id_faskes']."()'><i class='fa-solid fa-copy'></i> Dapatkan Kordinat</button>
																			</form>
																		</div>
																	</div>
																	<input type='text' value='".$data['kordinat']."' id='myInput".$data['id_faskes']."' hidden>
																	<h5 class='font-weight-w500'><img width='30' src='http://localhost/MedStory/assets/icon/poliklinik.png'> Poliklinik</h5>                        
																	<p>".$data['poliklinik']."</p>
																</div>
																<div class='col-md-6'>
																	<h5 class='font-weight-w500'><img width='30' src='http://localhost/MedStory/assets/icon/fasilitas.png'> Fasilitas</h5>
																	<p>".$data['fasilitas']."</p>
																	<h5 class='font-weight-w500'><img width='30' src='http://localhost/MedStory/assets/icon/Covid.png'> Penanganan Covid</h5>
																	<div class='row'>";
																		$c = 0; //Check if data is empty.
																		foreach ($dataCovid as $covid){
																			if($covid['id_faskes'] == $data['id_faskes']){										
																				echo"<div class='col-sm'  style='max-width:180px;'>
																					<div class='card'>";
																						if($covid['jenis'] == 'Vaksinasi'){	
																						echo"<img src='http://localhost/MedStory/assets/icon/Vaccine.gif' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;
																							margin-left:10%;'>";
																						} else if(($covid['jenis'] == 'Antigen & PCR') || ($covid['jenis'] == 'PCR') || ($covid['jenis'] == 'Antigen')){	
																						echo"<img src='http://localhost/MedStory/assets/icon/Test.gif' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;
																							margin-left:10%;'>";
																						} else if($covid['jenis'] == 'Karantina'){	
																						echo"<img src='http://localhost/MedStory/assets/icon/Quarantine.gif' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;
																							margin-left:10%;'>";
																						}
																						echo"<a style='font-size: 14px;'>".$covid['jenis']."</a>
																						<div id = 'content2'>
																							<p style='margin:-5px; font-size:14px; font-weight:bold;'>".$covid['hariPraktik']." </p>
																							<a style='font-style:italic; font-size:12px;'>".$covid['jamMulai']." - ".$covid['jamSelesai']."</a>
																						</div>
																					</div>								
																				</div>";
																				$c++;
																			}
																		}
																		if($c == 0){
																			echo "<div class='container m-2'>
																				<p id='msgNoDokter1'>Maaf, tidak ada fasilitas penanganan covid di faskes ini</p>
																				<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Not Found.png' style='display: block;
																					margin-left: auto; margin-right: auto; width: 200px;'>
																				<p style='font-style:italic; text-align:center; font-size:15px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
																			</div>";
																		}
																	echo"</div>
																</div>";

																$jml = 0; //Count item.
																foreach ($dataPraktik as $dataDokter){
																	if ($dataDokter['lokasi'] == $data['namaFaskes']){
																		$jml++;
																	} 
																}
																if ($jml > 0){ 
																	echo"<!--List dokter.-->
																	<div class='col-md'>
																		<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter</h5>
																		<div id='myCarousel".$i."' class='carousel slide' data-ride='carousel' data-interval='0'>
																		<!-- Carousel indicators -->
																		<ol class='carousel-indicators'>";
																		$item = 0; //Count item.
																		$page = 0; //Count page.
																		$z = 3; //Set max item per page.
																		foreach ($dataPraktik as $dataDokter){
																			if ($dataDokter['lokasi'] == $data['namaFaskes']){
																				if($item == 0 && $page == 0){
																					echo"<li data-target='#myCarousel".$i."' data-slide-to='0' class='active'></li>";
																					$item++;
																					$page++;
																				} else if ($item % $z == 0){
																					echo"<li data-target='#myCarousel".$i."' data-slide-to='".$page."'></li>";
																					$item++;
																					$page++;
																				} else if ($item % $z != 0){
																					$item++;
																				}
																			}
																		}
																		echo"</ol>   

																		<!-- Wrapper for carousel items -->
																		<div class='carousel-inner'>";
																			$k = 1; //Count item.
																			$z = 4; //Set max item per page.
																			$state = ' active'; //Initial class.
																			foreach ($dataPraktik as $dataDokter2){
																				if ($dataDokter2['lokasi'] == $data['namaFaskes']){
																					if($k % $z == 0  || $k == 1){
																						echo"<div class='item carousel-item".$state."' >
																						<div class='row' style='margin:20px;'>";
																					}
																					echo"<div class='col-sm mb-2' style='max-width:280px;'>
																						<div class='thumb-wrapper'>
																							<h6>".$dataDokter2['spesialis']."</h6>
																							<div class='img-box'>
																								<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																							</div>
																							<div class='thumb-content'>
																								<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																								<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																								<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																							</div>						
																						</div>
																					</div>";
																					
																					$k++;
																					$state = ' ';
																					if($k % $z == 0){
																						echo"</div>
																					</div>";
																					}
																				}
																			}
																		echo"</div>
																		</div></div></div>
																		<!-- Carousel controls -->
																		<a class='carousel-control-prev' href='#myCarousel".$i."' data-slide='prev'>
																			<i class='fa fa-angle-left'></i>
																		</a>
																		<a class='carousel-control-next' href='#myCarousel".$i."' data-slide='next'>
																			<i class='fa fa-angle-right'></i>
																		</a>
																	</div>";
																} else {
																	echo "<div class='container mt-1 mb-1'>
																		<p id='msgNoDokter1'>Maaf, tidak ada dokter yang terdaftar di fasilitas ini</p>
																		<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' style='display: block;
																			margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
																		<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
																	</div>";
																}
															
															echo"</div>
														</div>
													</div>
												</div>
											</div>
										</div>";
										$i++;
										$status = ' ';
									}
								?>
							</div>
						</div>
					</div><!--End of col faskes.-->

					<div class="col-md-12">
						<!--Dokter praktik.-->
						<div class="collapse" id="multiCollapseExample2" data-parent="#accordion">
							<div class="container">
								<h5>Praktek Dokter</h5>
								<div id="accordionDoctor">
									<!--Collapse control dokter-->
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDUmum' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/Doctor.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Umum</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDAnak' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DAnak.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Anak</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDGigi' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DGigi.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Gigi</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDMata' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DMata.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Mata</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDKulit' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DKulit.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Kulit & Kelamin</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDOrtopedi' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DOrtopedi.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>Ortopedi</h5>
									</button>
									<button class='btn btn-primary' data-toggle='collapse' data-target='#collapseDTHT' aria-expanded='false' 
									aria-controls='multiCollapseExample2'>
										<img src='http://localhost/MedStory/assets/icon/DTHT.png' alt='Card image cap' class='rounded-circle img-fluid'>
										<h5>THT</h5>
									</button>

									<!--Dokter collapse item.-->
									<div class='collapse show' id='collapseDUmum' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php 
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter umum?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'Umum'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Umum</h5>
													<div id='carouselUmum' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'Umum'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselUmum' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselUmum' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'Umum'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselUmum' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselUmum' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDAnak' data-parent='#accordionDoctor'>
										<div class='container'>	
											<?php 
												echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter anak?</h5>                        
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												"; 
												$jml = 0; //Count item.
												foreach ($dataPraktik as $dataDokter){
													if ($dataDokter['spesialis'] == 'Anak'){
														$jml++;
													} 
												}
												if ($jml > 0){ 
													echo"<!--List dokter.-->
													<div class='col-md'>
														<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Anak</h5>
														<div id='carouselAnak' class='carousel slide' data-ride='carousel' data-interval='0'>
														<!-- Carousel indicators -->
														<ol class='carousel-indicators'>";
														$item = 0; //Count item.
														$page = 0; //Count page.
														$z = 3; //Set max item per page.
														foreach ($dataPraktik as $dataDokter){
															if ($dataDokter['spesialis'] == 'Anak'){
																if($item == 0 && $page == 0){
																	echo"<li data-target='#carouselAnak' data-slide-to='0' class='active'></li>";
																	$item++;
																	$page++;
																} else if ($item % $z == 0){
																	echo"<li data-target='#carouselAnak' data-slide-to='".$page."'></li>";
																	$item++;
																	$page++;
																} else if ($item % $z != 0){
																	$item++;
																}
															}
														}
														echo"</ol>   

														<!-- Wrapper for carousel items -->
														<div class='carousel-inner'>";
															$k = 1; //Count item.
															$state = ' active'; //Initial class.
															$x = 4; //Set max item per page.
															foreach ($dataPraktik as $dataDokter2){
																if ($dataDokter2['spesialis'] == 'Anak'){
																	if($k % $x == 0  || $k == 1){
																		echo"<div class='item carousel-item".$state."' >
																		<div class='row' style='margin:20px;'>";
																	}
																	echo"<div class='col-sm md-2' style='max-width:280px;'>
																		<div class='thumb-wrapper'>
																			<div class='img-box'>
																				<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																			</div>
																			<div class='thumb-content'>
																				<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																				<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																				<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																			</div>						
																		</div>
																	</div>";
																	
																	$k++;
																	$state = ' ';
																	if($k % $x == 0){
																		echo"</div>
																	</div>";
																	}
																}
															}
																echo"</div>
																</div>
															</div>
														</div>
														<!-- Carousel controls -->
														<a class='carousel-control-prev' href='#carouselAnak' data-slide='prev'>
															<i class='fa fa-angle-left'></i>
														</a>
														<a class='carousel-control-next' href='#carouselAnak' data-slide='next'>
															<i class='fa fa-angle-right'></i>
														</a>
													</div>";
												} else {
													echo "<div class='container mt-1 mb-1'>
														<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
														<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
													</div>";
												}
											?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDGigi' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter gigi?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'Gigi'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Gigi</h5>
													<div id='carouselGigi' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'Gigi'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselGigi' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselGigi' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'Gigi'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselGigi' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselGigi' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDMata' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php 
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter mata?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'Mata'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Mata</h5>
													<div id='carouselMata' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'Mata'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselMata' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselMata' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'Mata'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselMata' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselMata' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDKulit' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php 
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter kulit & kelamin?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'Kulit'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Kulit & Kelamin</h5>
													<div id='carouselKulit' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'Kulit'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselKulit' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselKulit' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'Kulit'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselKulit' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselKulit' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDTHT' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php 
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter THT?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'THT'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter THT & Kelamin</h5>
													<div id='carouselTHT' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'THT'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselTHT' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselTHT' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'THT'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselTHT' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselTHT' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

									<div class='collapse' id='collapseDOrtopedi' data-parent='#accordionDoctor'>
										<div class='container'>	
										<?php 
											echo"<h5 class='font-weight-w500'>Kapankah saya harus berobat ke dokter ortopedi?</h5>                        
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											"; 
											$jml = 0; //Count item.
											foreach ($dataPraktik as $dataDokter){
												if ($dataDokter['spesialis'] == 'Ortopedi'){
													$jml++;
												} 
											}
											if ($jml > 0){ 
												echo"<!--List dokter.-->
												<div class='col-md'>
													<h5 class='font-weight-w500' style='text-align:center;'><img width='30' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter Ortopedi & Kelamin</h5>
													<div id='carouselOrtopedi' class='carousel slide' data-ride='carousel' data-interval='0'>
													<!-- Carousel indicators -->
													<ol class='carousel-indicators'>";
													$item = 0; //Count item.
													$page = 0; //Count page.
													$z = 3; //Set max item per page.
													foreach ($dataPraktik as $dataDokter){
														if ($dataDokter['spesialis'] == 'Ortopedi'){
															if($item == 0 && $page == 0){
																echo"<li data-target='#carouselOrtopedi' data-slide-to='0' class='active'></li>";
																$item++;
																$page++;
															} else if ($item % $z == 0){
																echo"<li data-target='#carouselOrtopedi' data-slide-to='".$page."'></li>";
																$item++;
																$page++;
															} else if ($item % $z != 0){
																$item++;
															}
														}
													}
													echo"</ol>   

													<!-- Wrapper for carousel items -->
													<div class='carousel-inner'>";
														$k = 1; //Count item.
														$state = ' active'; //Initial class.
														$x = 4; //Set max item per page.
														foreach ($dataPraktik as $dataDokter2){
															if ($dataDokter2['spesialis'] == 'Ortopedi'){
																if($k % $x == 0  || $k == 1){
																	echo"<div class='item carousel-item".$state."' >
																	<div class='row' style='margin:20px;'>";
																}
																echo"<div class='col-sm md-2' style='max-width:280px;'>
																	<div class='thumb-wrapper'>
																		<div class='img-box'>
																			<img src='http://localhost/MedStory/assets/uploads/dokter/".$dataDokter2['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; height:100px;'>								
																		</div>
																		<div class='thumb-content'>
																			<h5 style='color:#212121; font-size:16px;'>".$dataDokter2['namaDokter']."</h5>									
																			<p class='item-price'>".$dataDokter2['hariPraktik']."</p>
																			<p class='item-price'>".$dataDokter2['jamMulai']." - ".$dataDokter2['jamSelesai']."</p>
																		</div>						
																	</div>
																</div>";
																
																$k++;
																$state = ' ';
																if($k % $x == 0){
																	echo"</div>
																</div>";
																}
															}
														}
															echo"</div>
															</div>
														</div>
													</div>
													<!-- Carousel controls -->
													<a class='carousel-control-prev' href='#carouselOrtopedi' data-slide='prev'>
														<i class='fa fa-angle-left'></i>
													</a>
													<a class='carousel-control-next' href='#carouselOrtopedi' data-slide='next'>
														<i class='fa fa-angle-right'></i>
													</a>
												</div>";
											} else {
												echo "<div class='container mt-1 mb-1'>
													<p id='msgNoDokter1'>Maaf, kami tidak menemukan dokter disekitar sini</p>
													<img src='http://localhost/MedStory/assets/icon/NoDoctor.gif' alt='Not Found.png' id='imgNoDokter'>
												</div>";
											}
										?>
										</div>
									</div><!--End of collapse.-->

								</div><!--End of dokter accordion-->

							</div>
						</div>
					</div><!--End of col dokter.-->

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

		<!-- Zoom location modal -->
		<?php 
		$i = 1; 
		foreach($dataFaskes as $data){
			echo"<div class='modal fade' id='loc".$data['id_faskes']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog modal-xl' role='document'>
					<div class='modal-content'>
						<div class='modal-header'>
							<h4>".$data['namaFaskes']."</h4>
							<img type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/MedStory/assets/Error.png'
								width='30px'>
						</div>
						<div class='modal-body'>
							<div id='googleMap".$data['id_faskes']."' style='width:100%;height:500px; border-radius:10px;'></div>
						</div>			
					</div>
				</div>
			</div>";	
		}
		?>

		<!-- Success copy modal -->
		<?php if(isset($success_copy)) { 
			echo"<div class='modal fade' id='succescopy' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<img type='button' data-dismiss='modal' class='closebtn' aria-label='Close' src='http://localhost/MedStory/assets/Error.png' onClick='refreshMessage()'
						width='30px'>
				</div>
				<div class='modal-body'>
					<img src='http://localhost/MedStory/assets/icon/success.png' alt='success.png' style='display: block;
						margin-left: auto; margin-right: auto; width: 120px;'>
					<p style='text-align:center; font-weight:bold;'>".$success_copy."</p>
				</div>		
				</div>
			</div>
			</div>";
		}	
		?>

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

			//Refresh page.
			function refreshMessage() {
				window.location.href="http://localhost/MedStory/nomorDarurat";  
			}

			//Maps API.
			function myMap() {
				<?php
					//Maps coordinate initialization.
					foreach($dataFaskes as $data){
						echo"
						var mapProp".$data['id_faskes']."= {
							center:new google.maps.LatLng(".$data['kordinat']."),
							zoom:15,
						};
						var map".$data['id_faskes']." = new google.maps.Map(document.getElementById('googleMap".$data['id_faskes']."'),mapProp".$data['id_faskes'].");
						";
					}
				?>

				var markers = [
				<?php
					//Maps popover.
					foreach($dataFaskes as $data){
						$coor  = $data['kordinat'];
						$newCoor = explode(", ", $coor);
						echo"{
							coords:{lat:".$newCoor[0].",lng:".$newCoor[1]."},
							content:'<div><h4>".$data['namaFaskes']."</h4><p>".$data['kontak']."</p><hr><h6>Fasilitas</h6><p>".$data['fasilitas']."</p><h6>Poliklinik</h6><p>".$data['poliklinik']."</p></div>'
						},";
					}
				?>
				];

				//Maps marker initialization.				
				<?php
					foreach($dataFaskes as $data){
						echo"
						for(var i = 0;i < markers.length;i++){
							// Add marker
							addMarker".$data['id_faskes']."(markers[i]);
						}

						function addMarker".$data['id_faskes']."(props){
							var marker = new google.maps.Marker({
								position:props.coords,
								map:map".$data['id_faskes'].",
							});

							if(props.iconImage){
								marker.setIcon(props.iconImage);
							}

							if(props.content){
								var infoWindow = new google.maps.InfoWindow({
								content:props.content
							});

							marker.addListener('click', function(){
								infoWindow.open(map".$data['id_faskes'].", marker);
							});
							}
						}";
					}
				?>
			}
			<?php
				//Copy coordinat to clipboard.
				foreach($dataFaskes as $data){
					echo"
					function locationCopy".$data['id_faskes']."(){
						var copyText = document.getElementById('myInput".$data['id_faskes']."');

						copyText.select();
						copyText.setSelectionRange(0, 99999); /* For mobile devices */

						navigator.clipboard.writeText(copyText.value);
					}";
				}
			?>	
        </script>

		<!--Maps API Key.-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3sYEsRMczoee26ggngEwT35FEJgymY5g&callback=myMap"></script>

		<!--Other CDN.-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script>
			//Popover & Collapse setting.
			$(document).ready(function(){
				$('.collapsible').click(function(e) {
					e.stopPropagation();
				});
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			})

			//Modal setting.
			$(window).on('load', function() {
				$('#succescopy').modal('show');
			});
			$('#succescopy').modal({
				backdrop: 'static', 
				keyboard: false
			});  
        </script>
    </body>

</html>

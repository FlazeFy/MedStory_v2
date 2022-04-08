<!--Leonardho R Sitanggang
    1302194041  SE-43-03
-->
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
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

		</style>
    </head>
    <body>
			<!--Main Navigation menu.-->
			<div id="Navigation">
				<ul>
					<img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
					<li><a href="smartDoc">SmartDoc</a></li>
					<li><a href="history">Forum</a></li>
					<li><a href="diskusi">Dataku</a></li>
					<li id="active"><a href="nomorDarurat">Darurat</a></li>
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
				<div id="accordion">
					<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2"
						style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Fasilitas Kesehatan</button>
					<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"
						style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Praktek Dokter</button>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="collapse show" id="multiCollapseExample1" data-parent="#accordion">
								<div class="container">
									<h5 style="text-align: left; color:#696969; margin-top:10px;">Fasilitas Kesehatan</h5>
									<?php
										$i = 1; 
										$status = ' show';
										foreach($dataFaskes as $data){ echo"
										<div id='accordion2'>
											<div class='card' style='border-radius:6px; margin:15px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:0;'>
												<div class='card-header' id='headingOne' style='border-width:1px; border-radius:6px; background:white;'> 
													<h5 class='mb-0'>
														<h3 style='font-size:18px;'>".$data['namaFaskes']."</h3>
														<div class='container'>
															<h3 style='font-size:18px; float:right;'>".$data['rating']."</h3>
															<img src='http://localhost/MedStory/assets/Rating.png' width='20px' height='20px' alt='rating' style='float:right;'>
														</div>
														<h5 style='font-size:14px; color:#212121;'>".$data['alamat']."</h5>
														<h5 style='font-size:14px; color:#212121;'>".$data['kontak']."</h5>
													</h5>
													<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapseOne'>Detail
														<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
												</div>
												<!--Extend-->
												<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordion2'>
													<div class='card-body'>
														<div class='container'>
															<div class='row'>
																<div class='col-md-6'>
																	<img src='http://localhost/MedStory/assets/faskesImage/faskes".$data['id_faskes'].".jpeg' width='350px' height='170px' style='border-radius:6px;' alt=''><hr>
																	<h5 class='font-weight-bold'><img style='width:30px;' src='http://localhost/MedStory/assets/icon/fasilitas.png'> Fasilitas</h5>                        
																	<p>".$data['fasilitas']."</p>
																</div>
																<div class='col-md-6'>
																	<h5 class='font-weight-bold'><img style='width:30px;' src='http://localhost/MedStory/assets/icon/poliklinik.png'> Poliklinik</h5>
																	<p>".$data['poliklinik']."</p>

																</div>";

																$jml = 0;
																foreach ($dataPraktik as $dataDokter){
																	if ($dataDokter['lokasi'] == $data['namaFaskes']){
																		$jml++;
																	} 
																}
																if ($jml > 0){ 
																	echo"<!--List dokter.-->
																	<div class='col-md'>
																		<h5 class='font-weight-bold' style='text-align:center;'><img style='width:30px;' src='http://localhost/MedStory/assets/icon/Doctor.png'> Dokter</h5>
																		<div id='myCarousel".$i."' class='carousel slide' data-ride='carousel' data-interval='0'>
																		<!-- Carousel indicators -->
																		<ol class='carousel-indicators'>";
																		$item = 0;
																		$page = 0;
																		foreach ($dataPraktik as $dataDokter){
																			if ($dataDokter['lokasi'] == $data['namaFaskes']){
																				if($item == 0 && $page == 0){
																					echo"<li data-target='#myCarousel".$i."' data-slide-to='0' class='active'></li>";
																					$item++;
																				} else if ($item % 3 == 0){
																					echo"<li data-target='#myCarousel".$i."' data-slide-to='".$page."'></li>";
																					$item++;
																					$page++;
																				} else if ($item % 3 != 0){
																					$item++;
																				}
																			}
																		}
																		echo"</ol>   

																		<!-- Wrapper for carousel items -->
																		<div class='carousel-inner'>";
																			$k = 1;
																			$state = ' active';
																			foreach ($dataPraktik as $dataDokter2){
																				if ($dataDokter2['lokasi'] == $data['namaFaskes']){
																					if($k % 4 == 0  || $k == 1){
																						echo"<div class='item carousel-item".$state."' >
																						<div class='row' style='margin:20px;'>";
																					}
																				echo"<div class='col-sm' style='max-width:280px;'>
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
																					if($k % 4 == 0){
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
																	echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
																		<p style='font-style:italic; text-align:center; color:grey;'>Maaf, tidak ada dokter yang terdaftar di fasilitas ini</p>
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
										$status = ' ';}
									?>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="collapse" id="multiCollapseExample2" data-parent="#accordion">
								<div class="container">
									<h5 style="text-align: left; color:#696969; margin-top:10px;">Praktek Dokter</h5>
									<?php 
										$j = 1; 
										$status = ' show';
										foreach($dataPraktik as $data){		
											echo"
											<div id='accordion3'>
												<div class='card' style='border-radius:6px; margin:15px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:0;'>
													<div class='card-header' style='border-width:1px; border-radius:6px; background:white;'>
														<img src='http://localhost/MedStory/assets/uploads/dokter/".$data['namaDokter'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:50px; height:50px; float:left; margin-right:10px;'>
														<h3 style='font-size:18px;'>".$data['namaDokter']." - ".$data['spesialis']."</h3>
														<h5 style='font-size:16px; float:right;'>".$data['lokasi']."</h5>
														<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' id='headingOne' data-toggle='collapse' data-target='#collapseB".$j."' 
														style='border-width:1px;' aria-expanded='true' aria-controls='collapseOne'>Detail
															<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>				
													</div>
													<div id='collapseB".$j."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordion3'>
														<div class='card-body'>
															<h5 style='font-size:14px; color:#404040;'>".$data['jamMulai']."-".$data['jamSelesai']."</h5>
															<h5 style='font-size:14px; color:#404040;'>".$data['hariPraktik']."</h5>
														</div>
													</div>
												</div>
											</div>";
										$j++;
										$status = ' ';}
									?>
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

<!--Leonardho R Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MedStory | DataKu</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

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
		</style>
    </head>
    <body>
			<!--Main Navigation menu.-->
			<div id="Navigation">
				<ul>
					<img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
					<li><a href="smartDoc">SmartDoc</a></li>
					<li><a href="history">Forum</a></li>
					<li id="active"><a href="dataKu">Dataku</a></li>
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
				<h5 style="text-align: left; color:#696969;">Statistik Kebutuhan Kalori</h5>	
				<div class='card-body'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-6'>   
								<h4 style='font-size:16px;'>Kebutuhan harian: </h4>
									<?php
									$i = 0;
									foreach($dataUser as $user){
										foreach($dataKebutuhan as $kebutuhan){
											if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
												$i++;
											}
										}
									}                    
									if($i != 0){
										echo "<canvas id='statistikKaloriHarian' style='width:100%;max-width:600px; height:80%; max-height:600px;'></canvas>";
									} else {
										echo "<br><div class='container' style='margin-top:1%; margin-bottom:2%;'>
											<p style='font-style:italic; text-align:center; color:grey;'>Maaf, Kebutuhan harian Anda masih kosong</p>
											<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Empty.png' style='display: block;
												margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
										</div>";
									}
									?>
								<br>
								<h5 style='font-size:14px;'>Kebutuhan harian: <?php
									$hari = 0;
									$i = 0;
									foreach($dataUser as $user){
										foreach($dataKebutuhan as $kebutuhan){
											if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
												$hari += $kebutuhan['kalori'];
												$i++;
											}
										}
									}
									if($i != 0){
										echo $hari/$i;
									} else {
										echo "- ";
									}	
								?> cal</h5> 		
								<h5 style='font-size:14px;'>Terpenuhi harian: <?php
									$asupan = 0;
									$hari = 0;
									$i = 0;
									foreach($dataUser as $user){
										foreach($dataKebutuhan as $kebutuhan){
											if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
												foreach($totalUserKebutuhan as $cal){
													if(($cal['date'] == $kebutuhan['date'])){
														$asupan += $cal['kalori'];
													}
												}
												$hari += $asupan;
												$asupan = 0;
												$i++;
											}
										}
										if($i != 0){
											echo $hari/$i;
											$hari = 0;
										} else {
											echo "- ";
										}									
									}
								?> cal</h5> 							
							</div>
							<div class='col-md-6'>
								<p style='font-size:16px; font-weight:bold;'>Asupan terfavorit: </p> 
								<div class='container-fluid'>
									<?php
									$i = 1;
									foreach($topAsupan as $top){
										foreach($dataAsupan as $asupan){
											if(($i <= 5) && ($top['id_asupan'] == $asupan['id_asupan'])){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-1' style='background:#4183D7; left:10px; top:-5px; height:75px; border-top-left-radius: 6px; border-bottom-left-radius: 6px;'>";
															if($i == 1){
																echo"<i class='fa-solid fa-crown fa-lg' style='color:#fcc40a; margin-top:35px; margin-left:-7px;'></i>";
															} else {
																echo"<h4 style='margin-top:25px; margin-left:-5px; color:white;'>#".$i."</h4>";
															}
														echo"</div>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='asupan['nama']' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>
														</div>
														<div class='col-sm-1' style='margin-top:20px; margin-left:-30px;'>
														<h4>".$top['jumlah']."x </h4>
														</div>
													</div>
												</div>";
												$i++;
											}
										}
									}
									if($i == 1){
										echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
											<p style='font-style:italic; text-align:center; color:grey;'>Maaf, Asupan harian Anda masih kosong</p>
											<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Empty.png' style='display: block;
												margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
										</div>";
									}
									?>
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

			//Statistik kebutuhan kalori
			var xValues = [<?php
				foreach($dataUser as $user){
					foreach($dataKebutuhan as $kebutuhan){
						if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
							echo "'".$kebutuhan['date']."',";
						}
					}
				}
			?>];

			new Chart("statistikKaloriHarian", {
			type: "line",
			data: {
				labels: xValues,
				datasets: [{ 
				data: [<?php
					foreach($dataUser as $user){
						foreach($dataKebutuhan as $kebutuhan){
							if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
								echo "'".$kebutuhan['kalori']."',";
							}
						}
					}
				?>],
				borderColor: "red",
				label: "Kebutuhan",
				fill: true
				}, { 
				data: [<?php
					$asupan = 0;
					foreach($dataUser as $user){
						foreach($dataKebutuhan as $kebutuhan){
							if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
								foreach($totalUserKebutuhan as $cal){
									if(($cal['date'] == $kebutuhan['date'])){
										$asupan += $cal['kalori'];
									}
								}
								echo "'".$asupan."',";
								$asupan = 0;
							}
						}
					}	
				?>],
				borderColor: "green",
				label: "Terpenuhi",
				fill: true
				}]
			},
			options: {
				legend: {display: true}
			}
			});
        </script>

		<script>
			
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
        })
        </script>
    </body>
</html>

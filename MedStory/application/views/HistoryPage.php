<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MedStory | Forum</title>
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
		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>-->
		
		<!-- chartist CSS -->
		<link href="http://localhost/MedStory/assets/css/chartist-js/dist/chartist.min.css" rel="stylesheet">
		<link href="http://localhost/MedStory/assets/css/chartist-js/dist/chartist-init.css" rel="stylesheet">
		<link href="http://localhost/MedStory/assets/css/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


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
			.carousel {
				margin: 10px auto;
				padding: 0 30px;
			}
			.carousel .item {
				color: #808080;
				min-height: 325px;
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
				bottom: 0px;
				z-index: 1;
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
			.carousel-indicators-numbers li {
				text-indent: 0;
				text-align:center;
				margin: 0 5px;
				width: 25px;
				height: 25px;
				border: none;
				border-radius: 5px;
				color: white;
				background: grey;
				transition: all 0.25s ease;
			}
			.carousel-indicators-numbers li.visited, .carousel-indicators-numbers li:hover, .carousel-indicators-numbers li.active {
				margin: 0 5px;
				margin-bottom:5px;
				width: 25px;
				height: 25px;
				border-radius: 5px;
				background-color: rgb(40, 207, 54);
			}
			/*News feed*/
			.row .col-sm .thumb-wrapper{
				height:240px;
			}
			.row .col-sm .thumb-wrapper:hover {
				background-color : #22A7F0;
				color:white;
			}
			.row .col-sm .thumb-wrapper:hover h5 {
				color:white;
			}
			.row .col-sm .thumb-wrapper h5 {
				color:#212121;
			}

			.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 99;
  top: 0;
  left: 0;
  background-color: #4183D7;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  box-shadow: #212121 0px 8px 30px;
}

.sidebar a {
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0px;
  right: 25px;
  margin-left: 50px;
}
.sidebar .bookbtn {
  position: absolute;
  top: 5px;
  left: 25px;
  margin-right: 50px;
}

#main {
  transition: margin-left .5s;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 16px;}
}

/*Donut*/
.circular{
  height:100px;
  width: 100px;
  transform:scale(1);
  margin-bottom:10px;
}
.circular .inner{
  position: absolute;
  z-index: 6;
  top: 50%;
  left: 50%;
  height: 80px;
  width: 80px;
  margin: -40px 0 0 -40px;
  background: #4183D7;
  border-radius: 100%;
 
}
.circular .number{
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index:10;
  font-size:18px;
  font-weight:500;
  color:white;
}
.circular .bar{
  position: absolute;
  height: 100%;
  width: 100%;
  background: #fff;
  -webkit-border-radius: 100%;
  clip: rect(0px, 100px, 100px, 50px);
}
.circle .bar .progress{
  position: absolute;
  height: 100%;
  width: 100%;
  -webkit-border-radius: 100%;
  clip: rect(0px, 50px, 100px, 0px);
  background: <?php 
	$cal = 0;
	foreach($dataUser as $user){
		if($user['namaPengguna'] == $this->session->userdata('userTrack')){	
			foreach($dataKebutuhan as $kebutuhan){
				if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
					$cal = $kebutuhan['kalori'];
				}
			}
		}
	}
	if(($cal <= 1200) && ($user['jKelamin'] == 'Wanita')){
		echo"#22A7F0";
	} else if(($cal > 1200) && ($cal < 1700) && ($user['jKelamin'] == 'Wanita')){
		echo"#29bd04";
	} else if(($cal >= 1700)  && ($cal < 2300) && ($user['jKelamin'] == 'Wanita')){
		echo"#de6000";
	} else if(($cal >= 2300) && ($user['jKelamin'] == 'Wanita')){
		echo"#df4759";

	} else if(($cal <= 1400) && ($user['jKelamin'] == 'Pria')){
		echo"#22A7F0";
	} else if(($cal > 1400) && ($cal < 1900) && ($user['jKelamin'] == 'Pria')){
		echo"#29bd04";
	} else if(($cal >= 1900)  && ($cal < 2500) && ($user['jKelamin'] == 'Pria')){
		echo"#de6000";
	} else if(($cal >= 2500) && ($user['jKelamin'] == 'Pria')){
		echo"#df4759";
	}
  ?>;
}
.circle .left .progress{
  z-index:1;
  animation: left 4s linear both;
}
@keyframes left{
  100%{
    transform: rotate(<?php 
		$cal = 0;
		$deg = 0;
		foreach($dataUser as $user){
			if($user['namaPengguna'] == $this->session->userdata('userTrack')){	
				foreach($dataKebutuhan as $kebutuhan){
					if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
						$cal = $kebutuhan['kalori'];
					}
				}
			}
		}
		if($cal >= 1600){
			echo "180";
		} else {
			$cal = 1600 - $cal;
			$deg = ($cal / 1600) * 100 *1.8;
			echo $deg; 
		}
	?>deg);
  }
}
.circle .right {
  transform: rotate(180deg);
  z-index:3;
 
}
.circle .right .progress{
  animation: right 4s linear both;
  animation-delay:4s;
}
#checkCont {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
#checkCont input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 35px;
  width: 35px;
  background-color: #eee;
  border-radius:6px;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
  border-radius:6px;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 13px;
  top: 8px;
  width: 8px;
  height: 15px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
@keyframes right{
  100%{
    transform: rotate(<?php 
		$cal = 0;
		$deg = 0;
		foreach($dataUser as $user){
			if($user['namaPengguna'] == $this->session->userdata('userTrack')){	
				foreach($dataKebutuhan as $kebutuhan){
					if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
						$cal = $kebutuhan['kalori'];
					}
				}
			}
		}
		if($cal <= 1600){
			echo "0";
		} else {
			$cal = $cal - 1600;
			$deg = ($cal / 1600) * 100 *1.8;
			echo $deg;
		} 
	?>deg);
  }
}
@media screen and (max-width: 800px) {
    .button-text {
        display: none;
    }
}

/*Panduan*/
.row .col-3 .nav.flex-column.nav-pills .nav-link{
	color:#212121;
}
.row .col-3 .nav.flex-column.nav-pills .nav-link.active{
	color:whitesmoke;
	background:#4183D7;
}
.row .col-9 .tab-content .tab-pane.fade.show.active{
	border: 3px solid #4183D7;
	background:white;
	border-radius:3px;
	box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
	padding:10px;
}
		</style>
    </head>
    <body>
		<div id="mySidebar" class="sidebar">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='fa fa-arrow-left'></i></a>
			<div class="d-flex flex-column align-items-center text-center">
				<div class="mt-2" style='width:90%;'>
					<p style="color: whitesmoke;"><?php 
						foreach ($dataUser as $data){
							echo $data['namaLengkap'];
							$birthDate = $data['tanggalLahir'];
						}
						$birthDate = explode("-", $birthDate);
						$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
							? ((date("Y") - $birthDate[0]) - 1)
							: (date("Y") - $birthDate[0]));
						echo " - ".$age;
					?> thn</p>
					<hr style='background:white; margin-top:-7px;'>
				</div>
				<h4 style="color: whitesmoke;">Kebutuhan Kalori</h4>
				<?php
					$cek = 'null';
					foreach($checkKebutuhan as $cek){$cek = 'available';}
					
					if($cek != 'null'){
					echo"<div class='row' style='width:100%;'>
						<div class='col-md-6'>
							<a style='color: whitesmoke; font-size:14px; margin-bottom:5px;'>Detail</a>
							<a style='color: whitesmoke; font-size:13px;'>Tinggi Badan: </a>
							<a style='color: whitesmoke; font-size:14px; font-weight:bold;'>"; foreach($dataUser as $user){echo $user['tinggiBadan']; } echo" Cm</a>
							<a style='color: whitesmoke; font-size:13px;'>Berat Badan: </a>
							<a style='color: whitesmoke; font-size:14px; font-weight:bold;'>"; foreach($dataUser as $user){echo $user['beratBadan']; } echo" Kg</a>
						</div>
						<div class='col-md-6'>
							<a style='color: whitesmoke; font-size:14px; margin-bottom:5px; margin-left:-50px;'>Hari ini</a>
							<!--Diagram-->
							<div class='circular'>
								<div class='inner'></div>
									<div class='number'></div>
									<div class='circle'>
									<div class='bar left'>
										<div class='progress'></div>
									</div>
									<div class='bar right'>
										<div class='progress'></div>
									</div>
								</div>
							</div>
						</div>
					</div>";
					} else {
						echo "<div class='container' style='padding:10px;'>
							<p style='font-style:italic; text-align:center; color:white; font-size:14px;'>Tidak ada data hari ini</p>
							<form action='history/calHarian' method='post'>
							<div class='row' style='margin-bottom:10px;'>
								<div class='col-md-8'>
								<input class='form-control' name='calTotal' type='number' required></input>";
								foreach($dataUser as $userr){
									echo"<input class='form-control' name='id_user' value='".$userr['id_user']."' hidden></input>";
								}
								echo"</div>
								<div class='col-md' style='position:absolute; left:100px;'>
								<button class='btn btn-success' type='submit'><i class='fa fa-plus'></i> Tambah</button>
								</div>
							</div>
							</form>
							<button class='btn btn-info' onclick=window.location.href='smartDoc' title='SmartDoc'><i class='fa fa-calculator'></i> Hitung Kalori</button>
						</div>";
					}	
				?>
				<div class='container-fluid bg-white' style='height:<?php 
					$cek = 'null';
					foreach($checkKebutuhan as $cek){$cek = 'available';}if($cek != 'null'){echo"380px";}else{echo"370px";}
					?>; padding:5px;'>
					<!--Control section-->
					<?php
						$cek = 'null';
						foreach($checkKebutuhan as $cek){$cek = 'available';}
						
						if($cek != 'null'){
							echo"<button class='btn btn-success' style='float:right;' title='Reset' data-toggle='modal' data-target='#hapusSemuaAsupan'><i class='fa fa-refresh'></i></button>
							<button class='btn btn-info' style='background:#22A7F0;' href='#myCarouseCal' data-slide='prev' title='Kemarin'>
								<i class='fa fa-angle-left'></i>
							</button>
							<button class='btn btn-info' style='background:#22A7F0;' href='#myCarouselCal' data-slide='next' title='Besok'>
								<i class='fa fa-angle-right'></i>
							</button>
							<button class='btn btn-primary' data-toggle='modal' data-target='#asupanModal' style='float:left;";  
							//Memeriksa jika kalori telah cukup. Akan menampilkan button berbeda.
							$totalCalW = 0; $calorie = 0; $ket = 0;
							foreach($totalUserKebutuhan as $calWaktu){
								$totalCalW += $calWaktu['kalori'];
							}
							foreach($dataKebutuhan as $kebutuhan){
								if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
									$calorie = $kebutuhan['kalori'];
								}
							}
							$ket = $calorie-$totalCalW;
							if($ket <= 0){
								echo"color:white; background:#d9534f; border:none;";
							} else {
								echo"border-color:#22A7F0; color:#22A7F0; background:white;";
							}
							echo"border-width:2px;'><i class='fa fa-plus'></i> Tambah asupan</button>";
						}
					?>
					<div class='row' style='width:100%; height:20px; margin-top:5px;'>
						<div class='col border-right'>
							<a style="font-size:13px;">Total : 
							<?php
								$cek = 'null';
								$totalCalW=0;
								foreach($checkKebutuhan as $cek){$cek = 'available';}
								
								if($cek != 'null'){
									foreach($totalUserKebutuhan as $calWaktu){
										$totalCalW += $calWaktu['kalori'];}
									echo $totalCalW;
								} else {
									echo " - ";
								}	
							echo" </a>
						</div>
						<div class='col'>
							<a style='font-size:13px;'>Sisa : ";
								$total = 0;
								$calorie = 0;
								$cek2 = 'null';
								foreach($checkKebutuhan as $cek){$cek2 = 'available';}
								
								if($cek2 != 'null'){
									foreach($dataKebutuhan as $kebutuhan){
										if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
											$calorie = $kebutuhan['kalori'];
										}
									}
									echo $calorie-$totalCalW," cal";
								} else {
									echo " - ";
								}								
							?> </a>
						</div>
					</div>
					<hr style="margin-top:7px;">
					<!--Item section-->
					<a style='font-size:15px; margin-top:-10px;'>Hari ini</a>
					<div class='container-fluid' style='width:100%; max-height: calc(60vh - 160px); overflow-x: auto;'>
					<?php
						$cek = 'null';
						foreach($checkKebutuhan as $cek){$cek = 'available';}
						
						if($cek == 'available'){
							foreach($dataUser as $user){
								if($user['namaPengguna'] == $this->session->userdata('userTrack')){
									echo"<a style='font-size:13px; color:#808080; text-align:left;'>Pagi ~ "; $totalCalW=0; foreach($totalUserKebutuhan as $calWaktu){if($calWaktu['waktu'] == 'pagi'){
										$totalCalW += $calWaktu['kalori'];}} echo $totalCalW." cal </a>";
									foreach($dataJadwal as $cal){
										if(($cal['id_user'] == $user['id_user'])&&($cal['date'] == date("Y-m-d"))&&($cal['waktu'] == 'pagi')){
											foreach($dataAsupan as $asupan){
												if($cal['id_asupan'] == $asupan['id_asupan']){
													echo"<!--Item-->
													<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
														margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
														else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
														else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
														<div class='row' style='width:100%;'>
															<div class='col'>
																<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																	style='width:75px; height:60px; border-radius:4px; margin-left:-5px; margin-top:3px;'>
															</div>
															<div class='col' style='left:-35px; margin-left:5px;'>
																<a style='font-size:13px; color:#22A7F0; text-align:left; position:absolute; white-space: nowrap;'>".$asupan['nama']."</a>
																<a style='font-size:12px; color:#808080; text-align:left; position:absolute; top:20px;'>".$asupan['kategori']."</a>
																<a style='font-size:13px; text-align:left; position:absolute; top:40px;'>".$asupan['kalori']." cal</a>
															</div>
															<div class='row' style='left:30px; height:40px; margin-top:10px;'>
																<button class='btn btn-danger' style='margin:3px;' title='Hapus' data-toggle='modal' data-target='#hapusAsupan".$cal['id_jadwal']."'><i class='fa fa-trash'></i></button>
															</div>
														</div>
													</div>";
												}
											}
										}
									}
									echo"<a style='font-size:13px; color:#808080; text-align:left;'>Siang ~ "; $totalCalW=0; foreach($totalUserKebutuhan as $calWaktu){if($calWaktu['waktu'] == 'siang'){
										$totalCalW += $calWaktu['kalori'];}} echo $totalCalW." cal </a>";
									foreach($dataJadwal as $cal2){
										if(($cal2['id_user'] == $user['id_user'])&&($cal2['date'] == date("Y-m-d"))&&($cal2['waktu'] == 'siang')){
											foreach($dataAsupan as $asupan){
												if($cal2['id_asupan'] == $asupan['id_asupan']){
													echo"<!--Item-->
													<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
														margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
														else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
														else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
														<div class='row' style='width:100%;'>
															<div class='col'>
																<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																	style='width:75px; height:60px; border-radius:4px; margin-left:-5px; margin-top:3px;'>
															</div>
															<div class='col' style='left:-35px; margin-left:5px;'>
																<a style='font-size:13px; color:#22A7F0; text-align:left; position:absolute; white-space: nowrap;'>".$asupan['nama']."</a>
																<a style='font-size:12px; color:#808080; text-align:left; position:absolute; top:20px;'>".$asupan['kategori']."</a>
																<a style='font-size:13px; text-align:left; position:absolute; top:40px;'>".$asupan['kalori']." cal</a>
															</div>
															<div class='row' style='left:30px; height:40px; margin-top:10px;'>
																<button class='btn btn-danger' style='margin:3px;' title='Hapus' data-toggle='modal' data-target='#hapusAsupan".$cal2['id_jadwal']."'><i class='fa fa-trash'></i></button>
															</div>
														</div>
													</div>";
												}
											}
										}
									}
									echo"<a style='font-size:13px; color:#808080; text-align:left;'>Malam ~ "; $totalCalW=0; foreach($totalUserKebutuhan as $calWaktu){if($calWaktu['waktu'] == 'malam'){
										$totalCalW += $calWaktu['kalori'];}} echo $totalCalW." cal </a>";
									foreach($dataJadwal as $cal3){
										if(($cal3['id_user'] == $user['id_user'])&&($cal3['date'] == date("Y-m-d"))&&($cal3['waktu'] == 'malam')){
											foreach($dataAsupan as $asupan){
												if($cal3['id_asupan'] == $asupan['id_asupan']){
													echo"<!--Item-->
													<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
														margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
														else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
														else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
														<div class='row' style='width:100%;'>
															<div class='col'>
																<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																	style='width:75px; height:60px; border-radius:4px; margin-left:-5px; margin-top:3px;'>
															</div>
															<div class='col' style='left:-35px; margin-left:5px;'>
																<a style='font-size:13px; color:#22A7F0; text-align:left; position:absolute; white-space: nowrap;'>".$asupan['nama']."</a>
																<a style='font-size:12px; color:#808080; text-align:left; position:absolute; top:20px;'>".$asupan['kategori']."</a>
																<a style='font-size:13px; text-align:left; position:absolute; top:40px;'>".$asupan['kalori']." cal</a>
															</div>
															<div class='row' style='left:30px; height:40px; margin-top:10px;'>
																<button class='btn btn-danger' style='margin:3px;' title='Hapus' data-toggle='modal' data-target='#hapusAsupan".$cal3['id_jadwal']."'><i class='fa fa-trash'></i></button>
															</div>
														</div>
													</div>";
												}
											}
										}
									}
								}
							}
						} else {
							echo "<div class='container'>
								<p style='font-style:italic; text-align:center; color:grey; font-size:14px;'>Anda belum membuat kebutuhan kalori hari ini</p>
								<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
									margin-left: auto; margin-right: auto; width: 200px; height: 200px; margin-top:-20px;'>
							</div>";
						}
					?>
					</div>
				</div>
				<div class='container-fluid'>
					<button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:10px 0px 0px 0px; float:left;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button>
					<form action='landing/logout' method='post'><button type="submit" class='btn btn-danger' style='height:40px; margin:10px 0px 0px 0px; float:right;'><i class='fa fa-sign-out'></i> Ganti Akun</button></form>
				</div>
			</div>
		</div>
		<div id='main'> <!--if design not flex and go wrong. delete this-->
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
				<li style="float:left; margin-left:15px;" onclick="openNav()" title='Kebutuhan kalori harian'><a><i class='fa fa-calendar-check-o fa-lg'></i></a></li>
				<li style="float:left; margin-left:-5x;" title='Bantuan'><a type='button' class="bookbtn" data-toggle='modal' data-target='#bantuanCalModal'><i class='fa fa-book fa-lg'></i></a></li>
                <li><a href="smartDoc">SmartDoc</a></li>
                <li  id="active"><a href="">Forum</a></li>
                <li><a href="dataKu">Dataku</a></li>
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
        <main>

		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='http://localhost/MedStory/assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>

        <!--News feeds.-->
        <br><br><br>
        <h5 style="margin-left: 13%;">Selamat datang, <?= $this->session->userdata('userTrack'); ?></h5>
        <div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
          <h5 style="text-align: left; color:#696969;">Informasi kesehatan</h5>				
		  	<div class='col-md'>
				<div id='myCarouselNews' class='carousel slide' data-ride='carousel' data-interval='0'>
				<!-- Carousel indicators -->
				<ol class='carousel-indicators'>
				<?php
					$item = 0;
					$page = 0;
					foreach ($dataBerita as $data){
						if($item == 0 && $page == 0){
							echo"<li data-target='#myCarouselNews' data-slide-to='0' class='active'></li>";
							$item++;
							$page++;
						} else if ($item % 3 == 0){
							echo"<li data-target='#myCarouselNews' data-slide-to='".$page."'></li>";
							$item++;
							$page++;
						} else if ($item % 3 != 0){
							$item++;
						}
					}
				?>
				</ol>   

				<!-- Wrapper for carousel items -->
				
					<div class='carousel-inner'>
					<?php
						$k = 1;
						$state = ' active';
						foreach ($dataBerita as $berita){
							if($k % 4 == 0  || $k == 1){
								echo"<div class='item carousel-item".$state."' >
								<div class='row' style='margin:20px;'>";
							}
							echo"<div class='col-sm' type='button' data-toggle='collapse' data-target='#newsContent".$k."' aria-expanded='false' aria-controls='multiCollapseExampleNews'
								style='margin-bottom:10px;' title='Tekan untuk melihat isi'>
									<div class='thumb-wrapper'>
										<div class='img-box'>
											<img src='http://localhost/MedStory/assets/newsImage/Main".$berita['idBerita'].".jpeg' alt='Card image cap' 
												style='width:270px; height:120px; border-radius:10px;'>								
										</div>
										<div class='thumb-content'>
											<h5 style='font-size:16px;'>".$berita['title']."</h5>									
											<p class='item-price'>".$berita['tanggal']."</p>
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
					?>
					</div>
					</div></div></div>
					<!-- Carousel controls -->
					<a class='carousel-control-prev' href='#myCarouselNews' data-slide='prev'>
						<i class='fa fa-angle-left'></i>
					</a>
					<a class='carousel-control-next' href='#myCarouselNews' data-slide='next'>
						<i class='fa fa-angle-right'></i>
					</a>
				</div>
				<div id="accordionNews">
				<div class='container-fluid' style="max-height: calc(60vh - 100px); max-width:auto; overflow-x: auto;">
				<?php
				$k = 1;
				foreach ($dataBerita as $berita){
					echo"<div class='collapse' id='newsContent".$k."' data-parent='#accordionNews'>
						<h5 style='font-size:18px;'>".$berita['title']."</h5>
						<p style='font-size:12px; color:grey; font-style:italic;'>Diunggah pada tanggal ".$berita['tanggal']."</p>
						<p>";
						echo nl2br($berita['isi']);
						echo"</p>
					</div>";
					$k++;
				}
				?>
				</div>	
			</div>
		</div>

		<div class="container bg-white" id="card-car" style="margin-bottom: 1%; border-radius: 10px;">
			<br>
		<div id="accordion">
			<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2"
				style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'><i class="fa fa-globe mr-2"></i>Forum Diskusi</button>
			<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"
				style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'><i class="fa fa-user-o mr-2"></i>Pertanyaan Saya</button>
			<button class="btn btn-info" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample2"
				style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'><i class="fa fa-bar-chart mr-2"></i><span class="button-text">Statistik</span></button>
			<button class="btn btn-success" style="float:right; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;" data-toggle="modal" data-target="#tambahDiskusiModal" 
				aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-plus mr-2"></i><span class="button-text">Buat Pertanyaan</span></button>
			</p><hr>
			<div class="row">
			<div class="col-md-12">
				<div class="collapse show" id="multiCollapseExample1" data-parent="#accordion">
					<div class="container-fluid">
						<form action='history/searchDiskusiByKat' method="POST">
						<div class='row'>
							<div class='col-md-2'>
								<h5 style="text-align: left; color:#696969; float:left;">Forum diskusi</h5>
							</div>
							<div class='col-md-1' style='margin-left:-2%;'>
								<span class='font-weight-100' style='font-size: 14px; color:grey;'>Kategori</span>
							</div>
							<div class='col-md-3' style='margin-top:-7px; margin-left:-2%;'>
								<select class="form-control" name="kategori" style="background:#f4f4f4; border-width: 0 0 3px; 
									border-bottom: 3.5px solid #4183D7; color:#212121;">
									<option value='All'>Semua Kategori</option>
									<option value='Penyakit Dalam'>Penyakit Dalam</option>
									<option value='Penyakit Menular'>Penyakit Menular</option>
									<option value='Vaksin & Imunisasi'>Vaksin & Imunisasi</option>
									<option value='Kulit & Kelamin'>Kulit & Kelamin</option>
									<option value='Otot & Saraf'>Otot & Saraf</option>
									<option value='THT & Mata'>THT & Mata</option>
									<option value='Penyakit Lansia'>Penyakit Lansia</option>
									<option value='Obat-Obatan'>Obat-Obatan</option>
									<option value='Gaya Hidup Sehat'>Gaya Hidup Sehat</option>
									<option value='Kandungan & Bedah'>Kandungan & Bedah</option>
									<option value='Gigi'>Gigi</option>
									<option value='Anak'>Anak</option>
								</select>
							</div>
							<div class='col-md-1' style='margin-left:-2%; margin-top:-7px;'>
								<button class='btn btn-success' type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>
							</div>
						</div>
						</form>

						<div id='myCarouselDiskusi' class='carousel slide' data-ride='carousel' data-interval='0'>
							<!-- Carousel indicators -->
							<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -50px;'>
							<?php
								$page = 0; $item = 0;
								foreach ($dataDiskusi as $data){
									if(($this->session->userdata('set_kategori') == $data['kategori']) || ($this->session->userdata('set_kategori') == 'All')){	
										if($item == 0 && $page == 0){
											echo"<li data-target='#myCarouselDiskusi' data-slide-to='0' class='active'>1</li>";
											$item++;
											$page++;
										} else if ($item % 4 == 0){
											echo"<li data-target='#myCarouselDiskusi' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
											$item++;
											$page++;
										} else if ($item % 4 != 0){
											$item++;
										}
									}
								}
							?>
							</ol>
							<!-- Wrapper for carousel items -->
							<div class='carousel-inner'>
							<?php 
								$i = 1; $count = 0; $k = 0;
								$state = ' active';
								foreach($dataDiskusi as $data){
									if(($this->session->userdata('set_kategori') == $data['kategori']) || ($this->session->userdata('set_kategori') == 'All')){	
										if(($k % 4 == 0) || ($k == 0)){
											echo"<div class='item carousel-item".$state."' >
											<div class='col-md'>";
										}	
										echo"
										<div id='accordion2'>
											<div class='card' style='border-radius:6px; margin:15px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:0;'>
												<div class='card-header' id='headingOne' style='border-width:1px; border-radius:6px; background:white;'>
													<img src='http://localhost/MedStory/assets/uploads/user_".$data['namaPengguna'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' 
														style='width:45px; height:45px; margin-top: -1%; float:left;' data-toggle='modal' data-target='#zoom".$data['id_diskusi']."'>
													<h5 style='font-size:20px; padding-left:15px; float:left; color:#22A7F0;'>".$data['namaPengguna']."</h2>
													<h5 style='font-size:11px; padding-top:10px; float:left; font-style:italic;'> pada ".$data['datetime']."</h5>
													<h5 style='font-size:20px; float:right;'>".$data['kategori']."</h5><br><hr>";
													if($data['imageURL'] == 'null'){
														echo"<p style='font-size:13px;'>".$data['pertanyaan']."</p>";
													} else {
												echo"<div class='row' style='margin-bottom:1%;'>
														<div class='col-md-4 border-right'>
															<img src='http://localhost/MedStory/assets/uploads/diskusi/diskusi_".$data['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
															alt='' data-toggle='modal' data-target='#zoom".$data['id_diskusi']."'>
														</div>
														<div class='col-md-6' style=''>
														<p style='font-size:13px;'>".$data['pertanyaan']."</p>
														</div>
													</div>";
													}
													echo"<h6 style='font-size:13px; float:right; padding-left:5px;'>".$data['view']."</h6>
														<img src='http://localhost/MedStory/assets/View.png' style='width:25px; height:25px; float:right; margin-top:-5px; padding-left:5px;'>
													<h6 style='font-size:13px; float:right; padding-left:5px;'>".$data['up']."</h6>
														<img src='http://localhost/MedStory/assets/Up.png' style='width:25px; height:22px; float:right; margin-top:-4px; padding-left:5px;'>
													<h6 style='font-size:13px; float:right; padding-left:5px;'>"; 
														$a = 0;
														foreach ($dataBalasan as $countComment){if ($data['id_diskusi'] == $countComment['id_diskusi']){ $a++;}}
														echo $a;
														echo"</h6>
														<img src='http://localhost/MedStory/assets/Comment.png' style='width:25px; height:20px; float:right; margin-top:-2px; padding-left:5px;'>
													<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$i."' 
													aria-expanded='true' aria-controls='collapseOne''>Lihat komentar
														<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
												</div> <!--End of header-->
												<!--Extend balasan.-->
												<div id='collapse".$i."' class='collapse' aria-labelledby='headingOne' data-parent='#accordion2'>
													<div class='card-body'>";
													foreach ($dataBalasan as $reply){
														if ($data['id_diskusi'] == $reply['id_diskusi']){
															if($reply['status'] == 'verified'){echo"<div class='container' style='background:#f4f4f4; border-left: 8px solid rgb(40, 207, 54); padding:5px; border-radius:4px; margin-bottom:5px;'>
																<i class='fa fa-check-circle' style='float:right; margin-top:20px; color:rgb(40, 207, 54);'></i>";}
																else {echo"<div class='container'>";} 
															echo"<img src='http://localhost/MedStory/assets/uploads/user_".$reply['pengirim'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:45px; height:45px; 
															float:left; margin-right:1%;'>";
															if(($reply['pengirim'] != $this->session->userdata('userTrack')) && ($reply['status'] == 'null')&& ($data['namaPengguna'] == $this->session->userdata('userTrack'))){
																echo"<form action='history/checkReply' method='post'>
																<input type='text' class='form-control' name='id_balasan' value='".$reply['id_balasan']."' hidden>
																<button class='btn btn-success' style='float:right;'><i class='fa fa-check-circle-o'></i></button>
																</form>";
															}
															echo"<h5 style='font-size:20px; margin-left:15px; color:#22A7F0;'>".$reply['pengirim']."</h5>";
															if ($reply['imageURL'] != 'null'){
																echo"<div class='row' style='margin-bottom:1%;'>
																<div class='col-md-4 border-right'>
																	<img  src='http://localhost/MedStory/assets/uploads/balasan/balasan_".$reply['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
																	alt='' data-toggle='modal' data-target='#zoom".$reply['id_balasan']."'>
																</div>
																<div class='col-md-6' style=''>
																	<p style='font-size:13px;'>".$reply['isi']."</p>
																</div>
															</div> <!--End of image row-->";
															} else { 
																echo"<p style='font-size:13px;'>".$reply['isi']."</p>";
															}
															echo"</div> <!--End of container-->"; 
															$count++;
														}
													} 
													if(($count == 0) &&($data['namaPengguna'] == $this->session->userdata('userTrack'))) {
														echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
														<p style='font-style:italic; text-align:center; color:grey;'>Maaf, pertanyaan Anda belum dijawab</p>
														<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Sorry.png' style='display: block;
															margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
														<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
													</div>";
													} else if (($count == 0) &&($data['namaPengguna'] != $this->session->userdata('userTrack'))){
														echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
														<p style='font-style:italic; text-align:center; color:grey;'>Pertanyaan ini belum dijawab</p>
														<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Error404.png' style='display: block;
															margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
														<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Ayo jadi yang pertama</p>
														</div>";
													} else if ($count > 0) {echo"<a style='font-size:13px; font-style:italic;'>Menampilkan ".$count." balasan...</a><br>";}
													echo"<form method='post' action='history/balasDiskusi' class='form-inline' enctype='multipart/form-data'>
														<input type='text' class='form-control' name='inputIdB' value='".$data['id_diskusi']."' hidden>
														<div class='container'><hr>
															<label class='switch' style='float:left; margin-right:1%;'>
															<input type='checkbox' name='imageSwitchR'>
																<span class='slider round' type='button' data-toggle='collapse' data-target='#collapseImage".$i."'></span>
															</label>
															<a style='float:left;'>Image</a>
															<button class='btn btn-primary' style='color:whitesmoke; background-color:#00a13e; float:right; border:none;' type='submit'>Balas</button>
															<input class='form-control' type='text' placeholder='Ketik balasan Anda disini...' style='width:40%; float:right; margin-right:1%;
																background:#f4f4f4; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;' name='inputIsi'>
															<div class='collapse' id='collapseImage".$i."'>
																<div class='container' style='width:40%; float:left;'>
																	<div class='input-group mb-3' style='background-color:#212121; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;
																		border-radius:5px;'>
																		<div class='input-group-prepend'>
																			<span class='input-group-text'>jpg</span>
																		</div>
																		<div class='custom-file'>
																			<input type='file' class='custom-file-input' id='uploadImage' name='uploadImageR' accept='image/*'>
																			<label class='custom-file-label text-left' for='uploadImage'>file size max 2 mb</label>
																		</div>
																	</div>
																</div>
															</div>
														</div> <!--End of input container-->
													</form>
													</div> <!--End of card body-->
												</div> <!--End of collapse-->
											</div>
										</div>";
										$k++;
										$state = ' ';
										if($k % 4 == 0){
											echo"</div>
										</div>";
										}										
										$count = 0; $i++;
									} 
								}
								//Need to be simplify / optimized
								if($k > 4){ 
									echo"
									</div></div></div>
									<!-- Carousel controls -->
									<a class='carousel-control-prev' href='#myCarouselDiskusi' data-slide='prev'>
										<i class='fa fa-angle-left'></i>
									</a>
									<a class='carousel-control-next' href='#myCarouselDiskusi' data-slide='next'>
										<i class='fa fa-angle-right'></i>
									</a></div>";
								} else if($k == 4){ 
									echo"</div></div>";
								// } else if(($k == 2)||($k == 3)||($k == 1)){
								} else if(($k >= 1)&&($k <= 3)){
									echo"</div></div></div></div>";
								} else if($k == 0){
									echo"</div></div>";
									echo "<div class='container'>
										<p style='font-style:italic; text-align:center; color:grey;'>Tidak terdapat pertanyaan dengan kategori terkait</p>
										<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
											margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
									</div>";
								}
								// echo $k."=k";
								//Check this
							?>
											
					</div>
				</div>
				<br>
			</div>
			<div class="col-md-12">
				<div class="collapse" id="multiCollapseExample2" data-parent="#accordion">
					<div class="container-fluid" style='margin-top:-25px;'>
						<h5 style="text-align: left; color:#696969;">Pertanyaan saya</h5>
						<div id='myCarouselDiskusiSaya' class='carousel slide' data-ride='carousel' data-interval='0'>
							<!-- Carousel indicators -->
							<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -50px;'>
							<?php
								$page = 0; $item = 0;
								foreach ($dataDiskusi as $data){
									if($data['namaPengguna'] == $this->session->userdata('userTrack')){
										if($item == 0 && $page == 0){
											echo"<li data-target='#myCarouselDiskusiSaya' data-slide-to='0' class='active'>1</li>";
											$item++;
											$page++;
										} else if ($item % 4 == 0){
											echo"<li data-target='#myCarouselDiskusiSaya' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
											$item++;
											$page++;
										} else if ($item % 4 != 0){
											$item++;
										}
									}
								}
							?>
							</ol>
							<!-- Wrapper for carousel items -->
							<div class='carousel-inner'>
							<?php 
								$i = 1; $count = 0; $k = 0;
								$state = ' active';
								foreach($dataDiskusi as $data){	
									if($data['namaPengguna'] == $this->session->userdata('userTrack')){
										if($k % 4 == 0  || $k == 0){
											echo"<div class='item carousel-item".$state."' >
											<div class='col-md'>";
										}	
										echo"
										<div id='accordion3'>
											<div class='card' style='border-radius:6px; margin:15px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:0;'>
												<div class='card-header' id='headingOne' style='border-width:1px; border-radius:6px; background:white;'>
													<img src='http://localhost/MedStory/assets/uploads/user_".$data['namaPengguna'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' 
														style='width:45px; height:45px; margin-top: -1%; float:left;' data-toggle='modal' data-target='#zoom".$data['id_diskusi']."'>
													<h5 style='font-size:20px; padding-left:15px; float:left; color:#22A7F0;'>Anda</h2>
													<h5 style='font-size:11px; padding-top:10px; float:left; font-style:italic;'> pada ".$data['datetime']."</h5>
													<h5 style='font-size:20px; float:right;'>".$data['kategori']."</h5><br><hr>";
													if($data['imageURL'] == 'null'){
														echo"<p style='font-size:13px;'>".$data['pertanyaan']."</p>";
													} else {
												echo"<div class='row' style='margin-bottom:1%;'>
														<div class='col-md-4 border-right'>
															<img src='http://localhost/MedStory/assets/uploads/diskusi/diskusi_".$data['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
															alt='' data-toggle='modal' data-target='#zoom".$data['id_diskusi']."'>
														</div>
														<div class='col-md-6' style=''>
														<p style='font-size:13px;'>".$data['pertanyaan']."</p>
														</div>
													</div>";
													}
													echo"<h6 style='font-size:13px; float:right; padding-left:5px;'>".$data['view']."</h6>
														<img src='http://localhost/MedStory/assets/View.png' style='width:25px; height:25px; float:right; margin-top:-5px; padding-left:5px;'>
													<h6 style='font-size:13px; float:right; padding-left:5px;'>".$data['up']."</h6>
														<img src='http://localhost/MedStory/assets/Up.png' style='width:25px; height:22px; float:right; margin-top:-4px; padding-left:5px;'>
													<h6 style='font-size:13px; float:right; padding-left:5px;'>"; 
														$a = 0;
														foreach ($dataBalasan as $countComment){if ($data['id_diskusi'] == $countComment['id_diskusi']){ $a++;}}
														echo $a;
														echo"</h6>
														<img src='http://localhost/MedStory/assets/Comment.png' style='width:25px; height:20px; float:right; margin-top:-2px; padding-left:5px;'>
													<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$i."' 
													aria-expanded='true' aria-controls='collapseOne''>Lihat komentar
														<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
												</div> <!--End of header-->
												<!--Extend balasan.-->
												<div id='collapse".$i."' class='collapse' aria-labelledby='headingOne' data-parent='#accordion3'>
													<div class='card-body'>";
													foreach ($dataBalasan as $reply){
														if ($data['id_diskusi'] == $reply['id_diskusi']){
															if($reply['status'] == 'verified'){echo"<div class='container' style='background:#f4f4f4; border-left: 8px solid rgb(40, 207, 54); padding:5px; border-radius:4px; margin-bottom:5px;'>
																<i class='fa fa-check-circle' style='float:right; margin-top:20px; color:rgb(40, 207, 54);'></i>";}
																else {echo"<div class='container'>";} 
															echo"<img src='http://localhost/MedStory/assets/uploads/user_".$reply['pengirim'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:45px; height:45px; 
															float:left; margin-right:1%;'>";
															if(($reply['pengirim'] != $this->session->userdata('userTrack')) && ($reply['status'] == 'null')){
																echo"<form action='history/checkReply' method='post'>
																<input type='text' class='form-control' name='id_balasan' value='".$reply['id_balasan']."' hidden>
																<button class='btn btn-success' style='float:right;'><i class='fa fa-check-circle-o'></i></button>
																</form>";
															}
															echo"<h5 style='font-size:20px; margin-left:15px; color:#22A7F0;'>".$reply['pengirim']."</h5>
															";
															if ($reply['imageURL'] != 'null'){
																echo"<div class='row' style='margin-bottom:1%;'>
																<div class='col-md-4 border-right'>
																	<img  src='http://localhost/MedStory/assets/uploads/balasan/balasan_".$reply['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
																	alt='' data-toggle='modal' data-target='#zoom".$reply['id_balasan']."'>
																</div>
																<div class='col-md-6' style=''>
																	<p style='font-size:13px;'>".$reply['isi']."</p>
																</div>
															</div> <!--End of image row-->";
															} else { 
																echo"<p style='font-size:13px;'>".$reply['isi']."</p>";
															}
															echo"</div> <!--End of container-->"; 
															$count++;
														}
													} 
													if(($count == 0) &&($data['namaPengguna'] == $this->session->userdata('userTrack'))) {
														echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
														<p style='font-style:italic; text-align:center; color:grey;'>Maaf, pertanyaan Anda belum dijawab</p>
														<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Sorry.png' style='display: block;
															margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
														<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
													</div>";
													} else if (($count == 0) &&($data['namaPengguna'] != $this->session->userdata('userTrack'))){
														echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
														<p style='font-style:italic; text-align:center; color:grey;'>Pertanyaan ini belum dijawab</p>
														<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Error404.png' style='display: block;
															margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
														<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Ayo jadi yang pertama</p>
														</div>";
													} else if ($count > 0) {echo"<a style='font-size:13px; font-style:italic;'>Menampilkan ".$count." balasan...</a><br>";}
													echo"<form method='post' action='history/balasDiskusi' class='form-inline' enctype='multipart/form-data'>
														<input type='text' class='form-control' name='inputIdB' value='".$data['id_diskusi']."' hidden>
														<div class='container'><hr>
															<label class='switch' style='float:left; margin-right:1%;'>
															<input type='checkbox' name='imageSwitchR'>
																<span class='slider round' type='button' data-toggle='collapse' data-target='#collapseImage".$i."'></span>
															</label>
															<a style='float:left;'>Image</a>
															<button class='btn btn-primary' style='color:whitesmoke; background-color:#00a13e; float:right; border:none;' type='submit'>Balas</button>
															<input class='form-control' type='text' placeholder='Ketik balasan Anda disini...' style='width:40%; float:right; margin-right:1%;
																background:#f4f4f4; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;' name='inputIsi'>
															<div class='collapse' id='collapseImage".$i."'>
																<div class='container' style='width:40%; float:left;'>
																	<div class='input-group mb-3' style='background-color:#212121; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;
																		border-radius:5px;'>
																		<div class='input-group-prepend'>
																			<span class='input-group-text'>jpg</span>
																		</div>
																		<div class='custom-file'>
																			<input type='file' class='custom-file-input' id='uploadImage' name='uploadImageR' accept='image/*'>
																			<label class='custom-file-label text-left' for='uploadImage'>file size max 2 mb</label>
																		</div>
																	</div>
																</div>
															</div>
														</div> <!--End of input container-->
													</form>
													</div> <!--End of card body-->
												</div> <!--End of collapse-->
											</div>
										</div>";
										$k++;
										$state = ' ';
										if($k % 4 == 0){
											echo"</div>
										</div>";
										}
										$count = 0; $i++; 
									}
								}
								//Need to be simplify / optimized
								if($k > 4){ 
									echo"
									</div></div></div>
									<!-- Carousel controls -->
									<a class='carousel-control-prev' href='#myCarouselDiskusiSaya' data-slide='prev'>
										<i class='fa fa-angle-left'></i>
									</a>
									<a class='carousel-control-next' href='#myCarouselDiskusiSaya' data-slide='next'>
										<i class='fa fa-angle-right'></i>
									</a></div>";
								} else if($k == 4){ 
									echo"</div></div>";
								// } else if(($k == 2)||($k == 3)||($k == 1)){
								} else if(($k >= 1)&&($k <= 3)){
									echo"</div></div></div></div>";
								} else if($k == 0){
									echo"</div></div>";
									echo "<div class='container'>
										<p style='font-style:italic; text-align:center; color:grey;'>Tidak terdapat pertanyaan dengan kategori terkait</p>
										<img src='http://localhost/MedStory/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
											margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
									</div>";
								}
								// echo $k."=k";
								//Check this
							?>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="collapse" id="multiCollapseExample3" data-parent="#accordion">
						<div class="container">
						<h5 style="text-align: left; color:#696969;">Statistik</h5>
							<h6 style="text-align: center; color:#696969;">Kategori Diskusi</h6>
							<div id="statistikDiskusiKat" style="height:290px; width:100%; min-width:300px;"></div>
							<h6 style="text-align: center; color:#696969;">Total Diskusi per bulan 2022</h6>
							<canvas id="statistikDiskusiBulan" style="width:100%;max-width:600px; margin-left:20%;"></canvas>
						</div>
					</div>
				</div>
			</div><br>
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

		<!-- Buat Diskusi -->
		<div class="modal fade" id="tambahDiskusiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Buat Diskusi</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST" action="history/tambahDiskusi" enctype='multipart/form-data'>
					<div class="modal-body" style="text-align: left">
							<h6 class='card-title'>Kategori</h6>
							<select class="form-control" name="katTambah">
								<option value='Penyakit Dalam'>Penyakit Dalam</option>
								<option value='Penyakit Menular'>Penyakit Menular</option>
								<option value='Vaksin & Imunisasi'>Vaksin & Imunisasi</option>
								<option value='Kulit & Kelamin'>Kulit & Kelamin</option>
								<option value='Otot & Saraf'>Otot & Saraf</option>
								<option value='THT & Mata'>THT & Mata</option>
								<option value='Penyakit Lansia'>Penyakit Lansia</option>
								<option value='Obat-Obatan'>Obat-Obatan</option>
								<option value='Gaya Hidup Sehat'>Gaya Hidup Sehat</option>
								<option value='Kandungan & Bedah'>Kandungan & Bedah</option>
								<option value='Gigi'>Gigi</option>
								<option value='Anak'>Anak</option>
							</select><br>
							<h6 class='card-title'>Pertanyaan</h6>
							<textarea rows="5" cols="60" name="pertanyaanTambah">Enter text here...</textarea><br>
					</div>
					<div class='container'> 
						<label class='switch' style='float:left;'>
						<input type='checkbox' name='imageSwitchD'>
							<span class='slider round' type='button' data-toggle='collapse' data-target='#collapseImageAddD'></span>
						</label>
						<a style='float:left; margin-left:5px;'>Image</a>
						<div class='collapse' id='collapseImageAddD'>
							<div class='container'>
								<div class='input-group mb-3' style='background-color:#212121; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;
									border-radius:5px;'>
									<div class='input-group-prepend'>
										<span class='input-group-text'>jpg</span>
									</div>
									<div class='custom-file'>
										<input type='file' class='custom-file-input' id='uploadImage' name='uploadImageD' accept='image/*'>
										<label class='custom-file-label text-left' for='uploadImage'>file size max 2 mb</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" style="box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;">Kirim</button>
					</div></form>
				</div>
			</div>
		</div>

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194041 - Leonardho R Sitanggang</div>
        </footer>
		</div> <!--main-->

		<!-- Zoom discussion image Modal -->
		<?php foreach($dataDiskusi as $data){
		if ($data['imageURL'] != 'null'){
		echo"<div class='modal fade' id='zoom".$data['id_diskusi']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog modal-xl' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<p>".$data['pertanyaan']."</p>
				<img type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/MedStory/assets/Error.png'
					width='35px' height='35px'>
			</div>
			<div class='modal-footer'>
				<img src='http://localhost/MedStory/assets/uploads/diskusi/diskusi_".$data['imageURL'].".jpg' 
					style='border-radius:6px; width:100%; height:100%; cursor:pointer'>
			</div>			
			</div>
		</div>
		</div>";	
		}}?>

		<?php foreach($dataBalasan as $data){
		if ($data['imageURL'] != 'null'){
		echo"<div class='modal fade' id='zoom".$data['id_balasan']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog modal-xl' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<p>".$data['isi']."</p>
				<img  type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/MedStory/assets/Error.png'
					width='35px' height='35px'>
			</div>
			<div class='modal-footer'>
				<img  src='http://localhost/MedStory/assets/uploads/balasan/balasan_".$data['imageURL'].".jpg' 
					style='border-radius:6px; width:100%; height:100%; cursor:pointer'>
			</div>			
			</div>
		</div>
		</div>";	
		}}?>

		<?php
		foreach($dataUser as $user){
			foreach($dataJadwal as $jadwal){
				if($user['id_user'] == $jadwal['id_user']){
					foreach($dataAsupan as $asupan){
						if($jadwal['id_asupan'] == $asupan['id_asupan']){
							echo"<!-- Hapus Asupan Modal -->
							<div class='modal fade' id='hapusAsupan".$jadwal['id_jadwal']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
							<div class='modal-dialog' role='document'>
								<div class='modal-content'>
								<div class='modal-header'>
									<p class='modal-title' id='exampleModalLabel'>Apakah Anda ingin menghapus asupan dengan detail :</p>
								</div>
								<div class='modal-body'>
									<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
										margin-bottom:5px;'>
										<div class='row' style='width:100%;'>
											<div class='col-sm-3'>
												<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
													style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
											</div>
											<div class='col-sm-7' >
												<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
												<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>
											</div>
										</div>
									</div>
								</div>
								<div class='modal-footer'>
									<button type='button' class='btn btn-danger' data-dismiss='modal'>Batalkan</button>
									<form method='POST' action='history/hapusAsupan'>
										<input type='text' class='form-control' name='id_jadwal' value='".$jadwal['id_jadwal']."' hidden>
										<button type='submit' class='btn btn-success'>Ya, Saya yakin</button>
									</form>
								</div>
								</div>
							</div>
							</div>";
						}
					}
				}
			}
		}	
		?>

		<!-- Error Tambah Cal Modal -->
		<?php if(isset($error_tambahCalHarian)) { echo"
		<div class='modal fade' id='errorCalHarian' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title'>Tambah Kalori Error</h5>
				<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
			</div>
			<div class='modal-body'>
				<img src='http://localhost/MedStory/assets/icon/Failed.png' alt='Hello.gif' style='display: block;
					margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
				<p style='text-align:center; font-weight:bold;'>".$error_tambahCalHarian."</p>
			</div>		
			</div>
		</div>
		</div>";}	
		?>

		<!-- Hapus Semua Asupan Modal -->
		<div class='modal fade' id='hapusSemuaAsupan' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<p class='modal-title' id='exampleModalLabel'>Apakah Anda ingin menghapus semua asupan pada hari ini :</p>
			</div>
			<div class='modal-body' style='max-height: calc(60vh - 100px); max-width:auto; height:400px; overflow-x: auto;'>
			<?php
				foreach($dataUser as $user){
					if($user['namaPengguna'] == $this->session->userdata('userTrack')){
						foreach($dataJadwal as $cal){
							if(($cal['id_user'] == $user['id_user'])&&($cal['date'] == date("Y-m-d"))){
								foreach($dataAsupan as $asupan){
									if($cal['id_asupan'] == $asupan['id_asupan']){
										echo"<!--Item-->
										<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
										margin-bottom:5px;'>
										<div class='row' style='width:100%;'>
											<div class='col-sm-3'>
												<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
													style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
											</div>
											<div class='col-sm-7' >
												<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
												<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>
											</div>
										</div>
										</div>";
									}
								}
							}
						}
					}
				}
			?>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-danger' data-dismiss='modal'>Batalkan</button>
				<form method='POST' action='history/hapusSemuaAsupan'>
					<?php foreach($dataUser as $user){echo"<input type='text' class='form-control' name='id_user' value='".$user['id_user']."' hidden>";}?>
					<button type='submit' class='btn btn-success'>Ya, Saya yakin</button>
				</form>
			</div>
			</div>
		</div>
		</div>

		<!-- Bantuan -->
		<div class="modal fade" id="bantuanCalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-3">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a style='color:#212121; font-weight:500;'>Kalkulator Kalori</a>
								<a class="nav-link active" id="v-pills-pengenalanKal-tab" data-toggle="pill" href="#v-pills-pengenalanKal" role="tab" aria-controls="v-pills-pengenalanKal" aria-selected="true">Pengenalan</a>
								<a class="nav-link" id="v-pills-penggunaanKal-tab" data-toggle="pill" href="#v-pills-penggunaanKal" role="tab" aria-controls="v-pills-penggunaanKal" aria-selected="true">Cara Pengunaan</a>
							<a style='color:#212121; font-weight:500;'>Kartu Menuju Sehat</a>
								<a class="nav-link" id="v-pills-pengenalanKms-tab" data-toggle="pill" href="#v-pills-pengenalanKms" role="tab" aria-controls="v-pills-pengenalanKms" aria-selected="false">Pengenalan</a>
								<a class="nav-link" id="v-pills-penggunaanKms-tab" data-toggle="pill" href="#v-pills-penggunaanKms" role="tab" aria-controls="v-pills-penggunaanKms" aria-selected="false">Cara Pengunaan</a>
							<a style='color:#212121; font-weight:500;'>Forum Diskusi</a>
								<a class="nav-link" id="v-pills-pengenalanDis-tab" data-toggle="pill" href="#v-pills-pengenalanDis" role="tab" aria-controls="v-pills-pengenalanDis" aria-selected="false">Pengenalan</a>
								<a class="nav-link" id="v-pills-penggunaanDis-tab" data-toggle="pill" href="#v-pills-penggunaanDis" role="tab" aria-controls="v-pills-penggunaanDis" aria-selected="false">Cara Pengunaan</a>
								<a class="nav-link" id="v-pills-kebijakanDis-tab" data-toggle="pill" href="#v-pills-kebijakanDis" role="tab" aria-controls="v-pills-kebijakanDis" aria-selected="false">Kebijakan</a>
							<a style='color:#212121; font-weight:500;'>Lainnya</a>
								<a class="nav-link" id="v-pills-smartDoc-tab" data-toggle="pill" href="#v-pills-smartDoc" role="tab" aria-controls="v-pills-smartDoc" aria-selected="false">SmartDoc</a>
								<a class="nav-link" id="v-pills-darurat-tab" data-toggle="pill" href="#v-pills-darurat" role="tab" aria-controls="v-pills-darurat" aria-selected="false">Nomor Darurat</a>		
								<a class="nav-link" id="v-pills-acc-tab" data-toggle="pill" href="#v-pills-acc" role="tab" aria-controls="v-pills-acc" aria-selected="false">Akun</a>				
						</div>
					</div>
					<div class="col-9">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade show active" id="v-pills-pengenalanKal" role="tabpanel" aria-labelledby="v-pills-pengenalanKal-tab">
								<h6 style='color:#212121;'>Pengenalan</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-penggunaanKal" role="tabpanel" aria-labelledby="v-pills-penggunaanKal-tab">
								<h6 style='color:#212121;'>Penggunaan</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-pengenalanKms" role="tabpanel" aria-labelledby="v-pills-pengenalanKms-tab">
								<h6 style='color:#212121;'>Pengenalan</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-penggunaanKms" role="tabpanel" aria-labelledby="v-pills-penggunaanKms-tab">
								<h6 style='color:#212121;'>Penggunaan</h6>
							</div>

							<div class="tab-pane fade" id="v-pills-pengenalanDis" role="tabpanel" aria-labelledby="v-pills-pengenalanDis-tab">
								<h6 style='color:#212121;'>Pengenalan</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-penggunaanDis" role="tabpanel" aria-labelledby="v-pills-penggunaanDis-tab">
								<h6 style='color:#212121;'>Penggunaan</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-kebijakanDis" role="tabpanel" aria-labelledby="v-pills-kebijakanDis-tab">
								<h6 style='color:#212121;'>Kebijakan</h6>
							</div>

							<div class="tab-pane fade" id="v-pills-smartDoc" role="tabpanel" aria-labelledby="v-pills-smartDoc-tab">
								<h6 style='color:#212121;'>SmartDoc</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-darurat" role="tabpanel" aria-labelledby="v-pills-darurat-tab">
								<h6 style='color:#212121;'>Nomor Darurat</h6>
							</div>
							<div class="tab-pane fade" id="v-pills-acc" role="tabpanel" aria-labelledby="v-pills-acc-tab">
								<h6 style='color:#212121;'>Akun</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>

		<!-- Tambah asupan -->
		<div class="modal fade" id="asupanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<form method="POST" action="history/tambahJadwalCal">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Asupan Hari ini</h5>
				<div class="col-sm">
					<select class="form-control" name="waktu" style="background:#f4f4f4; border-width: 0 0 3px; 
						border-bottom: 3.5px solid #4183D7; color:#212121; width:200px;">
						<option value="pagi">Pagi</option>
						<option value="siang">Siang</option>
						<option value="malam">Malam</option>
					</select>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<section class="py-1 header">
					<div class="container py-4">
						<div class="row">
							<div class="col-md-3">
								<!-- Tabs nav -->
								<div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link mb-2 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-sayuran" role="tab" aria-controls="v-pills-home" aria-selected="true">
									<i class="fa-solid fa-carrot"></i>
									<span class="font-weight-bold small text-uppercase">Sayuran</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-buah" role="tab" aria-controls="v-pills-profile" aria-selected="false">
									<i class="fa-solid fa-apple-whole"></i>
									<span class="font-weight-bold small text-uppercase">Buah-Buahan</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-daging" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-drumstick-bite"></i>
									<span class="font-weight-bold small text-uppercase">Daging</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-seafood" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-shrimp"></i>
									<span class="font-weight-bold small text-uppercase">Seafood</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-lain" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-bowl-rice"></i>
									<span class="font-weight-bold small text-uppercase">Lainnya</span></a>
								</div>
							</div>

							<div class="col-md-9">
								<!-- Tabs content -->
								<?php 
									foreach($dataUser as $user){
										if($user['namaPengguna'] == $this->session->userdata('userTrack')){
											echo"<input type='text' class='form-control' name='id_user' value='".$user['id_user']."' hidden>";
										}
									}
								?>
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade shadow rounded bg-white show active p-3" id="v-pills-sayuran" role="tabpanel" aria-labelledby="v-pills-home-tab"
										style='max-height: calc(60vh - 100px); max-width:auto; height:310px; overflow-x: auto;'>
										<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Sayuran</h5>
										<?php
										foreach($dataAsupan as $asupan){
											if($asupan['kategori'] == 'Sayuran'){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
														else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
														else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>
														</div>
														<div class='col-sm-2' style='margin-top:15px;'>
															<label class='container' id='checkCont'><input type='checkbox' id='' name='id_asupan' value='".$asupan['id_asupan']."' style='height:50px;'>
															<span class='checkmark'></span></label>
														</div>
													</div>
												</div>";
											}
										}
										?>
									</div>
									
									<div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-buah" role="tabpanel" aria-labelledby="v-pills-profile-tab"
										style='max-height: calc(60vh - 100px); max-width:auto; height:310px; overflow-x: auto;'>
										<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Buah-Buahan</h5>
										<?php
										foreach($dataAsupan as $asupan){
											if($asupan['kategori'] == 'Buah'){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
													else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
													else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>														</div>
														<div class='col-sm-2' style='margin-top:15px;'>
															<label class='container' id='checkCont'><input type='checkbox' id='' name='id_asupan' value='".$asupan['id_asupan']."' style='height:50px;'>
															<span class='checkmark'></span></label>
														</div>
													</div>
												</div>";
											}
										}
										?>
									</div>								
										
									<div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-daging" role="tabpanel" aria-labelledby="v-pills-messages-tab"
										style='max-height: calc(60vh - 100px); max-width:auto; height:310px; overflow-x: auto;'>
										<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Daging</h5>
										<?php
										foreach($dataAsupan as $asupan){
											if($asupan['kategori'] == 'Daging'){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
													else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
													else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>														</div>
														<div class='col-sm-2' style='margin-top:15px;'>
															<label class='container' id='checkCont'><input type='checkbox' id='' name='id_asupan' value='".$asupan['id_asupan']."' style='height:50px;'>
															<span class='checkmark'></span></label>
														</div>
													</div>
												</div>";
											}
										}
										?>
									</div>

									<div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-seafood" role="tabpanel" aria-labelledby="v-pills-settings-tab"
										style='max-height: calc(60vh - 100px); max-width:auto; height:310px; overflow-x: auto;'>
										<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Seafood</h5>
										<?php
										foreach($dataAsupan as $asupan){
											if($asupan['kategori'] == 'Seafood'){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
													else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
													else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>														</div>
														<div class='col-sm-2' style='margin-top:15px;'>
															<label class='container' id='checkCont'><input type='checkbox' id='' name='id_asupan' value='".$asupan['id_asupan']."' style='height:50px;'>
															<span class='checkmark'></span></label>
														</div>
													</div>
												</div>";
											}
										}
										?>							
									</div>

									<div class="tab-pane fade shadow rounded bg-white p-3" id="v-pills-lain" role="tabpanel" aria-labelledby="v-pills-settings-tab"
										style='max-height: calc(60vh - 100px); max-width:auto; height:310px; overflow-x: auto;'>
										<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Lainnya</h5>
										<?php
										foreach($dataAsupan as $asupan){
											if($asupan['kategori'] == 'Lainnya'){
												echo"<!--Item-->
												<div class='card' style='border-radius:6px; border:none; height:75px; box-shadow: #d4d4d4 0px 4px 12px; padding:5px;
													margin-bottom:5px;";if($asupan['kalori'] < 100){echo "border-left: 4px solid #29bd04";}
													else if(($asupan['kalori'] >= 100)&&($asupan['kalori'] < 200)){echo "border-left: 4px solid #de6000";}
													else if($asupan['kalori'] >= 200){echo "border-left: 4px solid #df4759";} echo"'>
													<div class='row' style='width:100%;'>
														<div class='col-sm-3'>
															<img src='http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg' alt='".$asupan['nama']."' 
																style='width:95px; height:60px; border-radius:4px; margin-top:3px;'>
														</div>
														<div class='col-sm-7' >
															<p style='font-size:15px; color:#22A7F0; text-align:left;'>".$asupan['nama']."</p>
															<p style='font-size:15px; color:grey; text-align:left;'>".$asupan['kalori']." cal / ".$asupan['ukuran']."</p>														</div>
														<div class='col-sm-2' style='margin-top:15px;'>
															<label class='container' id='checkCont'><input type='checkbox' id='' name='id_asupan' value='".$asupan['id_asupan']."' style='height:50px;'>
															<span class='checkmark'></span></label>
														</div>
													</div>
												</div>";
											}
										}
										?>								
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="modal-footer">
				<?php
					$totalCalW = 0; $calorie = 0; $ket = 0;
					foreach($totalUserKebutuhan as $calWaktu){
						$totalCalW += $calWaktu['kalori'];
					}
					foreach($dataKebutuhan as $kebutuhan){
						if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
							$calorie = $kebutuhan['kalori'];
						}
					}
					$ket = $calorie-$totalCalW;
					if($ket <= 0){
						echo"<p style='color:red; font-size:14px; margin-top:5px; float:left; text-align:left;'>
						<i class='fa fa-exclamation-triangle'></i> Kebutuhan kalori Anda sudah terpenuhi</p>";
					} 
				?>
				<div class='row' style='width:100%;'>
					<div class='col-md-9'>
						<div class='container' style='float:left; position:relative;'>
							<div class='row' style='width:100%;'>
								<div class='col-md-1'>
									<div class='container' style='background:#29bd04; width: 30px; height:30px; border-radius:100%;'></div>
								</div>
								<div class='col-md-2'>
									<a style='font-size:14px;'>Rendah</a>
								</div>
								<div class='col-md-1'>
									<div class='container' style='background:#de6000; width: 30px; height:30px; border-radius:100%;'></div>
								</div>
								<div class='col-md-2'>
									<a style='font-size:14px;'>Sedang</a>
								</div>
								<div class='col-md-1'>
									<div class='container' style='background:#df4759; width: 30px; height:30px; border-radius:100%;'></div>
								</div>
								<div class='col-md-2'>
									<a style='font-size:14px;'>Tinggi</a>
								</div>
							</div>
						</div>
					</div>
					<div class='col-md-3'>
						<button type="submit" style='float:right;' class="btn btn-primary">Tambah</button>
					</div>
				</div>
			</div>
			</form>
			</div>
		</div>
		</div>
				
		<!--Cal Donut-->
		<script>
			const numb = document.querySelector(".number");
			let counter = 0;
			setInterval(() => {
			if(counter == <?php foreach($dataUser as $user) {if($user['namaPengguna'] == $this->session->userdata('userTrack')){	
				foreach($dataKebutuhan as $kebutuhan){ if(($kebutuhan['id_user'] == $user['id_user'])&&($kebutuhan['date'] == date("Y-m-d"))){
				echo $kebutuhan['kalori'];}}}}?> ){

				clearInterval();
			}else{
				counter+=1;
				numb.textContent = counter + " cal";
			}
			}, 0);
		</script>

		<!--Javascript signout-->
		<script type="text/javascript">
			function editEnabled(){
					document.getElementById("Inputan").disabled = false;
			}
			function refreshMessage() {
				window.location.href="http://localhost/MedStory/history";  
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

			//Side nav
			function openNav() {
				document.getElementById("mySidebar").style.width = "350px";
				document.getElementById("main").style.marginLeft = "350px";
			}

			function closeNav() {
				document.getElementById("mySidebar").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
			}
			//Discussion line chart
			var Jan = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '01'){$i++;}}echo $i;?>;
			var Feb = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '02'){$i++;}}echo $i;?>;
			var Mar = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '03'){$i++;}}echo $i;?>;
			var Apr = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '04'){$i++;}}echo $i;?>;
			var Mei = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '05'){$i++;}}echo $i;?>;
			var Jun = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '06'){$i++;}}echo $i;?>;
			var Jul = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '07'){$i++;}}echo $i;?>;
			var Agu = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '08'){$i++;}}echo $i;?>;
			var Sep = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '09'){$i++;}}echo $i;?>;
			var Okt = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '10'){$i++;}}echo $i;?>;
			var Nov = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '11'){$i++;}}echo $i;?>;
			var Des = <?php $i = 0; $check = ''; foreach($dataDiskusi as $data){$check = $data['datetime']; $month = explode("-", $check); 
				if($month[1] == '12'){$i++;}}echo $i;?>;

			var xValues = ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"];
			var yValues = [Jan,Feb,Mar,Apr,Mei,Jun,Jul,Agu,Sep,Okt,Nov,Des];

			new Chart("statistikDiskusiBulan", {
			type: "line",
			data: {
				labels: xValues,
				datasets: [{
				fill: false,
				lineTension: 0,
				backgroundColor: "#4183D7",
				borderColor: "rgba(0,0,255,0.1)",
				data: yValues
				}]
			},
			options: {
				legend: {display: false},
				scales: {
				yAxes: [{ticks: {min: 0, max:30}}],
				}
			}
			});
        </script>

		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!--Ajax for json-->
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>				
		
		<!-- chartist chart -->
		<script src="http://localhost/MedStory/assets/js/chartist-js/dist/chartist.min.js"></script>
		<script src="http://localhost/MedStory/assets/js/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
		<!--c3 JavaScript -->
		<script src="http://localhost/MedStory/assets/js/d3/d3.min.js"></script>
		<script src="http://localhost/MedStory/assets/js/c3-master/c3.min.js"></script>
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

		<!--Jquery-->
        <script>
			$(document).ready(function(){
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			})
			//Set file name when upload.
			$('.custom-file-input').on('change', function() { 
				let fileName = $(this).val().split('\\').pop(); 
				$(this).next('.custom-file-label').addClass("selected").html(fileName); 
			});

			$(window).on('load', function() {
				$('#errorCalHarian').modal('show');
			});

			//Statistic
			$(function() {
				"use strict";
				var chart2 = new Chartist.Bar('.amp-pxl', {
				}, {
					axisX: {
						position: 'end',
						showGrid: false
					},
					axisY: {
						position: 'start'
					},
					high: '12',
					low: '0',
					plugins: [
						Chartist.plugins.tooltip()
					]
				});

				var chart = [chart2];
				var replyChart = [chart2];

				for (var i = 0; i < chart.length; i++) {
					chart[i].on('draw', function(data) {
						if (data.type === 'line' || data.type === 'area') {
							data.element.animate({
								d: {
									begin: 500 * data.index,
									dur: 500,
									from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
									to: data.path.clone().stringify(),
									easing: Chartist.Svg.Easing.easeInOutElastic
								}
							});
						}
						if (data.type === 'bar') {
							data.element.animate({
								y2: {
									dur: 500,
									from: data.y1,
									to: data.y2,
									easing: Chartist.Svg.Easing.easeInOutElastic
								},
								opacity: {
									dur: 500,
									from: 0,
									to: 1,
									easing: Chartist.Svg.Easing.easeInOutElastic
								}
							});
						}
					});
				}

				var chart = c3.generate({
					bindto: '#statistikDiskusiKat',
					data: {
						columns: [
							['Vaksin & Imunisasi', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Vaksin & Imunisasi'){$count++;}} echo $count;?>],
							['Penyakit Dalam', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Penyakit Dalam'){$count++;}} echo $count;?>],
							['Penyakit Menular', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Penyakit Menular'){$count++;}} echo $count;?>],
							['Kulit & Kelamin', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Kulit & Kelamin'){$count++;}} echo $count;?>],
							['Otot & Saraf', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Otot & Saraf'){$count++;}} echo $count;?>],
							['THT & Mata', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'THT & Mata'){$count++;}} echo $count;?>],
							['Penyakit Lansia', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Penyakit Lansia'){$count++;}} echo $count;?>],
							['Obat-Obatan', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Obat-Obatan'){$count++;}} echo $count;?>],
							['Gaya Hidup Sehat', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Gaya Hidup Sehat'){$count++;}} echo $count;?>],
							['Kandungan & Bedah', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Kandungan & Bedah'){$count++;}} echo $count;?>],
							['Gigi', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Gigi'){$count++;}} echo $count;?>],
							['Anak', <?php $count = 0; foreach($dataDiskusi as $data){ if($data['kategori'] == 'Anak'){$count++;}} echo $count;?>]
						],

						type: 'donut',
						onclick: function(d, i) { console.log("onclick", d, i); },
						onmouseover: function(d, i) { console.log("onmouseover", d, i); },
						onmouseout: function(d, i) { console.log("onmouseout", d, i); }
					},
					donut: {
						label: {
							show: true
						},
						width: 35,
					},
					legend: {
						hide: false
					},
					color: {
						pattern: ['#12c447', '#c49212', '#c43012', '#11bfbc', '#bf11a8']
					}
				});

				for (var i = 0; i < replyChart.length; i++) {
					replyChart[i].on('draw', function(data) {
						if (data.type === 'line' || data.type === 'area') {
							data.element.animate({
								d: {
									begin: 500 * data.index,
									dur: 500,
									from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
									to: data.path.clone().stringify(),
									easing: Chartist.Svg.Easing.easeInOutElastic
								}
							});
						}
						if (data.type === 'bar') {
							data.element.animate({
								y2: {
									dur: 500,
									from: data.y1,
									to: data.y2,
									easing: Chartist.Svg.Easing.easeInOutElastic
								},
								opacity: {
									dur: 500,
									from: 0,
									to: 1,
									easing: Chartist.Svg.Easing.easeInOutElastic
								}
							});
						}
					});
				}
			});
        </script>
    </body>
</html>

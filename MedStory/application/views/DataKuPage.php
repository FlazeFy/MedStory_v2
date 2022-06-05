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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

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
			#calendar {
			margin: 0 auto; }
			#calendar .fc-view-container {
				padding: 30px;
				background-color: #fff;
				-webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2);
				box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.2); }
				.fc-event {
				position: relative;
				/* for resize handle and other inner positioning */
				display: block;
				/* make the <a> tag block */
				font-size: 12px;
				line-height: 1.3;
				letter-spacing: 0.02em;
				border-radius: 3px;
				font-weight: 500;
				border: 1px solid #ddd;
				-webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.05);
				-moz-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.05);
				box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.05);
				/* default BORDER color */ }

.fc-event,
.fc-event-dot {
  background-color: #ffffff;
  color: #212121;
  position: relative;
  /* default BACKGROUND color */ }
.fc-event:hover {
  color: #212121;
  /* default TEXT color */
  text-decoration: none;
  /* if <a> has an href */ }
  .fc-event{
	  cursor:pointer;
	  padding:3px;
	  margin:4px;
	  box-shadow: rgba(0, 0, 0, 0.24) 0px 2px 6px;
  }
  	.fc-unthemed td.fc-today {
  		background: #22A7F0;
		opacity: 70%;		   
	}
	.fc-unthemed td.fc-today:hover{
  		background: #22A7F0;
		opacity: 70%;		   
	}
	.fc-day.fc-widget-content:hover {
		background:#f4f4f4;
	}
	thead.fc-head{
		background:#4183D7;
		color:whitesmoke;
	}
	.fc-month-button.fc-button.fc-state-default.fc-corner-left.fc-corner-right.fc-state-active{
		z-index:0;
	}
	.fc-header.fc-widget-header{
		background:#4183D7;
	}
	.fc-unthemed .fc-popover {
		border-radius: 6px;
	}
	.fc-unthemed .fc-popover .fc-header{
		background:#4183D7;
		color:whitesmoke;
	}

	.fc-unthemed .fc-popover .fc-header .fc-close {
		color:whitesmoke;
	}
	.fc-more{
		color:#212121;
		font-style:italic;
	}
	span .fc-content.fc-title{
		font-size:14px;
		color:red;
	}
	.fc-popover.fc-more-popover .fc-event{
		margin-bottom:6px;
		height:25px;
		padding:5px;
  	}
	.fc-popover.fc-more-popover .fc-event .fc-title{
		font-size:13px;
		margin-top:10px;
  	}
	.fc-body.fc-widget-content{
		width:100%; 
		max-height: calc(60vh - 200px); 
		overflow-x: auto;
	}
	.fc-next-button.fc-button.fc-state-default.fc-corner-right{
		z-index:0;
	}
	.fc-prev-button.fc-button.fc-state-default.fc-corner-left{
		z-index:0;
	}
	.fc-today-button.fc-button.fc-state-default.fc-corner-left.fc-corner-right{
		z-index:0;
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
								<h5 style='font-size:16px; font-weight:w500;'>Rata-rata</h5>
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
										$round = $hari/$i;
										echo number_format($round, 2);
									} else {
										echo "- ";
									}	
								?> cal</h5> 		
								<h5 style='font-size:14px;'>Terpenuhi harian: <?php
									$asupan = 0;
									$hari = 0;
									$i = 0;
									$j = 0;
									foreach($dataUser as $user){
										foreach($dataKebutuhan as $kebutuhan){
											if(($user['namaPengguna'] == $this->session->userdata('userTrack')) && ($kebutuhan['id_user'] == $user['id_user'])){
												foreach($totalUserKebutuhan as $cal){
													if(($cal['date'] == $kebutuhan['date'])){
														$asupan += $cal['kalori'];
														$j++;
													}
												}
												$hari += $asupan;
												$asupan = 0;
												$i++;
											}
										}
										if($i != 0){
											$round = $hari/$i;
											echo number_format($round, 2);
											$hari = 0;
										} else {
											echo "-";
										}									
									}
									if($j == 0){
										echo "<br><div class='container' style='margin-top:1%; margin-bottom:2%;'>
											<p style='font-style:italic; text-align:center; color:grey;'>Maaf, Anda belum menambahkan asupan apapun</p>
										</div>";
									}
								?> cal</h5> 							
							</div>
							<div class='col-md-6'>
								<p style='font-size:16px; font-weight:500;'>Asupan terfavorit: </p> 
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

		<div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
			<h5 style="text-align: left; color:#696969;">Kalender Asupan</h5>
			<div id="calendar"></div>
			<br>
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

		<!--Day modal-->
		<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" style='width:340px; height:200px; border-radius:4px; margin-top:3px;' id='imageAsupan'>
					</div>
					<div class="col-md-5">
						<p> Kalori: <span id="modalBody"></span></p>
						<p> Kategori: <span id="kalori"></span></p>
						<p> Ukuran: <span id="ukuran"></p>
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
			<form method="POST" action="dataKu/tambahJadwalCal">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah asupan pada :</h5>
				<div class="col-sm">
					<select class="form-control" name="waktu" style="background:#f4f4f4; border-width: 0 0 3px; 
						border-bottom: 3.5px solid #4183D7; color:#212121; width:200px;">
						<option value="pagi">Pagi</option>
						<option value="siang">Siang</option>
						<option value="malam">Malam</option>
					</select>
				</div>
				<div class="col-sm">
					<input required class='form-control' name='date' type='date' id='date' style="background:#f4f4f4; border-width: 0 0 3px; 
						border-bottom: 3.5px solid #4183D7; color:#212121; width:200px; margin-left:-40px;"></input>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style='max-height: calc(90vh - 180px); overflow-y: auto;'>
				<section class="py-1 header">
					<!-- Daftar kalori hari ini -->
					<div class='container-fluid' style='width:100%;'>
						<div class="row">
							<div class="col-md-3">
								<!-- Tabs nav -->
								<div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link mb-2 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-sayuran" role="tab" aria-controls="v-pills-home" aria-selected="true">
									<i class="fa-solid fa-carrot"></i>
									<span class="font-weight-w500 small text-uppercase">Sayuran</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-buah" role="tab" aria-controls="v-pills-profile" aria-selected="false">
									<i class="fa-solid fa-apple-whole"></i>
									<span class="font-weight-w500 small text-uppercase">Buah-Buahan</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-daging" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-drumstick-bite"></i>
									<span class="font-weight-w500 small text-uppercase">Daging</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-seafood" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-shrimp"></i>
									<span class="font-weight-w500 small text-uppercase">Seafood</span></a>

								<a class="nav-link mb-2 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-lain" role="tab" aria-controls="v-pills-settings" aria-selected="false">
									<i class="fa-solid fa-bowl-rice"></i>
									<span class="font-weight-w500 small text-uppercase">Lainnya</span></a>
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
															<label class='container' id='checkCont'><input type='checkbox' id='checkItem' name='id_asupan[]' value='".$asupan['id_asupan']."' style='height:50px;'>
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
															<label class='container' id='checkCont'><input type='checkbox' id='checkItem' name='id_asupan[]' value='".$asupan['id_asupan']."' style='height:50px;'>
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
															<label class='container' id='checkCont'><input type='checkbox' id='checkItem' name='id_asupan[]' value='".$asupan['id_asupan']."' style='height:50px;'>
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
															<label class='container' id='checkCont'><input type='checkbox' id='checkItem' name='id_asupan[]' value='".$asupan['id_asupan']."' style='height:50px;'>
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
															<label class='container' id='checkCont'><input type='checkbox' id='checkItem' name='id_asupan[]' value='".$asupan['id_asupan']."' style='height:50px;'>
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

		<!-- Tambah asupan -->
		<div class="modal fade" id="kaloriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<form method="POST" action="dataKu/calHarian">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah kebutuhan kalori pada :</h5>
				<div class="col-sm">
					<input required class='form-control' name='date2' type='date' id='date2' style="background:#f4f4f4; border-width: 0 0 3px; 
						border-bottom: 3.5px solid #4183D7; color:#212121; width:200px;"></input>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" >
				<?php 
					foreach($dataUser as $user){
						if($user['namaPengguna'] == $this->session->userdata('userTrack')){
							echo"<input type='text' class='form-control' name='id_user' value='".$user['id_user']."' hidden>";
						}
					}
				?>
				<p style='text-align:center;'>Kebutuhan kalori: </p>
				<div class='container' style='margin-left:30%;'>
					<input style="background:#f4f4f4; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;"
						name='calTotal'></input>
					<button class='btn btn-success' type='submit'>Tambah</button>
				</div>
			</div>
			<div class="modal-footer">
				<div class='row' style='width:100%;'>
					<div class='col-md-9'>
						<p style='color:red; font-size:14px;'><i class="fa-solid fa-circle-info"></i> Anda belum menambahkan kebutuhan kalori pada hari ini</p>
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
					<p style='text-align:center; font-weight:w500;'>".$error_tambahCalHarian."</p>
				</div>		
			</div>
		</div>
		</div>";}	
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
			function refreshMessage() {
				window.location.href="http://localhost/MedStory/dataKu";  
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

		<script type="text/javascript">
		var events = <?php echo json_encode($data) ?>;
		
		var date = new Date()
		var d    = date.getDate(),
			m    = date.getMonth(),
			y    = date.getFullYear()
				
		$('#calendar').fullCalendar({
			header    : {
			left  : 'prev,next today',
			center: 'title',
			right : 'month'
			},
			buttonText: {
			today: 'Hari ini',
			month: 'Bulan',
			week : 'week',
			day  : 'day'
			},

			eventLimit: true,
					events: [
				<?php 
					foreach($dataUser as $user){
						if($user['namaPengguna'] == $this->session->userdata('userTrack')){
							foreach($dataJadwal as $cal){
								if($cal['id_user'] == $user['id_user']){
									foreach($dataAsupan as $asupan){
										if($cal['id_asupan'] == $asupan['id_asupan']){
											echo"{ title: '".$asupan['nama']."',
												start: '".$cal['date']."',
												category: '".$asupan['kategori']."',
												ukuran: '".$asupan['ukuran']."',
												image: 'http://localhost/MedStory/assets/asupan/".$asupan['nama'].".jpg',
												description: '".$asupan['kalori']."'},";
										}
									}
								}
							}
						}
					}
				?>
			], 
			eventClick:  function(event, jsEvent, view) {
				$('#modalTitle').html(event.title);
				$('#modalBody').html(event.description);
				$('#kalori').html(event.category);
				$('#ukuran').html(event.ukuran);
				document.getElementById("imageAsupan").src = event.image;
				$('#calendarModal').modal();
        	},
			dayClick:  function(date) {
				var x = 0;
				var y = 0;
				const dates = [<?php 
					foreach($dataUser as $user){
						if($user['namaPengguna'] == $this->session->userdata('userTrack')){
							foreach($dataKebutuhan as $cal){
								if($cal['id_user'] == $user['id_user']){
									echo "'".$cal['date']."',";
								}
							}
						}
					}
				?>];
				var i = <?php 
					$i = 0;
					foreach($dataUser as $user){
						if($user['namaPengguna'] == $this->session->userdata('userTrack')){
							foreach($dataKebutuhan as $cal){
								if($cal['id_user'] == $user['id_user']){
									$i++;
								}
							}
						}
					}
					echo $i;	
					?>;
				while (x < i){
					if(date.format() == dates[x]){
						document.getElementById("date").defaultValue = date.format();
						$('#asupanModal').modal();
						y++;
					}
					x++;
				}
				if (y == 0){
					document.getElementById("date2").defaultValue = date.format();
					$('#kaloriModal').modal();
				} 
        	},
		})
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
			$(window).on('load', function() {
				$('#errorCalHarian').modal('show');
			});
			$('#errorCalHarian').modal({
				backdrop: 'static', 
				keyboard: false
			});  
        })
        </script>
    </body>
</html>

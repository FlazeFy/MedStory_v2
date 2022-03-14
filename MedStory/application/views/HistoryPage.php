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
                <li><a href="myData">SmartDoc</a></li>
                <li  id="active"><a href="">Forum</a></li>
                <li><a href="diskusi">Dataku</a></li>
				<li><a href="">Darurat</a></li>
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
        <main>

		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='http://localhost/MedStory/assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>

        <!--News feeds.-->
        <br><br><br>
        <h5 style="margin-left: 13%;">Selamat datang, <?= $data = $this->session->userdata('userTrack'); ?></h5>
        <div class="container bg-white" id="card-car" style="margin-bottom: 1%; margin-top: 1%; padding-top: 0.5%; border-radius: 10px;">
          <h5 style="text-align: left; color:#696969;">Informasi kesehatan</h5>				
				<!--Slider-->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
				<ol class="carousel-indicators" style='z-index: 2'>
				<?php 
					$status =' active';
					$i = 0;
					foreach ($dataBerita as $data) {
						echo "<li data-target='#carouselExampleIndicators' data-slide-to='".$i."' class='".$status."'></li>";
						$status = ' ';
						$i++;
					}
				?>
				</ol>
				<div class="carousel-inner">
				<?php
				$status = ' active';
				foreach ($dataBerita as $data) {
				echo "
					<div class='carousel-item ".$status."' style='height:430px'  type='button'>
						<img class='d-block w-100' src='http://localhost/MedStory/assets/newsImage/Main".$data['idBerita'].".jpeg' alt='Main".$data['idBerita'].".jpeg' style='height:410px; border-radius: 10px; opacity:95%'>
						<div class='carousel-caption d-none d-md-block' style='z-index:1'>
							<h3 style='font-family: Lucida Sans; font-size: 26px; background: rgba(130, 130, 130, 0.5); border-radius:5px;'>".$data['title']."</h3>
							<p>".$data['tanggal']."</p>
						</div>
					</div>";
					$status = ' ';
				}
				?>
				<!--Slider Control-->
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="container bg-white" id="card-car" style="margin-bottom: 1%; border-radius: 10px;">
			<br>
		<div id="accordion">
			<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2"
				style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Forum Diskusi</button>
			<button class="btn btn-primary" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"
				style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Pertanyaan Saya</button>
			<button class="btn btn-success" style="float:right; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;" data-toggle="modal" data-target="#tambahDiskusiModal" 
				aria-expanded="false" aria-controls="multiCollapseExample2">Buat Pertanyaan</button>
			</p><hr>
			<div class="row">
			<div class="col-md-12">
				<div class="collapse show" id="multiCollapseExample1" data-parent="#accordion">
					<div class="container">
						<h5 style="text-align: left; color:#696969;">Forum diskusi</h5>
						<?php 
							$i = 1; $count = 0;
							foreach($dataDiskusi as $data){		
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
										<h6 style='font-size:13px; float:right; padding-left:5px;'>0</h6>
											<img src='http://localhost/MedStory/assets/Comment.png' style='width:25px; height:20px; float:right; margin-top:-2px; padding-left:5px;'>
										<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$i."' 
										aria-expanded='true' aria-controls='collapseOne''>Lihat komentar
											<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
									</div>
									<!--Extend balasan.-->
									<div id='collapse".$i."' class='collapse' aria-labelledby='headingOne' data-parent='#accordion2'>
										<div class='card-body'>";
										foreach ($dataBalasan as $reply){
											if ($data['id_diskusi'] == $reply['id_diskusi']){
											echo"<div class='container'>
											<img src='http://localhost/MedStory/assets/uploads/user_".$reply['pengirim'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:45px; height:45px; 
												float:left; margin-right:1%;'>
												<h5 style='font-size:20px; margin-left:15px; color:#22A7F0;'>".$reply['pengirim']."</h5>";
												if ($reply['imageURL'] != 'null'){
													echo"<div class='row' style='margin-bottom:1%;'>
													<div class='col-md-4 border-right'>
														<img  src='http://localhost/MedStory/assets/uploads/balasan/balasan_".$reply['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
														alt='' data-toggle='modal' data-target='#zoom".$reply['id_balasan']."'>
													</div>
													<div class='col-md-6' style=''>
													<p style='font-size:13px;'>".$reply['isi']."</p>
													</div>
												</div>";
												} else { echo"<p style='font-size:13px;'>".$reply['isi']."</p>";}

												echo"</div>"; $count++;}} 
												if(($count == 0) &&($data['namaPengguna'] == $this->session->userdata('userTrack'))) {
													echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
													<p style='font-style:italic; text-align:center;'>Maaf, pertanyaan Anda belum dijawab</p>
													<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Sorry.png' style='display: block;
														margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
													<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
												</div>";
												} else if (($count == 0) &&($data['namaPengguna'] != $this->session->userdata('userTrack'))){
													echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
													<p style='font-style:italic; text-align:center;'>Pertanyaan ini belum dijawab</p>
													<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Error404.png' style='display: block;
														margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
													<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Ayo jadi yang pertama</p>
													</div>";
												} else if ($count > 0) {echo"<h5 style='font-size:15px; font-style:italic;'>Menampilkan ".$count." balasan...</h5><br>";}
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
															background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;' name='inputIsi'>
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
													</div>
												</form>";
										echo"</div>
									</div>
									</div>
								</div>
							";
							$count = 0; $i++; 
						} 
						echo"</div>";?>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="collapse" id="multiCollapseExample2" data-parent="#accordion">
					<div class="container">
						<h5 style="text-align: left; color:#696969;">Pertanyaan saya</h5>
						<?php 
							$j = 1; 
							foreach($dataPertanyaan as $data){		
								echo"
								<div id='accordion2'>
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
										<h6 style='font-size:13px; float:right; padding-left:5px;'>0</h6>
											<img src='http://localhost/MedStory/assets/Comment.png' style='width:25px; height:20px; float:right; margin-top:-2px; padding-left:5px;'>
										<h5 style='font-size:14px; float:left; text-decoration:underline; color:#4183D7;' type='button' data-toggle='collapse' data-target='#collapse".$j."' 
										aria-expanded='true' aria-controls='collapseOne''>Lihat komentar
											<img src='http://localhost/MedStory/assets/icon/Drop Down.png' style='width:25px; height:20px; float:left; padding-left:3px;'></h5>
									</div>
									<!--Extend balasan.-->
									<div id='collapse".$j."' class='collapse' aria-labelledby='headingOne' data-parent='#accordion2'>
										<div class='card-body'>";
										foreach ($dataBalasan as $reply){
											if ($data['id_diskusi'] == $reply['id_diskusi']){
											echo"<div class='container'>
											<img src='http://localhost/MedStory/assets/uploads/user_".$reply['pengirim'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:45px; height:45px; 
												float:left; margin-right:1%;'>
												<h5 style='font-size:20px; margin-left:15px; color:#22A7F0;'>".$reply['pengirim']."</h5>";
												if ($reply['imageURL'] != 'null'){
													echo"<div class='row' style='margin-bottom:1%;'>
													<div class='col-md-4 border-right'>
														<img  src='http://localhost/MedStory/assets/uploads/balasan/balasan_".$reply['imageURL'].".jpg' style='border-radius:6px; width:100%; height:100%; cursor:pointer' 
														alt='' data-toggle='modal' data-target='#zoom".$reply['id_balasan']."'>
													</div>
													<div class='col-md-6' style=''>
													<p style='font-size:13px;'>".$reply['isi']."</p>
													</div>
												</div>";
												} else { echo"<p style='font-size:13px;'>".$reply['isi']."</p>";}

												echo"</div>"; $count++;}} 
												if(($count == 0) &&($data['namaPengguna'] == $this->session->userdata('userTrack'))) {
													echo "<div class='container' style='margin-top:1%; margin-bottom:2%;'>
													<p style='font-style:italic; text-align:center;'>Maaf, pertanyaan Anda belum dijawab</p>
													<img src='http://localhost/MedStory/assets/icon/Questions.gif' alt='Sorry.png' style='display: block;
														margin-left: auto; margin-right: auto; width: 200px; height: 200px;'>
													<p style='font-style:italic; text-align:center; font-size:18px; color:#7289da;'>Jangan khawatir, ini hanya masalah waktu</p>
												</div>";
												} else if ($count > 0) {echo"<h5 style='font-size:15px; font-style:italic;'>Menampilkan ".$count." balasan...</h5><br>";}
												echo"<form method='post' action='history/balasDiskusi' class='form-inline' enctype='multipart/form-data'>
													<input type='text' class='form-control' name='inputIdB' value='".$data['id_diskusi']."' hidden>
													<div class='container'><hr>
														<label class='switch' style='float:left; margin-right:1%;'>
														<input type='checkbox' name='imageSwitchR'>
															<span class='slider round' type='button' data-toggle='collapse' data-target='#collapseImage".$j."'></span>
														</label>
														<a style='float:left;'>Image</a>
														<button class='btn btn-primary' style='color:whitesmoke; background-color:#00a13e; float:right; border:none;' type='submit'>Balas</button>
														<input class='form-control' type='text' placeholder='Ketik balasan Anda disini...' style='width:40%; float:right; margin-right:1%;
															background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;' name='inputIsi'>
														<div class='collapse' id='collapseImage".$j."'>
															<div class='container' style='width:40%; float:left;'>
																<div class='input-group mb-3' style='background-color:#212121; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121;
																	border-radius:5px;'>
																	<div class='input-group-prepend'>
																		<span class='input-group-text'>jpg</span>
																	</div>
																	<div class='custom-file'>
																		<input type='file' class='custom-file-input' id='uploadImage' name='uploadImageR' accept='image/*'>
																		<label class='custom-file-label text-left' for='uploadImage'>file size max 5 mb</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</form>";
										echo"</div>
									</div>
									</div>
								</div>
							";
							$count = 0; $j++; 
						}?>
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
				
		<!--Javascript PDF-->
		<script>
			function createPDF() {
				var sTable = document.getElementById('dataTable').innerHTML;

				var style = "<style>";
				style = style + "table {width: 100%;font: 16px Calibri;}";
				style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
				style = style + "padding: 2px 3px;text-align: center;}";
				style = style + "</style>";

				// CREATE A WINDOW OBJECT.
				var win = window.open('', '', 'height=700,width=700');

				win.document.write('<html><head>');
				win.document.write('<title>Pemeriksaan Darah Lengkap</title>');   // <title> FOR PDF HEADER.
				win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
				win.document.write('</head>');
				win.document.write('<body>');
				win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
				win.document.write('</body></html>');
				win.document.close(); 	// CLOSE THE CURRENT WINDOW.
				win.print();    // PRINT THE CONTENTS.
			}
		</script>

		<!--Javascript signout-->
		<script type="text/javascript">
			function signOut(){
				//Verifikasi SignOut
				var pop = window.confirm("Apakah Anda yakin?");
				if(pop){
						window.location.href = "http://localhost/MedStory";
						alert("Berhasil keluar");
				} else {
						alert("Sign-Out dibatalkan");
				}
			}
			function editEnabled(){
					document.getElementById("Inputan").disabled = false;
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
        </script>
    </body>
</html>

<!--Leonardho R. Sitanggang 1302194041  SE-43-03-->
<!DOCTYPE html>
<html>
  <head>
    <title>MedStory | Account</title>
    <!--Meta tags.-->
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--CDN Bootstrap CSS.-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>

		<!--Source file.-->
		<link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css" />
	</head>

	<body>
		<!--Main navigation bar.-->
		<div id="Navigation">
			<ul>
                <img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
                <li><a href="smartDoc">SmartDoc</a></li>
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

		<!--Contents of page.-->
		<main><br><br>
		<div class="container" id="card-car" style="margin-bottom: 2%; padding-top: 1%;">
			<h2>Profil >> <?php foreach ($dataUser as $data){echo $data['namaPengguna'];} ?></h2>

		<!--Left section.-->
		<div class="row">
			<div class="col-lg-4 col-xlg-3 col-md-5">
				<div class="card" style="background-color: #333333; margin-bottom:20px;">
					<div class="card-body">
						<!--Mini profil.-->
						<div class="d-flex flex-column align-items-center text-center">
							<img src="http://localhost/MedStory/assets/uploads/user_<?php foreach ($dataUser as $data){echo $data['namaPengguna'];} ?>.jpg" alt="Admin" 
								class="rounded-circle img-fluid" style="width:200px; height:200px;">

						<div class="mt-3">
							<h4 style="color: white;"><?php foreach ($dataUser as $data){echo $data['namaLengkap'];}?></h4>
							<p class="text-secondary" style="color: white;"><?php foreach ($dataUser as $data){echo $data['pekerjaan'];}?></p>
							<p class="text-muted font-size-sm" style="color: white;"><?php foreach ($dataUser as $data){echo $data['alamat'];}?></p>
							
						<form action="<?= site_url('account/change') ?>" method="post" enctype="multipart/form-data">
							<!--Upload file.-->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Foto Profil</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
									<label class="custom-file-label text-left" for="uploadImage">max 1 mb</label>
								</div>
							</div>
							<button class="btn btn-primary" type ="submit" style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Ganti Foto</button></form>
						</div><hr>

						<!--Statistik.-->
						<h4 style="color: white;">Statistik</h4>
						<div class="card-deck" style="margin: 10px;">
							<div class="card" style="background-color: #333333; border: none;">
								<img src="http://localhost/MedStory/assets/icon/Add Discussion.png" style="width:55px;">
								<p style="color: white; font-size: 12px;"><?php $count = 0; 
									foreach ($statsDiskusi as $data){$count++;} echo $count;?> diskusi</p>
							</div>
							<div class="card" style="background-color: #333333; border: none;">
								<img src="http://localhost/MedStory/assets/icon/Discussion.png" style="width:45px;">
								<p style="color: white; font-size: 12px;"><?php $count = 0; 
									foreach ($statsBalasan as $data){$count++;} echo $count;?> balasan</p>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!--Right section.-->
		<div class="col-lg-8 col-xlg-9 col-md-7">
		<form method="post" action="<?php echo base_url().'account/ubah';?>">
			<!--Text entry edit acc.-->
			<input hidden class="form-control" id ="Inputan" type="text" name="id" 
				value="<?php foreach ($dataUser as $data){echo $data['id_user'];}?>" id="id"></input>
		<div class="card">
			<div class="card-body">

					<div class="row">
						<div class="col-sm-3">
							<h6 class="h6">Nama Lengkap</h6>
						</div>
						<input class="form-control" id ="Inputan" type="text" name="username" 
							value="<?php foreach ($dataUser as $data){echo $data['namaLengkap'];}?>" id="fullname"></input>
					</div><hr>
					
					<div class="row">
						<div class="col-sm-3">
							<h6 class="h6">Email</h6>
						</div>
						<input class="form-control" id ="Inputan" type="email" name="email" 
							value="<?php foreach ($dataUser as $data){echo $data['email'];}?>" id="email"></input>
					</div><hr>

					<div class="row">
						<div class="col-sm-3">
							<h6 class="h6">Nomor Telepon</h6>
						</div>
						<input class="form-control" id ="Inputan" type="text" name="nomorPonsel" 
							value="<?php foreach ($dataUser as $data){echo $data['nomorPonsel'];}?>" id="ponsel"></input>
					</div><hr>

					<div class="row">
						<div class="col-sm-3">
							<h6 class="h6">Password</h6>
						</div>
						<input class="form-control" id ="Inputan" type="password" name="password" 
							value="<?php foreach ($dataUser as $data){echo $data['password'];}?>" id="pass"></input>
					</div><hr>

					<!--Colapse Data Diri-->
					<div class="container">
						<a data-toggle="collapse" href="#collapseDataDiri" role="button" aria-expanded="false" aria-controls="collapseExample">
							<h6 style="color: #4183D7;">Data Diri
							<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
						</a>
							<div id="collapseDataDiri" class='card-body collapse' style='width:100%;'>
								<div class="row">
									<div class="col-sm-3">
										<h6 class="h6">Alamat</h6>
									</div>
									<input class="form-control" id ="Inputan" type="text" name="alamat" 
										value="<?php foreach ($dataUser as $data){echo $data['alamat'];}?>" id="add"></input>
								</div><hr>

								<div class="row">
									<div class="col-sm-3">
										<h6 class="h6">Pekerjaan</h6>
									</div>
									<input class="form-control" id ="Inputan" type="text" name="pekerjaan" 
										value="<?php foreach ($dataUser as $data){echo $data['pekerjaan'];}?>" id="job"></input>
								</div><hr>

								<div class="row">
									<div class="col-sm-3">
										<h6 class="h6">Tinggi & Berat Badan</h6>
									</div>
									<input class="form-control" id ="Inputan" type="number" name="tinggiBadan" 
										value="<?php foreach ($dataUser as $data){echo $data['tinggiBadan'];}?>" id="tBadan" style="width: 80px;"></input>
										<a class="sat" style=" margin-right: 50px;">Cm</a>
									<input class="form-control" id ="Inputan" type="number" name="beratBadan" 
										value="<?php foreach ($dataUser as $data){echo $data['beratBadan'];}?>" id="bBadan" style="width: 80px;"></input>
										<a class="sat" style=" margin-right: 50px;">Kg</a>
								</div>

							</div>
					</div><hr>

				<div class="row">
					<div class="col-sm-12">
						<img src="http://localhost/MedStory/assets/Info.png" style="width:20px; float: left;">
						<p style="float: left; color: #4183D7; font-size: 13px;">Password harus memiliki min 8 karakter, 1 huruf kapital, dan 1 angka.</p>
						<button class='btn btn-success' style='float:right; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;' type="submit">Simpan Perubahan</button>
					</div>
				</div>
			</div>
		</form><hr>

			<!--Upload dokumen validasi.-->
		<form action="<?= site_url('account/uploadDocument') ?>" method="post" enctype="multipart/form-data">
			<div class="container" style="background-color:#00B32C; border-radius: 15px; width: 80%; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"><br>
				<p style="color: white;">Selesaikan pendaftaran dengan mengunggah foto/dokumen KTP dan foto diri (selfie)</p>
				<p style="font-style: italic; font-size: 12px; color: white;">0 dari 2 berkas terkumpul</p>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">pdf/png/jpg</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*, application/pdf' required>
							<label class="custom-file-label text-left" for="uploadImage">max 3 mb per file</label>
						</div>
					</div>
				<button type="submit" style="font-size: 12px; border:none; border-radius:5px;"><img src="http://localhost/MedStory/assets/Upload.png" style="width:30px;">Unggah Bukti</button>
				<img src="http://localhost/MedStory/assets/Id Card.png" style="width:60px; float: right;"><br><br>
			</div>
		</form><br>

		</div>
	</div>
	</main>
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
        		</script>
						
			<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<!--Ajax for json-->
			<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

            <!--Collapse JQuery-->
            <script>
				$('.custom-file-input').on('change', function() { 
					let fileName = $(this).val().split('\\').pop(); 
					$(this).next('.custom-file-label').addClass("selected").html(fileName); 
				});
            </script>

    </body>
</html>

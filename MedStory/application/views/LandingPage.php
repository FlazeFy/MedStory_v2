<!--Leonardho R Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<html>
	<head>
        <title>MedStory</title>
        <!--Meta tags.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS.-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Login.css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<style>
			body {
				background: white;
			}
			li a {
				margin-top:10px;
			}
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
				margin: 5px auto;
				padding: 0 100px;
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
		</style>
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="http://localhost/MedStory/assets/logoWhite.png">
                <li><a href="" class="nav-link scrollto">SmartDoc</a></li>
                <li><a href="" class="nav-link scrollto">Forum</a></li>
                <li><a href="" class="nav-link scrollto">Dataku</a></li>
				<li><a href="" class="nav-link scrollto">Darurat</a></li>
                <li style="float:right; margin:5px;"><a href="" class="nav-link scrollto" style="font-size:14px; background:#00a34d; border-radius:5px;" 
					data-toggle="collapse" data-target="#multiCollapseExample3">Masuk <i class="fa fa-sign-in mr-2"></i>
					</a>
				</li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="http://localhost/MedStory/assets/Setting.png"></button>
                        <!--DropDown menu navigation-->
                        <div id="dropdown-content">
                            <a href="">Tentang</a>
                            <a href="">Kebijakan & Privasi</a>
						</div>
                </div>
            </ul>
        </div>

		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='http://localhost/MedStory/assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>
		
		<br><br><br>
		<section class="align-items-center">
			<div class="container" id="myGroup">
				<div class="row">
					<div class="col-lg-6 d-flex flex-column justify-content-center">
						<h1>Selamat datang di MedStory</h1>
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Interdum velit laoreet id donec ultrices tincidunt arcu non. Mus mauris vitae ultricies.</h4>
						<div class='container'>
							<div class="text-center text-lg-start">
								<button class='btn btn-primary' data-toggle="collapse" data-target="#multiCollapseExample2">Gabung sekarang <i class="fa fa-arrow-right mr-2"></i></button>
							</div>
						</div>
						<!--Error Message-->
						<h5 style='color:red; font-size:14px; margin-top:10px; text-align:center;'><?= $this->session->flashdata('error_create')?> <?= $this->session->flashdata('error_gambar')?></h5>						
					</div>
					<div class="collapse show" id="multiCollapseExample1" >
						<div class='container-fluid'>
							<img src="http://localhost/MedStory/assets/icon/Welcome.gif" class="img-fluid" alt="" style='height:400px; margin-left:40px;'>
						</div>
					</div>
				</div>

				<div class="collapse" id="multiCollapseExample2" data-parent="#myGroup">
					<div class='container-fluid' style=''>
					<h2>Pendaftaran</h2>
					<section class="py-2 header">
						<div class="container py-4">
							<div class="row">
								<div class="col-md-3">
									<!-- Tabs nav -->
									<div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
										<i class="fa fa-book mr-2"></i>
										<span class="font-weight-bold small text-uppercase">Privasi dan Kebijakan</span></a>

									<a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
										<i class="fa fa-photo mr-2"></i>
										<span class="font-weight-bold small text-uppercase">Foto Profil</span></a>

									<a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
										<i class="fa fa-id-card mr-2"></i>
										<span class="font-weight-bold small text-uppercase">Data Diri</span></a>

									<a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
										<i class="fa fa-user mr-2"></i>
										<span class="font-weight-bold small text-uppercase">Data Akun</span></a>
									</div>
								</div>

								<div class="col-md-9">
									<!-- Tabs content -->
									<form method="post" class="signin-form" action="landing/newUser" enctype="multipart/form-data">
									<div class="tab-content" id="v-pills-tabContent">
										<div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
											<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Privasi dan Kebijakan</h5>
											<p class="font-italic text-muted" style='font-size:15px;'> 
												<input required type="checkbox" id="" name="agree" value="yes" style='width:30px;'>
												Saya menyetujui <a class="btn btn-link" style='text-decoration: underline; padding:0px;' data-toggle="modal" data-target="#kebijakanModal">kebijakan, privasi</a>, 
												dan <a class="btn btn-link" style='text-decoration: underline; padding:0px;' data-toggle="modal" data-target="#ketentuanModal"> ketentuan </a> 
												yang sudah ditetapkan oleh PT. MedStory selaku pemilik dan pengembang dari Aplikasi ini. Saya sudah membaca persyaratan dan akan menggunakan aplikasi sesuai dengan peraturan yang berlaku
											</p>
										</div>
										
										
										<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
											<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Foto Profil</h5>
											<div class="d-flex flex-column align-items-center text-center p-3 py-5">
												<img src="http://localhost/Medstory/assets/defaultImg.png" alt="Admin" class="rounded-circle img-fluid" width="200px">
											</div>
											<!--Upload file.-->
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">jpg</span>
												</div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
													<label class="custom-file-label text-left" for="uploadImage">max 1 mb</label>
												</div>
											</div>
										</div>
										
											
										<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
											<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Data Diri</h5>
											<div class="row mt-2">
												<!--Data diri.-->
												<div class="col-md-12">
													<h6 >Nama Lengkap</h6>
													<input required type="username" class="form-control" name="fullname" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>                            
												<div class="col-md-12">
													<h6>Nomor Induk Kependudukan</h6>
													<input required type="text" class="form-control" name="nik" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Tempat Lahir</h6>
													<input required type="text" class="form-control" name="tLahir"
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Tanggal Lahir</h6>
													<input required type="date" class="form-control" name="tglLahir"
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Alamat</h6>
													<input  required type="text" class="form-control" name="add" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Pekerjaan</h6>
													<input required type="text" class="form-control" name="job" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-6">
													<h6>Tinggi Badan (Cm)</h6>
													<input  required type="number" class="form-control" name="tBadan" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-6">
													<h6>Berat Badan (Kg)</h6>
													<input  required type="number" class="form-control" name="bBadan" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12" id="jenisKelamin"><h6>Jenis Kelamin</h6>
													<fieldset style='color:black;'>
													<input type="radio" name="cat_input" class="radioB" id="radioB" value="Pria">												
														<img src="http://localhost/Medstory/assets/icon/Man.gif" alt="Pria" class="rounded-circle img-fluid" width="40%">
													</input>
													<input type="radio" name="cat_input" class="radioB" id="radioB" value="Wanita">
														<img src="http://localhost/Medstory/assets/icon/Woman.gif" alt="Wanita" class="rounded-circle img-fluid" width="40%">
													</input>
													</fieldset>
												</div>
											</div> 
										</div>
											
										<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
											<h5 style='font-size:16px; color:#4183D7; margin-bottom:20px;'>Data Akun</h5>
											<div class="row mt-2">
												<div class="col-md-12">
													<h6>Nama Pengguna</h6>
													<input required type="text" class="form-control" name="username" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Email</h6>
													<input required type="email" class="form-control" name="email" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Nomor Ponsel</h6>
													<input required type="text" class="form-control" name="ponsel"
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Password</h6>
													<input required type="password" class="form-control" name="password"
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div>
												<div class="col-md-12">
													<h6>Konfirmasi Password</h6>
													<input required type="password" class="form-control" id="passCon" 
														style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:10px;">
												</div><br>
												<div class="col-md-12">
													<p style="color: #4183D7; font-size: 14px;"><i class='fa fa-info-circle'></i> Password harus memiliki min 8 karakter, 1 huruf
													kapital, dan 1 angka.</p><br>
													<!--Button.-->
													<div class="form-group mb-3">
														<button class="btn btn-success" type="submit" onclick="cekAkun()" style='width:100%; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'
															>Submit <i class="fa fa-send-o mr-2"></i></button>
													</div>
												</div>	
											</div>									
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
					</div>
				</div>

				<div class="collapse" id="multiCollapseExample3" data-parent="#myGroup">
					<div class='container' style='margin-bottom:30px;'>
					<form method="post" class="signin-form" action="landing/savedata">
						<h2 style='text-align:center;'>Masuk</h2>
						<div class="row justify-content-center" >
							<div class="col"style='max-width:500px;'>
								<div class="form-group mb-3">
									<label class="label" style="font-family:Lucida Sans;">Username</label>
									<input type="text" class="form-control" name="username" style="background:white; border-width: 0 0 3px; 
										border-bottom: 3.5px solid #4183D7; color:#212121;">
								</div> 
								<div class="form-group mb-3">                         
									<label class="label" style="font-family:Lucida Sans;">Password</label>
									<input type="password" class="form-control" name="password" style="background:white; border-width: 0 0 3px; 
										border-bottom: 3.5px solid #4183D7; color:#212121;">
								</div>   
						
							<!--Error Message-->
							<h5 style='color:red; font-size:14px;'><?= $this->session->flashdata('error_login'); ?></h5>

							<div class="form-group mb-3">
								<button class="form-control btn btn-success" type="submit" style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;' name="save">Submit</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">
										<input type="checkbox" checked style='margin-right:5px;'>
										<span class="checkmark"></span>
									</label>Ingat saya
								</div>
								<div class="w-50 text-right">
									<button class="btn btn-link" type="button" onclick="window.location.href='<?= site_url('forgot') ?>'"
										style='text-decoration: underline;'>Lupa Password</button>
								</div>
							</div> <!--FG button-->
							
							</div> <!--col-->
						</div> <!--row-->
						</form>
					</div>
				</div>
			</div>
		</div>

		</section>
		<hr><br>
		<section id="values" class="values">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
				<h1>Fitur kami</h1>
				</header>

				<div class="row">

				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="box">
					<img src="http://localhost/MedStory/assets/icon/SmartDoc.gif" style='width: 200px;' class="img-fluid" alt="">
					<h3>SmartDoc</h3>
					<p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
					<div class="box">
					<img src="http://localhost/MedStory/assets/icon/Diskusi.gif" style='width: 200px;' class="img-fluid" alt="">
					<h3>Forum</h3>
					<p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
					<div class="box">
					<img src="http://localhost/MedStory/assets/icon/DataKu.gif" style='width: 200px;' class="img-fluid" alt="">
					<h3>DataKu</h3>
					<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
					<div class="box">
					<img src="http://localhost/MedStory/assets/icon/Darurat.gif" style='width: 200px;' class="img-fluid" alt="">
					<h3>Darurat</h3>
					<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
					<div class="box">
					<img src="http://localhost/MedStory/assets/icon/HealthFeeds.gif" style='width: 200px;' class="img-fluid" alt="">
					<h3>Health Feeds</h3>
					<p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
					</div>
				</div>

				<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600" style='top:10px;'>
					<form method='POST' action='landing/insertMasukkan' >
					<div class="card" style='padding:10px; background:#4183D7;  box-shadow: rgba(0, 0, 0, 0.30) 0px 6px 10px;'>
						<h3 style='color:white;'>Masukkan dan saran</h3>
						<p style='color:white; margin-bottom:5px;'>Nama</p>
						<input required type="name" class="form-control" name="nama" style="background:white; color:#212121; margin-bottom:10px; margin-left-right:10px;"
							placeholder='nama lengkap / nama panggilan / inisial'>
						<p style='color:white; margin-bottom:5px;'>Kritik & Saran</p>
						<input required type="text" class="form-control" name="sarankritik" style="background:white; color:#212121; margin-bottom:10px; margin-left-right:10px;"
							placeholder='masukkan kritik dan saran Anda'>
						<button class='btn btn-success'>Kirim <i class="fa fa-send-o mr-2"></i></button>
					</div>
					</form>
				</div>

			</div>

		</section>
		<hr><br>

		<section id="faq" class="faq">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<h1>Pertanyaan Mengenai Kami</h1>
				</header>
				<div class="row">
					<div class="col-lg-6">
						<div id="accordion1">
							<div class="card border-0">
								<div class="card-header" id="headingOne" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseA1" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Keuntungan menggunakan MedStory?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>

								<div id="collapseA1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
							<div class="card border-0">
								<div class="card-header" id="headingTwo" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseA2" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Apakah MedStory menjamin keamanan pengguna?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>
								<div id="collapseA2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
							<div class="card border-0">
								<div class="card-header" id="headingThree" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseA3" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Apakah informasi yang tersedia telah relevan?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>
								<div id="collapseA3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div id="accordion2">
							<div class="card border-0">
								<div class="card-header" id="headingOne" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseB1" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Perbedaan MedStory dengan layanan serupa lainnya?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>

								<div id="collapseB1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
							<div class="card border-0">
								<div class="card-header" id="headingTwo" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseB2" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Apakah semua fitur & layanan tersedia gratis?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>
								<div id="collapseB2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
							<div class="card border-0">
								<div class="card-header" id="headingThree" style='background:white; border:none;'>
								<a data-toggle="collapse" href="#collapseB3" role="button" aria-expanded="false" aria-controls="collapseExample">
									<h6 style="color: #212121;">Kapan harus menggunakan MedStory?
									<img  src="http://localhost/MedStory/assets/icon/Drop Down.png" style="width: 28px; float: right;"></h6>
								</a>
								</div>
								<div id="collapseB3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr><br>

		<section id="review" class="faq">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<h1>Tanggapan Pengguna</h1>
				</header>
				<div class="row">
					<div class='col-md'>
						<?php echo"
						<div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='0'>
						<!-- Carousel indicators -->
						<ol class='carousel-indicators'>";
						$item = 0;
						$page = 0;
						foreach ($dataReview as $review){
							foreach ($dataPengguna as $pengguna){
								if ($review['id_user'] == $pengguna['id_user']){
									if($item == 0 && $page == 0){
										echo"<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
										$item++;
										$page++;
									} else if ($item % 3 == 0){
										echo"<li data-target='#myCarousel' data-slide-to='".$page."'></li>";
										$item++;
										$page++;
									} else if ($item % 3 != 0){
										$item++;
									}
								}
							}
						}
						echo"</ol>   

						<!-- Wrapper for carousel items -->
						<div class='carousel-inner'>";
							$k = 1;
							$state = ' active';
							foreach ($dataReview as $review){
								foreach ($dataPengguna as $pengguna){
									if ($review['id_user'] == $pengguna['id_user']){
										if($k % 4 == 0  || $k == 1){
											echo"<div class='item carousel-item".$state."' >
											<div class='row' style='margin:20px;'>";
										}
										echo"<div class='col-sm' style='max-width:280px;'>
											<div class='thumb-wrapper'>";
												if($review['star']){
													$count = 0;
													echo"<div class='row' style='padding:15px;'>";
													while($count < $review['star']){
														echo"<div class='col'><img src='http://localhost/MedStory/assets/Rating.png' style='width:20px;'></div>";
														$count++;
													}
													echo"</div>";
												}
												echo"<div class='img-box'>
													<img src='http://localhost/MedStory/assets/uploads/user_".$pengguna['namaPengguna'].".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:100px; 
														top:4px; height:100px;'>								
												</div>
												<div class='thumb-content'>
													<p style='color:#212121; font-size:12px;'>".$review['text']."</p>									
													<p style='font-size:11px; float:right;'>".$review['datetime']."</p>
													<h5 style='font-size:13px; float:left; color:#212121;'>by :".$pengguna['namaPengguna']."</h5>
													<br>
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
							}
						echo"</div>
						</div></div></div>
						<!-- Carousel controls -->
						<a class='carousel-control-prev' href='#myCarousel' data-slide='prev'>
							<i class='fa fa-angle-left'></i>
						</a>
						<a class='carousel-control-next' href='#myCarousel' data-slide='next'>
							<i class='fa fa-angle-right'></i>
						</a>
					</div>";
					?>
				</div>
			</div>
		</section>
		<br><hr>

		<section id="announcement" class="faq">
			<div class="container" data-aos="fade-up">
				<header class="section-header">
					<h1>Pemberitahuan</h1>
				</header>
				<div class="container-fluid" style='margin-top:20px;'>
					<?php foreach($dataUpdate as $data){
						echo "<p style='font-size:14px; text-align:center;'>".$data['tanggal']." (".$data['jam'].") || ".$data['deskripsi']."</p>";
					} ?>
				</div>
			</div>
		</section>
		<br>

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

		<!-- Success Masukan Pop-up -->
		<?php if(isset($message_Masukan)) { echo"
		<div class='modal fade' id='successMasukan' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title'>Terima kasih</h5>
				<img class='closebtn' src='http://localhost/MedStory/assets/Error.png' style='width:35px;'
					type='button' data-dismiss='modal' aria-label='Close' onClick=''>
			</div>
			<div class='modal-body'>
				<img src='http://localhost/MedStory/assets/icon/Appreciation.gif' alt='Hello.gif' style='display: block;
					margin-left: auto; margin-right: auto; width: 70%; height: 70%;'>
				<h5 class='' style='text-align:center; font-color:whitesmoke;'>".$message_Masukan."</h5>
			</div>		
			</div>
		</div>
		</div>";}	
		?>

		<!-- Kebijakan Modal -->
		<div class="modal fade" id="kebijakanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="kebijakanModalLabel">Kebijakan & Privasi</h5>
				<img class='closebtn' src='http://localhost/MedStory/assets/Error.png' style='width:35px;'
					type='button' data-dismiss='modal' aria-label='Close' onClick=''>
			</div>
			<div class="modal-body" style='max-height: calc(98vh - 160px); overflow-y: auto;'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam vulputate dignissim suspendisse in est ante in nibh mauris. Tellus at urna condimentum mattis pellentesque. Eget nunc scelerisque viverra mauris in. Quis hendrerit dolor magna eget. Vitae tortor condimentum lacinia quis. Aliquam ut porttitor leo a diam sollicitudin. Fermentum odio eu feugiat pretium. Leo duis ut diam quam. Nunc vel risus commodo viverra maecenas. Dui faucibus in ornare quam viverra orci sagittis eu.
				A diam sollicitudin tempor id eu nisl. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Tortor condimentum lacinia quis vel eros donec. Elit pellentesque habitant morbi tristique senectus et netus. Risus ultricies tristique nulla aliquet enim tortor at auctor urna. Mattis enim ut tellus elementum. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Augue mauris augue neque gravida in fermentum et sollicitudin ac. Turpis egestas pretium aenean pharetra. Volutpat diam ut venenatis tellus in metus vulputate eu. Erat velit scelerisque in dictum non consectetur a erat nam. Tristique nulla aliquet enim tortor at.
				Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Non quam lacus suspendisse faucibus. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Velit egestas dui id ornare arcu odio ut sem. Rhoncus aenean vel elit scelerisque mauris pellentesque. Urna neque viverra justo nec. Tempor commodo ullamcorper a lacus vestibulum sed arcu non. In massa tempor nec feugiat. Nibh tellus molestie nunc non blandit. Imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Risus ultricies tristique nulla aliquet enim tortor at auctor. Lectus proin nibh nisl condimentum id venenatis. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Placerat vestibulum lectus mauris ultrices eros in. Viverra aliquet eget sit amet. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Erat nam at lectus urna duis convallis convallis tellus. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Habitant morbi tristique senectus et netus et malesuada.
			</div>
			</div>
		</div>
		</div>

		<!-- Ketentuan Modal -->
		<div class="modal fade" id="ketentuanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ketentuan</h5>
				<img class='closebtn' src='http://localhost/MedStory/assets/Error.png' style='width:35px;'
					type='button' data-dismiss='modal' aria-label='Close' onClick=''>
			</div>
			<div class="modal-body" style='max-height: calc(98vh - 160px); overflow-y: auto;'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam vulputate dignissim suspendisse in est ante in nibh mauris. Tellus at urna condimentum mattis pellentesque. Eget nunc scelerisque viverra mauris in. Quis hendrerit dolor magna eget. Vitae tortor condimentum lacinia quis. Aliquam ut porttitor leo a diam sollicitudin. Fermentum odio eu feugiat pretium. Leo duis ut diam quam. Nunc vel risus commodo viverra maecenas. Dui faucibus in ornare quam viverra orci sagittis eu.
				A diam sollicitudin tempor id eu nisl. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Tortor condimentum lacinia quis vel eros donec. Elit pellentesque habitant morbi tristique senectus et netus. Risus ultricies tristique nulla aliquet enim tortor at auctor urna. Mattis enim ut tellus elementum. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Augue mauris augue neque gravida in fermentum et sollicitudin ac. Turpis egestas pretium aenean pharetra. Volutpat diam ut venenatis tellus in metus vulputate eu. Erat velit scelerisque in dictum non consectetur a erat nam. Tristique nulla aliquet enim tortor at.
				Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Non quam lacus suspendisse faucibus. Sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Velit egestas dui id ornare arcu odio ut sem. Rhoncus aenean vel elit scelerisque mauris pellentesque. Urna neque viverra justo nec. Tempor commodo ullamcorper a lacus vestibulum sed arcu non. In massa tempor nec feugiat. Nibh tellus molestie nunc non blandit. Imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Risus ultricies tristique nulla aliquet enim tortor at auctor. Lectus proin nibh nisl condimentum id venenatis. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Placerat vestibulum lectus mauris ultrices eros in. Viverra aliquet eget sit amet. Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Erat nam at lectus urna duis convallis convallis tellus. Ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Habitant morbi tristique senectus et netus et malesuada.
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
        </script>
		
		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!--Ajax for json-->
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
			
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
			$('#successMasukan').modal('show');
		});
        </script>
    </body>
</html>

<!--Muhammad Akmal Fadhlillah
    1302190103  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>MedStory | Kebijakan</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Main.css"/>
        
    </head>
    <body>
        <!--Main Navigation menu.-->
        <div id="Navigation">
            <ul>
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="smartDoc">SmartDoc</a></li>
                <li><a href="history">Forum</a></li>
                <li><a href="diskusi">Dataku</a></li>
								<li><a href="nomorDarurat">Darurat</a></li>
                <li style="float:right"><form action='landing/logout' method='post'><button type="submit" class='btn btn-danger' style='height:40px; margin:13px 10px 0px 10px;'><i class='fa fa-sign-out'></i> Ganti Akun</button></form></li>
                <li style="float:right"><button onclick="window.location.href='account'" class='btn btn-primary' style='height:40px; background:#212121; margin:13px 0px 0px 10px;'><i class='fa fa-user-circle'></i> <?= $data = $this->session->userdata('userTrack'); ?></button></li>
                <div id="ddParent">
									<button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
										<!--DropDown menu navigation-->
										<div id="dropdown-content">
												<a href="pusatBantuan">Pusat Bantuan</a>
												<a href="tentang">Tentang</a>
												<a href="#">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>
        <main>

		<!--Tentang kami-->
		<br><br><br>
		<h2 style="margin-left: 16%; font-size:20px;">Pengaturan >> Kebijakan & Privasi</h2>
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
			<h1 style="text-align: center;">MedStory</h1>
			<p style="text-align: left; font-weight:bold;">Kebijakan :</p>
			<p style="text-align: left;">- Pengguna wajib mendaftar menggunakan data yang benar dan tidak dipalsukan</p>
			<p style="text-align: left;">- Pengguna harus mengupload foto diri dan KTP pada menu Akun agar bisa mengakses data rekam medis</p>
			<p style="text-align: left;">- Username tidak boleh duplikat</p>
			<p style="text-align: left;">- Format unggah file foto berjenis jpg dengan ukuran maksimal 2 mb</p>
			<p style="text-align: left;">- Format unggah file dokumen berjenis pdf dengan ukuran maksimal 1 mb</p>
			<p style="text-align: left;">- Pengguna harus memasukkan password jika ingin membatalkan konsultasi</p>
			<p style="text-align: left;">- Pengguna harus menggunakan bahasa yang baik dan sopan pada diskusi forum</p>
			<p style="text-align: left;">- Dilarang mengirimkan identitas pribadi seperti nomor ponsel, alamat, NIK, tanggal lahir, dan lainnya pada
			forum diskusi atau konsultasi dokter secara pribadi</p>
      	<br>
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

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302190103-Muhammad Akmal Fadhlillah</div>
        </footer>

			<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    </body>
</html>

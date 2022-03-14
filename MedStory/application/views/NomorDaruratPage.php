<!--Muhammad Rafi Alfarisi
    1302194024  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>NomorDaruratPage_1302194024</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/MainPage.css'; ?>" />
        
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
                <img id="logo" src="assets/logoWhite.png">
                <li><a href="myData">Dataku</a></li>
                <li><a href="history">Riwayat</a></li>
                <li><a href="diskusi">Forum</a></li>
                <li style="float:right"><a type="button" id="signOut" onclick="signOut()">Ganti Akun</a></li>
                <li style="float:right"><a id="Profil" href="account" style="font-size:14px"><img id="MyData" src="assets/MyData.png"> <?= $data = $this->session->userdata('userTrack'); ?></a></li>
                <div id="ddParent">
                    <button id="dropbutton"><img id="set" src="assets/Setting.png"></button>
                        <!--DropDown menu navigation-->
                        <div id="dropdown-content">
                            <a href="pusatBantuan">Pusat Bantuan</a>
                            <a href="tentang">Tentang</a>
                            <a href="kebijakan">Kebijakan & Privasi</a>
                </div>
            </ul>
        </div>

        <!--Side Navigation menu.-->
	    <div id="Navigation2">
		    <ul>
			    <li><a href="myData"><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href="cariDokter"><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href=""><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href="covid"><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>

			<!--Back to top.-->
			<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
				<img src='assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
			</button>

        <br><br><br>
				<h2 style="margin-left: 16%;">Daftar FasKes Disekitar</h2>
				<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; width: 70%; border-radius: 10px;"><br>
				<?php
					$i = 1; 
					$status = ' show';
					foreach($dataFaskes as $data){ echo"
					<div id='accordion'>
					<div class='card' style='border-radius:6px; border-width:1px;'>
						<div class='card-header' type='button' id='headingOne' style='border-radius:6px; border-width:2px;' data-toggle='collapse' 
						data-target='#collapse".$i."' aria-expanded='true' aria-controls='collapseOne'>
							<h5 class='mb-0'>
								<h3 style='font-size:20px;'>".$data['namaFaskes']."</h3>
              <div class='container'>
								<h3 style='font-size:18px; float:right;'>".$data['rating']."</h3>
                <img src='assets/Rating.png' width='20px' height='20px' alt='rating' style='float:right;'>
              </div>
								<h5 style='font-size:15px;'>".$data['alamat']."</h5>
								<h5 style='font-size:15px;'>".$data['kontak']."</h5>
							</h5>
						</div>
						<!--Extend-->
						<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordion'>
							<div class='card-body'>
							<div class='container'>
              <div class='row'>
                  <div class='col-md-6'>
                      <img src='assets/faskesImage/faskes".$data['id_faskes'].".jpeg' width='350px' height='170px' style='border-radius:6px;' alt=''><hr>
											<h5 class='font-weight-bold'>Fasilitas :</h5>                        
											<p>".$data['fasilitas']."</p>
                  </div>
                  <div class='col-md-6'>
                      <h5 class='font-weight-bold'>Poliklinik :</h5>
                      <p>".$data['poliklinik']."</p>
                      </div>
                  </div>
              </div>
							</div>
						</div>
					</div>
				</div><br>";
				$i++;
				$status = ' ';
				}?>
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

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194024-Muhammad Rafi Alfarisi</div>
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
		
				<!--Jquery-->
				<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonDataku.js'; ?>"></script>
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

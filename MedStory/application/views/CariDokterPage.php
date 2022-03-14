<!--Fauzan Reza Ananda
    1302194003  SE-43-03
-->
<!DOCTYPE html>
<html>

    <head>
        <title>CariDokter_1302194003</title>
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
			    <li><a onclick="print()"><img id="sideIcon" src="assets/Print.png"></a></li>
                <br><br>
			    <li><a href=""><img id="sideIcon" src="assets/Consult.png"></a></li>
                <br><br>
			    <li><a href="nomorDarurat"><img id="sideIcon" src="assets/Call.png"></a></li>
                <br><br>
			    <li><a href="covid"><img id="sideIcon" src="assets/Virus.png"></a></li>
		    </ul>
	    </div>
        <main>
		
		<!--Back to top.-->
		<button onclick="topFunction()" id="myBtn" title="Kembali ke atas">
			<img src='assets/Back.png' width='35px' height='35px' style="transform: rotate(90deg);">
		</button>

		<!--Daftar dokter.-->
		<br><br><br>
		<h2 style="margin-left: 16%;">Daftar Dokter Disekitar</h2>
		<div class="container-fluid bg-white" id="card-car" style="margin-bottom: 1%; padding-top: 1%; padding-bottom: 1%; width: 70%; border-radius: 10px;">
	    <?php 
			$i = 1; 
			$status = ' show';
			foreach($dataPraktik as $data){		
				echo"
				<div id='accordion'>
					<div class='card' style='border-radius:6px; border-width:1px;'>
					<div class='card-header' type='button' id='headingOne' data-toggle='collapse' data-target='#collapse".$i."' 
					style='border-width:1px; border-bottom: 4.5px solid #28A0EB' aria-expanded='true' aria-controls='collapseOne'>
						<img src='assets/doc".$i.".jpg' alt='Card image cap' class='rounded-circle img-fluid' style='width:50px; height:50px; float:left;'>
						<h3 style='font-size:20px; padding-left:15px; float:left;'>".$data['namaDokter']." - ".$data['spesialis']."</h3>
						<h5 style='font-size:18px; float:right;'>".$data['lokasi']."</h5>
					</div>
					<div id='collapse".$i."' class='collapse".$status."' aria-labelledby='headingOne' data-parent='#accordion'>
						<div class='card-body'>
							<h5 style='font-size:16px;'>".$data['jamMulai']."-".$data['jamSelesai']."</h5>
							<h5 style='font-size:16px;'>".$data['hariPraktik']."</h5>
						</div>
					</div>
					</div>
				</div>
				<br>";
				$i++;
				$status = ' ';
		}?>
		
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

        <div class="text-center p-4" style="background-color: #333333; color: whitesmoke;">1302194003-Fauzan Reza Ananda</div>
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
			function print() {
				var divContents = document.getElementById("printArea").innerHTML;
				var a = window.open('', '', 'height=500, width=500');
				a.document.write('<html>');
				a.document.write('<body>');
				a.document.write(divContents);
				a.document.write('</body></html>');
				a.document.close();
				a.print();
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
				
				
					<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
					-->
				
				<!--Jquery-->
				<script type="text/javascript" src="<?php echo base_url().'assets/js/getBantuanJsonDataku.js'; ?>"></script>
        <script>
        $(document).ready(function(){
          $('.collapsible').click(function(e) {
              e.stopPropagation();
              $('#iconDrop').css({
                  "-ms-transform" : "rotate(180deg)",      //Internet Explorer  
                  "-webkit-transform": "rotate(180deg)",   //Chrome & Safari
                  "-moz-transform": "rotate(180deg)",      //Firefox
                  "-o-transform" : "rotate(180deg)",       //Opera
                  "transform": "rotate(180deg)"            //Others
              });
          });
					$(function () {
						$('[data-toggle="popover"]').popover()
					})
        })
        </script>
    </body>
</html>

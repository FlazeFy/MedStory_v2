<!--Leonardho R. Sitanggang
    1302194041  SE-43-03
-->
<!DOCTYPE html>
<!--DELETE LATER-->
<html>
    <head>
        <title>MedStory | CreateAcc</title>
        <!--Meta tags.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS.-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		
        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="http://localhost/MedStory/assets/css/Login.css"/>
		<style>
			body {
				background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
				background-size: 400% 400%;
				animation: gradient 15s ease infinite;
				height: 100vh;
			}

			@keyframes gradient {
				0% {
					background-position: 0% 50%;
				}
				50% {
					background-position: 100% 50%;
				}
				100% {
					background-position: 0% 50%;
				}
			}
		</style>
    </head>
    <body>
    <main>
	<div class="container" style="margin-top: 2%; background-color:white; border-radius:8px; 
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <form method="post" class="signin-form" action="<?php echo site_url().'createAcc/newUser'; ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-3 border-right"> <!--First section.-->
					<div class="p-3 py-5">
						<!--Button back.-->
						<h4 class="text-left">Foto Profil</h4>
						<div class="d-flex flex-column align-items-center text-center p-3 py-5">
							<img src="assets/defaultImg.png" alt="Admin" class="rounded-circle img-fluid" width="200px">
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
						<!--Error Message-->
						<?php if(isset($error_message)) { echo"
							<h6 style='color:red; font-size:14px;'>".$error_message."<h6>";
						} ?>
					</div>
				</div> 
				<div class="col-md-5 border-right"> <!--Second section.-->
					<div class="p-3 py-5">
						<h4 class="text-left">Data Diri</h4>
						<div class="row mt-2">
							<!--Data diri.-->
							<div class="col-md-12">
								<h6 >Nama Lengkap</h6>
								<input required type="username" class="form-control" name="fullname" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>                            
							<div class="col-md-12">
								<h6>Nomor Induk Kependudukan</h6>
								<input required type="text" class="form-control" name="nik" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-12">
								<h6>Tempat Lahir</h6>
								<input required type="text" class="form-control" name="tLahir"
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-12">
								<h6>Tanggal Lahir</h6>
								<input required type="date" class="form-control" name="tglLahir"
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-12">
								<h6>Alamat</h6>
								<input  required type="text" class="form-control" name="add" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-12">
								<h6>Pekerjaan</h6>
								<input required type="text" class="form-control" name="job" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-6">
								<h6>Tinggi Badan (Cm)</h6>
								<input  required type="number" class="form-control" name="tBadan" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-6">
								<h6>Berat Badan (Kg)</h6>
								<input  required type="number" class="form-control" name="bBadan" 
									style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
							</div>
							<div class="col-md-12" id="jenisKelamin"><h6>Jenis Kelamin</h6>
								<fieldset>
								<input type="radio" name="cat_input" class="radioB" id="radioB" value="Pria">Pria</input>
								<input type="radio" name="cat_input" class="radioB" id="radioB" value="Wanita">Wanita</input>
								</fieldset>
							</div>
						</div>  <!--row-->
					</div>
				</div>
				<div class="col-md-4"> <!--Third section.-->
					<div class="p-3 py-5">
						<!--Data akun.-->
						<h4 class="text-left">Data Akun</h4>
						<div class="col-md-12">
							<h6>Nama Pengguna</h6>
							<input required type="text" class="form-control" name="username" 
								style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
						</div>
						<div class="col-md-12">
							<h6>Email</h6>
							<input required type="email" class="form-control" name="email" 
								style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
						</div>
						<div class="col-md-12">
							<h6>Nomor Ponsel</h6>
							<input required type="text" class="form-control" name="ponsel"
								style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
						</div>
						<div class="col-md-12">
							<h6>Password</h6>
							<input required type="password" class="form-control" name="password"
								style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
						</div>
						<div class="col-md-12">
							<h6>Konfirmasi Password</h6>
							<input required type="password" class="form-control" id="passCon" 
								style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
						</div><br>
						<div class="col-md-12">
							<img src="assets/Info.png" style="width:20px; float: left;">
							<p style="color: #4183D7; font-size: 14px;">Password harus memiliki min 8 karakter, 1 huruf
							kapital, dan 1 angka.</p><br>
							<!--Button.-->
							<div class="form-group mb-3">
								<button class="btn btn-success" type="submit" onclick="cekAkun()" style='width:100%; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'
									>Selanjutnya</button>
							</div>
							<div class="form-group mb-3">
								<button class="btn btn-danger" type="button" onclick="window.location.href='landing'" 
									style='width:100%; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;'>Kembali</button>
							</div>
						</div>
					</div>
                </div>  
            </div> <!--row.-->
        </form>
    </div> <!--container.-->
    </main>
	<script>
		//Set file name when upload.
		$('.custom-file-input').on('change', function() { 
			let fileName = $(this).val().split('\\').pop(); 
			$(this).next('.custom-file-label').addClass("selected").html(fileName); 
		});
	</script>
    </body>
</html>

<!--Leonardho R. Sitanggang
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
	<div class="container" style="margin-top: 120px; background-color:white; max-width:600px; border-radius:8px; 
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
		<form method="post" class="signin-form" action="<?php echo base_url().'landing/savedata'; ?>">
		<div class="row justify-content-center">
			<h4 class="text-left" style="font-family:Lucida Sans; margin-top:10px;">Selamat datang di MedStory</h4>
			<div class="col-md-12 col-lg-10">
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
		
			<!--Error message.-->
			<?php if(isset($error_message)) { echo"
				<h6 style='color:red; font-size:14px;'>".$error_message."<h6>";
			} ?>
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
			<p class="text-center" style='color:#707070;'>Pengguna baru? <a class="btn btn-link" type="button" href="createAcc"
				style='text-decoration: underline;'>Buat Akun</a>
			</p>
			
			</div> <!--col-->
		</div> <!--row-->
		</form>
	</div>	<!--container-->
    </body>
</html>

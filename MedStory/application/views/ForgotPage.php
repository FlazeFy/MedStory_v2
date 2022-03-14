<!--Ananda Ardian Pratama P.
    1302194049  SE-43-03
-->
<!DOCTYPE html>
<html>
    <head>
        <title>MedStory | ForgotPassword</title>
        <!--Meta tags.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS.-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="http://localhost/MedStory/assets/icon/Logo.png"/>
		
        <!--Source file.-->
        <link rel="stylesheet" type="text/css" href="">
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
	<div class="container" style="margin-top: 120px; background-color:white; border-radius:8px; max-width:600px;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"> 
		<form method="post" class="signin-form" action="<?php echo base_url().'forgot/gantiPass'; ?>">
            <div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<h4 class="text-left" style="font-family:Lucida Sans; margin-top:10px;">Ganti Password</h4>
					<!--Data diri.-->
					<div class="form-group mb-3">
						<h6>Username</h6>
						<input required type="text" class="form-control" name="username"
							style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
					</div>                            
					<div class="form-group mb-3">
						<h6>NIK</h6>
						<input required type="text" class="form-control" name="nik"
							style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
					</div>
					<div class="form-group mb-3">
						<h6>Password Baru</h6>
						<input required type="password" class="form-control" name="password"
							style="background:white; border-width: 0 0 3px; border-bottom: 3.5px solid #4183D7; color:#212121; margin-bottom:5px;">
					</div> 
					<div class="col-md-12">
						<img src="assets/Info.png" style="width:20px; float: left;">
						<p style="color: #4183D7; font-size: 14px;">Password harus memiliki min 8 karakter, 1 huruf
						kapital, dan 1 angka.</p><br>      
					</div> 
				
					<!--Error message.-->
					<?php if(isset($error_message)) { echo"
						<h6 style='color:red; font-size:14px;'>".$error_message."<h6>";
					} ?>
					<!--Button.-->
					<div class='container' style='margin-bottom:15px;'>
						<button class="btn btn-danger" type="button" style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;
							width:200px;'onclick="window.location.href='<?= site_url('landing') ?>'">Batalkan</button>
						<button class="btn btn-success" type="submit" style='box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;
							float:right; width:200px;'>Submit</button>
					</div>
				</div> <!--col.-->
            </div> <!--row.-->
		</form>
	</div> <!--container.-->
    </body>
</html>

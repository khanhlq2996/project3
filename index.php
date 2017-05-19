<?php 
include "config.php";
include "function.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./library/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="./library/js/bootstrap.min.js"></script>
	<style>
		.modal-header, .close {
			background-color: #5cb85c;
			color:white !important;
			text-align: center;
			font-size: 30px;
		}
		.modal-footer {
			background-color: #f9f9f9;
		}
	</style>
	<script>
		$(document).ready(function() {
			setInterval(function() {
				$.ajax({
					url: './content/table-live.php',
					method: 'GET',
					success: function(res) {
						$('#ContentLeft').html(res)
					}
				})
			}, 1000)

			setInterval(function() {
				$.ajax({
					url: './content/update-data.php',
					method: 'GET',
					success: function(res) {
						$('#update').html(res)
					}
				})
			}, 1000)
		})
	</script>
</head>
<body>
	<?php 
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		# code...
		$username = $_POST["username"];
		$password = $_POST["password"];

		echo $username;

		$wsn = mysqli_connect("localhost","root","","wsn");
		$getlog = $wsn->query("SELECT * FROM wsn WHERE name = $username AND pass = $password");
		if($getlog->num_rows > 0){
			$_SESSION["login"] = "logined";
			$loged_in = true;
		} $loged_in = false;
	} else $loged_in = false;
	?>	


	<div class="container-fluid">
		<?php
		include "./login.php";
		include "./top.php";
		?>
		<script>
			$(document).ready(function(){

				$("#login").click(function(){
					$("#myModal").modal();
				});
			});
		</script>


		<?php 
		// if(!isset($_SESSION["login"])){
		// 	exit();
		// } else echo "Ban chua Dang nhap, vui long dang nhap vao he thong!!";
		?>


		<div class="row border-top-0">
			<div class="col-md-2">
				<?php 
				include "./sidebar.php";
				?>
			</div>

			<div class="col-md-10">
				<?php 
				include "./content.php";
				?>		 		
			</div>
		</div>
	</div> 


</body>
</html>

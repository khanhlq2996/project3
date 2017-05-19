<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		setInterval(function() {
			$.ajax({
				url: './server.php',
				method: 'GET',
				success: function(res) {
					$('#data').html(res)
				}
			})
		}, 2000)
	})
	</script>
</head>
<body>
	<h3>Tự động cập nhật dữ liệu sau "n" giây (1 giây)</h3><br>
	<div id='data'>
		Dữ liệu tự động cập nhật ở đây
	</div>
</body>
</html>

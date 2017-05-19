<?php 
$abc = "asskdjhkashdoiqwq,";

$abc = substr($abc, 0, strlen($abc) - 1);

echo $abc
 ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Tự động cập nhật dữ liệu sau "n" giây</h3><br>

	<div>  //Chỗ này cần tự động chạy lại sau "n" giây, và nếu có thay đổi giá trị trong csdl thì nó cũng thay đổi theo
		<tr>
			<th>Nội dung 1</th>
			<th>Nội dung 2</th>
			<th>Nội dung 3</th>
			<th>Nội dung 4</th>
			<th>Nội dung 5</th>
		</tr>

		<?php 
		// $con = mysqli_connect("localhost", "root", "", "dbname");
		// $sql = "SELECT * FROM dbname";

		// if($con->query($sql)){
		// 	while ($row = $con->query($sql)->fetch_assoc()) {
		// 		?>

		// 		<tr>
		// 			<td><?php echo $val["1"] ?></td>
		// 			<td><?php echo $val["2"] ?></td>
		// 			<td><?php echo $val["3"] ?></td>
		// 			<td><?php echo $val["4"] ?></td>
		// 			<td><?php echo $val["5"] ?></td>
		// 		</tr>

		// 		<?php
		// 	}
		// } 
		?>
	</div>
</body>
</html> -->
<?php
// $con = mysqli_connect("localhost", "root", "", "bookstore");
// $sql = "SELECT * FROM admin";
// $result = $con->query($sql);
// echo "<table>
// <tr>
// <th>ID</th>
// <th>USERNAME</th>
// <th>PASSWORD</th>
// <th>QUYENHAN</th>
// </tr>";
// while ($row = $result->fetch_assoc()) {
//   echo "<tr>";
//   echo "<td>" . $row['ID'] . "</td>";
//   echo "<td>" . $row['USERNAME'] . "</td>";
//   echo "<td>" . $row['PASSWORD'] . "</td>";
//   echo "<td>" . $row['QUYENHAN'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
// $con->close();
?>

		<table class="table">

			<thead>
				<th>ID</th>
				<th>Time</th>
				<th>Temperature</th>
				<th>RH</th>
				<th>vLight</th>
				<th>iLight</th>
			</thead>
			<tbody>
				<?php
				$wsn = mysqli_connect("localhost","root","","wsn"); 
				$sql = "SELECT * FROM data";
				$result = $wsn->query($sql);
				$count = 0;
				if ($result->num_rows > 0) {
    			// output data of each row
					while($row = $result->fetch_assoc()) {
						if ($count == 10) {
							break;
						}					
						echo "<tr>";
						echo "<td>" . $row["id"] . "</td>";
						echo "<td>" . $row["date"] . "</td>";
						echo "<td>" . $row["ter"] . "</td>";
						echo "<td>" . $row["rh"] . "</td>";
						echo "<td>" . $row["vl"] . "</td>";
						echo "<td>" . $row["il"] . "</td></tr>";	
						$count++;	
					}
				} else {
					echo "0 results";
				}
				$wsn->close();
				?>
			</tbody>

		</table>

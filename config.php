<?php
/*$wsn_data = mysqli_connect("192.168.0.50:3306","rdbuser","1234@user","wsn_data");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql1 = "SELECT * FROM raw_data_tinyos";
$result1 = $wsn_data->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Index: " . $row["id"] . "<br>Time Unix:" . $row["unix_ts"] . "<br>Time:" . $row["ts"] . "<br>Length:" . $row["length"] . "<br>Data:" . $row["data"];
	}
} else {
	echo "0 results";
}
$wsn_data->close();
*/

$wsn = mysqli_connect("localhost","root","","wsn");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
$sql = "SELECT * FROM data";
$result = $wsn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"] . "<br>Time:" . $row["date"] . "<br>Ter:" . $row["ter"] . "<br>RH:" . $row["rh"] . "<br>vLight:" . $row["vl"] . "<br>iLight:" . $row["il"];
	}
} else {
	echo "0 results";
}*/
?>
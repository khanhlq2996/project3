<?php 
if(!empty($_GET["v"])) {
	if ($_GET["v"] == "home") {
		include "./content/home.php";
	} elseif ($_GET["v"] == "table") {
		include "./content/table.php";
	} elseif ($_GET["v"] == "chart") {
		include "./content/chart.php";
	} elseif ($_GET["v"] == "live") {
		include "./content/live.php";
	} elseif ($_GET["v"] == "file") {
		include "./content/file.php";
	}
} else {	
	include "./content/home.php";
}
?>

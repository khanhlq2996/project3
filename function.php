<!-- 
Cau truc du lieu ngay 5/4/17



 -->
<?php 
function get_id($value){
	return substr($value["data"], 16, 4) ;
}

function get_Time($value){
	return $value["ts"];
}

function get_vol($value){
	return (intval(substr($value["data"], 20, 4), 20)/4096) * 1.5 * 2;
}

function get_Temperature($value){
	$d1 = 0.0; 
	$d2 = 0.01;
	if (get_vol($value) <= 2.5 ){
		$d1 = -39.4;
	}
	else if(get_vol($value) <= 3.0){
		$d1 = -39.6;
	}
	else if(get_vol($value) <= 3.5){
		$d1 = -39.7;
	}
	else if(get_vol($value) <= 4.0){
		$d1 = -39.8;
	}
	else if(get_vol($value) <= 5.0){
		$d1 = -40.1;
	}
	$T = $d1 + $d2 * intval(substr($value["data"], 24, 4), 16);

	return $T;
}

function get_RH($value){
	$c1 = -2.0468;
	$c2 = 0.0367;
	$c3 = -1.6*pow(10,-6);
	$t1 = 0.01;
	$t2 = 0.00008;
	$SORH = intval(substr($value["data"], 28, 4), 16);
	$RHl = $c1 + ($c2 * $SORH) + ($c3 * $SORH * $SORH);
	$RHt = (get_Temperature($value)-25)*($t1 + $t2 * $SORH)+ $RHl;
            //echo $RHt. " " .$SORH. " " .$c3. " " .get_Temperature($arr, $i). "<br> ";
	return $RHt;
}

function get_vLight($value){
	$volv = (intval(substr($value["data"], 32, 4), 16)/4096)*1.5;
	$Iv = $volv /100000;
	$Sv = 0.625 * pow(10,6) * $Iv * 1000;
	return $Sv;
}

function get_iLight($value){
	$voli = (intval(substr($value["data"], 36,4), 16)/4096)*1.5;
	$Ii = $voli/100000;
	$Si = 0.625*pow(10,6)*$Ii*1000;
	return $Si;
}

?>
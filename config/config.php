<?php

//Session Start
session_start();

//koneksi ke database
$con = mysqli_connect('localhost','id16167211_uasweb1','eHAl!j879nxlxSGe','id16167211_yurastore');
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

// Link ke dashboard
function base_url($url = null) {
	$base_url = "http://localhost/dwxstore/";
	if($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}

?>
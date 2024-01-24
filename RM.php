<?php
$filename = "./version.txt";
$file = fopen($filename, "r");
if (!is_null(@$_GET['get-last-version'])) {
	echo fread($file, filesize($filename)-5);
} elseif (!is_null(@$_GET['get-last-build'])) {
	$verData = explode("_", fread($file, filesize($filename)), 2);
	echo $verData[1];
} elseif (!is_null(@$_GET['get-update'])) {
	header("Location: ./Releases/".fread($file, filesize($filename)).".zip");
}

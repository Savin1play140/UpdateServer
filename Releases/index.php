<?php
echo "format:<br>version_build(date upload)<br>";
$children = scandir("./");
$monther = [];
$datas = [];
foreach ($children as $child) {
if (is_dir("./$child")) {
} elseif (is_file("./$child")) {
	if ($child != "index.php") $datas[] = $child;
	}
}
$num = 0;
echo "Select the file:<br>";
$datas = array_reverse($datas, true);
foreach ($datas as $data) {
	$d = date("d.m.y", filectime("./".$data));
	echo '<a href="./'.$data.'" download accesskey="'.$num.'" tabindex="'.($num+1).'">./'.$data.' ('.$d.')</a><br>';
	$num += 1;
}
?>
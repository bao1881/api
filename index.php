<?php
/*
credit ⚡️D-Jukie
*/
function jukiee($ww) {
mt_srand( (double)microtime() * 1000000000000000000 );
$stt = array_rand($ww);
return $ww[$stt];
}
function jukie($path) {
$images = array();
if ( $img_ww = @opendir($path) ) {
while ( false !== ($img_www = readdir($img_ww)) ) {
if ( preg_match("/(\.gif|\.jpeg|\.png|\.jpg)$/", $img_www) ) {
$images[] = $img_www;
}
}
closedir($img_ww);
}
return $images;
}
$root = '';
$path = 'New folder/'; //tên thư mục chứa ảnh
$list = jukie($root . $path);
$link = 'https://bao2711.up.railway.app/';  //thay link relp/domain vào
$img = jukiee($list);
$duma = 0;
$countfiles = glob($path . "*.{jpeg,png,gif,jpg,.txt}",GLOB_BRACE);
if ($countfiles){
$duma = count($countfiles);
}
$api1 = array(
"data" => $link . $path . $img,
"status" => "success",
"count" => $duma,
"author" => "Bao Nguyen",

);
$rdimg = json_encode($api1, JSON_UNESCAPED_SLASHES);
print($rdimg); 
?>

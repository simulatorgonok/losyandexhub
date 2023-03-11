<?
	$image = ImageCreateFromPng("./main/img/morkovka.png");
	header('Content-Type: image/png');
	imagealphablending($image, true);
	imagesavealpha($image, true);
	ImagePng($image);
	ImageDestroy($image);
?>
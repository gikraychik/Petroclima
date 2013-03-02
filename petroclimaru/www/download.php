<?php
$name = "Petroclima.pptx";
$path = "Base/".$name;
if (!file_exists($path))
{
	echo "Unexpected server error.";
}
else
{
	$size = filesize($path);
	header("Content-Type: application");
	header("Content-Length: $size");
	header("Content-Disposition: Attachment; FileName=\"$name\"");
	readfile($path);
}
?>
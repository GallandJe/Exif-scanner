<?php  
	$h = getallheaders();
	$type = explode('/', $h['x-file-type']);
	if($type[0] == 'image'){
		$src = file_get_contents('php://input');
		file_put_contents('uploads/'.$h['x-file-name'], $src);

		$exif = exif_read_data('uploads/'.$h['x-file-name'], 0, true);
		print_r($exif);
		unlink('uploads/'.$h['x-file-name']);
	} else {
		echo "Format not supported, the exif scanner support only images";
	}
?>
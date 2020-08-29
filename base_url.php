<?php 
function base_url($url = null) {
	$base_url = "http://localhost/php/php-basic";
	if ($url != null) {
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}
?>
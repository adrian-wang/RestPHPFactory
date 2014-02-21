<?PHP
Class Response {
	function outputMsg($code, $msg) {
		return "{\"status\":".$code.", \"message\":\"".$msg."\"}<br>";
	}
	
	function outputArrayMsg($arr) {
		return "{\"status\":200, \"message\":\"".json_encode($arr)."\"}<br>";
	}
}
?>

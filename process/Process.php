<?PHP
class Process {
	/**
	 * default fail {"status":404, "MESSAGE":MESSAGE} for POST
	 */
	function doPost($req) {
		return Response::outputMsg(404, "no such resource for POST!");
	}

	/**
	 * default fail {"status":404, "MESSAGE":MESSAGE} for GET
	 */
	function doGet($req) {
		return Response::outputMsg(404, "no such resource for GET!");
	}

	/**
	 * default fail {"status":404, "MESSAGE":MESSAGE} for DEL
	 */
	function doDel($req) {
		return Response::outputMsg(404, "no such resource for DEL!");
	}
	
	function execute($req) {
		switch($req->method) {
		case "GET":
			return $this->doGet($req);
		case "POST":
			return $this->doPost($req);
		case "DEL":
			return $this->doDel($req);
		default:
			die("Not supported method!");
		}
	}
}
?>
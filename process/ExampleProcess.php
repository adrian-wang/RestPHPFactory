<?PHP
class ExampleProcess extends Process {
	/**
	 * POST {"j1":value, "j2":value}
	 * to /example
	 * success {"status":200, "message":MESSAGE}
	 * fail {"status":ERR_CODE, "message":MESSAGE}
	 */
	function doPost($req) {
		$j1 = $req->data["j1"];
		$j2 = $req->data["j2"];
		if ($j1 === $j2) {
                        session_start();
                        $_SESSION["equal"] = true;
                        return Response::outputMsg(200, "Equal!");
                } else {
                        return Response::outputMsg(500, "Should be equal!");
                }
	}
	
	/**
	 * delete session
	 * DEL /example
	 * return {"status":200, "message":"Logout!"}
	 */
	function doDel($req) {
		unset($_SESSION["equal"]);
		session_destroy();
		return Response::outputMsg(200, "Logout!")
	}

        /**
         * get if values are equal
         * GET /example
         * 
         */
        function doGet($req) {
                if (isset($_SESSION["equal"]) && $_SESSION["equal"] === true) {
                        return Response::outputMsg(200, "Equal!");
                } else if () {
                        return Response::outputMsg(200, "Not equal!");
                } else {
                        return Response::outputMsg(500, "Uninitialized!");
                }
        }
}
?>

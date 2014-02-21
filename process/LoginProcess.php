<?PHP
class LoginProcess extends Process {
	/**
	 * POST {USERALIAS, PASSWORD}
	 * to /login
	 * success {200, MESSAGE}
	 * fail {ERR_CODE, MESSAGE}
	 */
	function doPost($req) {
		$alias = $req->data["useralias"];
		// TODO check parity of password and useralias
		// if success logged in
		// return Response::outputMsg(200, "Login success!");
		session_start();
		$_SESSION["logged"] = $type;
		$_SESSION["userid"] = $userid;
		return Response::outputMsg(200, "Login success!");
	}
	
	/**
	 * log out
	 * DEL /login
	 * return {"status":200, "message":"Logout!"}
	 */
	function doDel($req) {
		unset($_SESSION["logged"]);
		unset($_SESSION["userid"]);
		session_destroy();
		return Response::outputMsg(200, "Logout!")
	}
}
?>

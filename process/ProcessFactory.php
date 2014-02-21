<?PHP
Class ProcessFactory {
	function getProcess($token) {
		switch($token) {
		// add supported interfaces here
		// for example the following 2 lines
		//case "login":
		//	return new LoginProcess();
		default:
			return new Process();
		}
	}
}
?>

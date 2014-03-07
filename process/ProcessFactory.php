<?PHP
Class ProcessFactory {
	function getProcess($token) {
		switch($token) {
		// add supported interfaces here
		// for example the following 2 lines
		case "example":
			return new ExampleProcess();
		default:
			return new Process();
		}
	}
}
?>

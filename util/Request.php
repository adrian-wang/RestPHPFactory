<?PHP
Class Request {
	var $args;
	var $addr;
	var $data;
	var $method;
	
	function __construct() {
		$this->args = $_SERVER;
		$this->addr = substr($_SERVER['REQUEST_URI'], strlen(constant("_host_")));
		$this->data = json_decode(file_get_contents("php://input"), true);
		$this->method = $_SERVER['REQUEST_METHOD'];
	}
	function getData() {
		return file_get_contents("php://input");
	}
	
	function getRes() {
		$uri = $_SERVER['REQUEST_URI'];
		$res = explode("/", $uri);
		return $res;
	}
}
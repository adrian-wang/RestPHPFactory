<?PHP
require dirname(__FILE__)."/util/all.php";
require dirname(__FILE__)."/process/all.php";

define ("_host_","/cardserver/",TRUE);

try{
	$req = new Request();
	$request_resource = $req->addr;
	$token = strtok($request_resource, "/");
	if ($token !== false) {
		$procedure = ProcessFactory::getProcess($token);
		echo $procedure->execute($req);
	}
} catch (Exception $e) {
	echo "{\"status\":500, \"message\":\"internal error\"}";
}
?>

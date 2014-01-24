<?php
class Test {
	public function testing()
	{
		$res = new Response();
		$res->setStatus(true);
		$res->setData(array("The result?" => "The test works!"));
		return $res;
	}
}
?>

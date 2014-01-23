<?php
class Test {
	public function test()
	{
		$res = new Response();
		$res->setStatus(true);
		$res->setData(array("t1" => "t2"));
		return $res;
	}
}
?>

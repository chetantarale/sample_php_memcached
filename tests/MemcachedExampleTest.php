<?php
require_once('MemcachedExample.php');
class MemcachedExampleTest extends PHPUnit_Framework_TestCase {
  public function testMemcached() {
  	$mem = new MemcachedExample();
  	echo "hello";
  	echo $mem;
    $this->assertEquals($mem->populate(), 99);
  }
}
?>

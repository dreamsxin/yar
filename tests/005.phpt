--TEST--
Check for yar client with exception
--SKIPIF--
<?php 
if (!extension_loaded("yar")) {
    print "skip";
}
include "skip.inc";
?>
--FILE--
<?php 
include "yar.inc";
$client = new Yar_Client(YAR_API_ADDRESS);
try {
    var_dump($client->exception("yar"));
} catch (Yar_Server_Exception $e) {
    var_dump($e->getMessage());
    var_dump($e->getType());
}
?>
--EXPECT--
string(15) "server exceptin"
string(9) "Exception"

--TEST--
Get Nested List of floats with PHP serializer.  

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Get", "testGetNestedListOfFloatsWithPHPSerializer");
--EXPECT--
OK

--TEST--
QueryUser - query user uses extra parameter

--SKIPIF--
<?php include('skip_enterprise.inc'); ?>
--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("QueryUser", "testQueryUsesExtraParameter");
--EXPECT--
ERR_PARAM

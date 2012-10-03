<?php
	$path="../config/config.xml";
	$config = simplexml_load_file(dirname(__FILE__)."/config.xml");
	mysql_connect($config->server_db->location,$config->server_db->user,$config->server_db->password);
	mysql_select_db($config->server_db->db);
	/*mysql_connect("localhost","root","root");
	mysql_select_db("datos_2");*/
?>
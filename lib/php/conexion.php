<?php
	$path="../config/config.xml";
	$config = simplexml_load_file(dirname(__FILE__)."/config.xml");
	mysql_connect($config->server_db->location,$config->server_db->user,$config->server_db->password);
	mysql_select_db($config->server_db->db);
	//mysql_connect("localhost","root","root");
	//mysql_select_db("datos_2");
	//echo sha1(trim("6D 9B EA 63 11 DB B2 86 0A AB 69 73 BB CE 04 BC 2A 52 7B 8A 47 D8 62 A2 7B C1 F1 D7 87 FD 53 F2 F8 E2 05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66 C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2 05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66 C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2 05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66 C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2 05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66 C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2"));
	//echo sha1(trim("6D 9B EA 63 11 DB B2 86 0A AB 69 73 BB CE 04 BC 2A 52"));
	//echo sha1(trim("7D 3E 17 CF CD 81 6C AC D4 E0 25 FA A6 50 04 FD D1 7D"));
?>
<!--									  6D 9B 
EA 63 11 DB B2 86 0A AB 69 73 BB CE 04 BC 2A 52
7B 8A 47 D8 62 A2 7B C1 F1 D7 87 FD 53 F2 F8 E2 
05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66  
C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2
05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66
C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2
05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66
C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2
05 35 C4 D7 F8 28 71 E4 EA 97 51 73 3A B8 D4 66
C4 33 38 05 E0 48 1E CE 0F 23 EF 95 B7 AE F8 E2 -->
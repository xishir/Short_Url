<?php
//	session_start();
	header("Content-Type: text/html; charset=UTF-8");
    $conn = mysql_connect("xxxxxxx","xxxxx","xxxxxx");
    mysql_select_db("shorturl"); 
    if (!$conn)
    {
      die('Could not connect: ' . mysql_error());
    }
    mysql_query("set character set 'utf8'");
    mysql_query("set names 'utf8'");

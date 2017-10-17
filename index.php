<?php   
include "config.php";
function code62($x){ 
    $show=''; 
    while($x>0){ 
        $s=$x % 62; 
        if ($s>35){ 
            $s=chr($s+61); 
        }elseif($s>9&&$s<=35){ 
            $s=chr($s+55); 
        } 
        $show.=$s; 
        $x=floor($x/62); 
    } 
    return $show; 
} 
function shorturl($url){ 
    $url=crc32($url); 
    $result=sprintf("%u",$url); 
    return code62($result); 
} 

if(isset($_GET['url']))
{
	$url=addslashes($_GET['url']);
	$host="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);

	$sql = "select codeid from shorturl where url='$url'"; 
    $query = mysql_query($sql); 
	if($row=mysql_fetch_array($query))
	{
		echo $host.$row['codeid'];
	}
	else
	{
		$new=shorturl($url); 
		echo $host.$new;
		$sql = "insert into shorturl(codeid,url) values('$new','$url')"; 
    	$query = mysql_query($sql); 
	}
	
}
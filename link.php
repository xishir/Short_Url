<?php   
include_once('config.php');  
$url = addslashes($_GET['url']); 
if(isset($url) && !empty($url)){ 
    $sql = "select url from shorturl where codeid='$url'"; 
    $query = mysql_query($sql); 
    if($row=mysql_fetch_array($query)){ 
        $real_url = $row['url']; 
        header('Location: ' . $real_url); 
    }else{ 
        header('HTTP/1.0 404 Not Found'); 
        echo 'Unknown link.'; 
    } 
}else{ 
    header('HTTP/1.0 404 Not Found'); 
    echo 'Unknown link.'; 
} 

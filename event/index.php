<?php

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_REQUEST['ignore'])) {
	echo 'ok';
    exit;
}

$report = 'https://investingnews.space/action';


 $client_ip = $_SERVER['REMOTE_ADDR'];
 
if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) ) 
{
  $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  
}
else
if( isset($_SERVER['HTTP_CF_CONNECTING_IP']))
 {
   $client_ip = $_SERVER['HTTP_CF_CONNECTING_IP'];    
 }

foreach($_GET as $key => $value){
 $aff_sub4= $value;
 break;
}



$curl_url =trim($report)."?action=open&external=".trim($aff_sub4)."&client_ip=".trim($client_ip)."&d=".trim($d)."&user_agent=".str_replace(" ","",$user_agent)."";


$ch = curl_init();
      curl_setopt_array($ch, array(
			CURLOPT_URL => $curl_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FOLLOWLOCATION => true
      ));

    $output = curl_exec($ch);
    curl_close($ch);


      $goto = trim($url);
?>






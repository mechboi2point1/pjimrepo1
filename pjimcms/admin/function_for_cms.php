<?php

$date_now = date("Y-m-d H:m:s");
echo $date_now.'|';
echo date('Y-m-d H:m:s', strtotime($date_now.'+ 1 days'));
function linkValidator($text,$isAbsolute=false){  
// Initialize an URL to the variable

if(!$isAbsolute){
    $link = "";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
      $link = "https";
    else $link = "http";

    // Here append the common URL characters.
    $link .= "://";

    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
//$link .= $_SERVER['REQUEST_URI'];
//$cur_dir = getcwd();
//echo $cur_dir;
//echo $link;
$link .='/kalyani2022/pjim/';
$link.=$text;
  // Use curl_init() function to initialize a cURL session
$curl = curl_init($link);
  
// Use curl_setopt() to set an option for cURL transfer
curl_setopt($curl, CURLOPT_NOBODY, true);
  
// Use curl_exec() to perform cURL session
$result = curl_exec($curl);
  
if ($result !== false) {
      
    // Use curl_getinfo() to get information
    // regarding a specific transfer
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
    
    if ($statusCode == 404) {
         
        return false;
    }
    else {
       
        return true;
    }
}
else {
    
    return false;
} 

}
else{
   // Use curl_init() function to initialize a cURL session
$curl = curl_init($text);
  
// Use curl_setopt() to set an option for cURL transfer
curl_setopt($curl, CURLOPT_NOBODY, true);
  
// Use curl_exec() to perform cURL session
$result = curl_exec($curl);
  
if ($result !== false) {
      
    // Use curl_getinfo() to get information
    // regarding a specific transfer
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
    
    if ($statusCode == 404) {
         
        return false;
    }
    else {
       
        return true;
    }
}
else {
    
    return false;
} 
}

 return false; 

}
   
?>
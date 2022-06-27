<?php
function getVisIpAddr() {
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$ip = getVisIPAddr();

  

$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
   
// echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n";
// echo 'City Name: ' . $ipdat->geoplugin_city . "\n";
// echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n";
// echo $ip;
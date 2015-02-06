<?php
$url = "http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=Albert%20Einstein&format=plaintext&podtitle=Notable%20facts";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
ob_start();
curl_exec($ch);
curl_close($ch);
$contents = ob_get_contents();
ob_end_clean();

function get($a,$b,$c){
     $y = explode($b,$a);
     $x = explode($c,$y[1]);
    return $x[0];
}

echo get($contents,'<plaintext>','</plaintext>');
?>
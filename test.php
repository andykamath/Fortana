<?php
  include '../wa_wrapper/WolframAlphaEngine.php';
  $request = 'http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=albert%20einstein&format=html';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_URL, $request);
  $response = curl_exec($curl);
  curl_close($curl);

  echo $response;
?>
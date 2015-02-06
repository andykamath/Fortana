<?php
  include '../wa_wrapper/WolframAlphaEngine.php';
  $request = 'http://api.wolframalpha.com/v2/query?appid=YKWERR-FJJAE7L2L6&input=albert%20einstein&format=html';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_URL, $request);
  $response = curl_exec($curl);
  curl_close($curl);

  echo $response;
?>
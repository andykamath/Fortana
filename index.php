<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    if($a == "weather")
    {
        $city = substr($end, 11);
        $country = "US";
        $url="http://api.openweathermap.org/data/2.5/weather?q=Charlotte,US&units=metric&cnt=7&lang=en";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        $temp = floatval($data['main']['temp']);
        $temp = ($temp - 273.15)* 1.8000 + 32.00;
        $end = $data['weather'][0]['description']." and the temperature is ".$temp;
    }
    else
    {
        $end = "Oops something went wrong";
    }
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>

<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = $_REQUEST['Body'];
    if(strpos($a, "weather")==true)
    {
        $city = substr($end, 11);
        $country = "US";
        $url="http://api.openweathermap.org/data/2.5/weather?q=Charlotte,NC&units=metric&cnt=7&lang=en";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        $end = $data['weather'][0]['main']."<br>";
    }
    else
    {
        $end = "Oops something went wrong";
    }
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>

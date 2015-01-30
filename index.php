<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    if (strpos($a, 'weather') !== false)
    {
        $city = substr($end, 11);
        $country = "US";
        $url="http://api.openweathermap.org/data/2.5/weather?q=Charlotte,US&units=metric&cnt=7&lang=en";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        $temp = floatval($data['main']['temp']);
        $temp = $temp* 2 + 32.00;
        $end = $data['weather'][0]['description']." and the temperature is ".$temp;
    }
    else if (strpos($a, 'define ') !== false)
    {
        $word = substr($a, 7);
        $url = "http://api.wordnik.com/v4/word.json/".$word."/definitions?limit=1&includeRelated=true&useCanonical=false&includeTags=false&api_key=a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5";
        $json=file_get_contents($url);
        $data = json_decode($json, true);
        $def = $data[0]['text'];
        $end = $def;
    }
    else
    {
        $end = "Oops something went wrong";
    }
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>

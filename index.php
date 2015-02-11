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
        $temp = intval($data['main']['temp']);
        $temp = $temp* 2 + 32.00;
        $end = $data['weather'][0]['description']." and the temperature is ".$temp."\n\nSource: Weather Underground";
    }
    else if (strpos($a, 'define ') !== false)
    {
        $word = substr($a, 7);
        $url = "http://api.wordnik.com/v4/word.json/".$word."/definitions?limit=1&includeRelated=true&useCanonical=false&includeTags=false&api_key=a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5";
        $json=file_get_contents($url);
        $data = json_decode($json, true);
        $def = $data[0]['text'];
        $end = $def+"\n\nSource: Wordnik"
    }
    else if (strpos($a, 'calc ') !== false)
    {
        $end = calculate_string(substr($a, 5));
    }
    else if (strpos($a, 'who is') !== false) {
        $word = substr($a, 7);
        $final = str_replace(" ", "%20", $word);
        $url = "http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=".$final."&format=plaintext&podtitle=Notable%20facts";
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
        $end = get($contents,'<plaintext>','</plaintext>')."\n\nSource: Wolfram Alpha";
    }
    else if (strpos($a, 'who was') !== false) {
        $word = substr($a, 8);
        $final = str_replace(" ", "%20", $word);
        $url = "http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=".$final."&format=plaintext&podtitle=Notable%20facts";
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
        $end = get($contents,'<plaintext>','</plaintext>')."\n\nSource: Wolfram Alpha";
    }
    else if (strpos($a, 'what is ') !== false) {
        $word = substr($a, 8);
        $final = str_replace(" ", "%20", $word);
        $url = "http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=".$final."&format=plaintext&podtitle=Definitions";
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
        $end = get($contents,'<plaintext>','</plaintext>')."\n\nSource: Wolfram Alpha";
    }
    else if (strpos($a, 'what was ') !== false) {
        $word = substr($a, 8);
        $final = str_replace(" ", "%20", $word);
        $url = "http://api.wolframalpha.com/v2/query?appid=UHAP2X-235A2GLHLQ&input=".$final."&format=plaintext&podtitle=Definitions";
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
        $end = get($contents,'<plaintext>','</plaintext>')."\n\nSource: Wolfram Alpha";
    }
    else
    {
        $end = "Oops something went wrong";
    }
    function calculate_string( $mathString )    {
        $mathString = trim($mathString);     // trim white spaces
        $mathString = ereg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString); 

        $compute = create_function("", "return (" . $mathString . ");" );
        return 0 + $compute();
    }
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>

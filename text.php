<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    $end = "Oops something went wrong";
    if (strpos($a, 'andy') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
            
    else if (strpos($a, 'based') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
    else if (strpos($a, 'savage') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
    else if(strpos($a, 'baendy') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
    else if(strpos($a, 'bae') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
    else if(strpos($a, 'swag') !== false)
    {
        $end = "Swag can be seen in Andy Kamath. No further explanation needed";
    }
    else if(strpos($a, 'commands') !== false)
    {
        $end = "'Define word'\n'Weather'\n'Calc 5+5'\n'Who is George Washington'\n'What is a virus'";
    }
    else if (strpos($a, 'weather') !== false)
    {
        $city = substr($end, 11);
        $country = "US";
        $url="http://api.openweathermap.org/data/2.5/weather?q=Boone,US&units=metric&cnt=7&lang=en";
        $json=file_get_contents($url);
        $data=json_decode($json,true);
        $temp = intval($data['main']['temp']);
        $temp = $temp* 2 + 32.00;
        $end = "The temperature in Boone, NC is ".$temp.". Please do not ask again for ten minutes to avoid server costs";
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
        $end = get($contents,'<plaintext>','</plaintext>');
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
        $end = get($contents,'<plaintext>','</plaintext>');
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
        $end = get($contents,'<plaintext>','</plaintext>');
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
        $end = get($contents,'<plaintext>','</plaintext>');
    }
    function calculate_string( $mathString )    {
        $mathString = trim($mathString);     // trim white spaces
        $mathString = ereg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString); 

        $compute = create_function("", "return (" . $mathString . ");" );
        return 0 + $compute();
    }
    function contains($needle, $haystack)
    {
        if(strpos($haystack,$needle)!==false)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>

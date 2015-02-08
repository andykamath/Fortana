<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    if (strpos($a, 'weather') !== false)
    {
        try
        {
            $city = substr($end, 11);
            $country = "US";
            $url="http://api.openweathermap.org/data/2.5/weather?q=Charlotte,US&units=metric&cnt=7&lang=en";
            $json=file_get_contents($url);
            $data=json_decode($json,true);
            $temp = intval($data['main']['temp']);
            $temp = $temp* 2 + 32.00;
            $end = $data['weather'][0]['description']." and the temperature is ".$temp;
        }
        catch(Exception $e)
        {
            $end = "Sorry, something went wrong with your request. Please make sure your syntax is correct, i.e. \"What's the weather like outside\" or simply, \"Weather\"";
        }
    }
    else if (strpos($a, 'define ') !== false)
    {
        try
        {
            $word = substr($a, 7);
            $url = "http://api.wordnik.com/v4/word.json/".$word."/definitions?limit=1&includeRelated=true&useCanonical=false&includeTags=false&api_key=a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5";
            $json=file_get_contents($url);
            $data = json_decode($json, true);
            $def = $data[0]['text'];
            $end = $def;
        }
        catch (Exception $e)
        {
            $end = "Sorry, but unfortunately that word is not defined in our dictionary. Try asking, \"What is...\" to get a better answer";
        }
    }
    else if (strpos($a, 'calc ') !== false)
    {
        try {
            $end = calculate_string(substr($a, 5));   
        } catch (Exception $e) {
            $end = "Sorry, that syntax was not caught. This calculator can only do addition, 1+1, subtraction, 1-1, multiplication, 1*1, or division, 1/1.";
        }
    }
    else if (strpos($a, 'who is') !== false) {
        try
        {
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
        catch(Exception $e)
        {
            $end = "Sorry, that person isn't in our encyclopedia";
        }
    else if (strpos($a, 'who was') !== false) {
        try
        {
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
        catch(Exception $e)
        {
            $end = "Sorry, that person isn't in our encyclopedia";
        }
    }
    else if (strpos($a, 'what is ') !== false) {
        try
        {
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
        catch(Exception $e)
        {
            $end = "Sorry, that wasn't found in our Encyclopedia. Try saying \"Define...\" to get a better answer";
        }
    }
    else if (strpos($a, 'what was ') !== false) {
        try
        {
            $word = substr($a, 9);
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
        catch(Exception $e)
        {
            $end = "Sorry, that wasn't found in our Encyclopedia. Try saying \"Define...\" to get a better answer";
        }
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

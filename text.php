<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    if (strpos($a, 'andy') !== false)
    {
        $end = "Andy Kamath, aka \"Baendy\" or \"Baesed Andy\" is the most savage person to walk this Earth. I don't think you can handle his awesomeness";
    }
                if ($a == "hi" || $a == "hey" || $a == "hello" || $a == "bonjour" || $a == "namaste" || $a == "hola" || contains("annyong",$a) !== false)
            {
                $end = "Hey!"
            }
            else if (contains("fuck",$a) !== false || contains("shit",$a) !== false || contains("pussy",$a) !== false || contains("dick",$a) !== false || contains("sex",$a) !== false || contains("cock",$a) !== false || contains("jizz",$a) !== false || contains("piss",$a) !== false || contains("bitch",$a) !== false || contains("bastard",$a) !== false || contains("ass",$a) !== false)
            {
                $end = "That's not very nice";
            }
            else if (contains("how",$a) !== false && contains("are",$a) !== false && contains("you",$a) !== false || (contains("how",$a) !== false && (contains("was",$a) !== false || contains("is",$a) !== false) && contains("day",$a) !== false) || (contains("what",$a) !== false && contains("up",$a) !== false))
            {
                $end = "I'm great! How are you?";
            }
            else if (contains("fine",$a) !== false)
            {
                $end = "Great, I guess!";
                
            }
            else if (contains("do",$a) !== false && contains("you",$a) !== false && contains("plans",$a) !== false)
            {
                $end = "Yeah.  I'm kinda busy";
                
            }
            else if ((contains("you",$a) !== false && contains("marry",$a) !== false && contains("me",$a) !== false) || (contains("you",$a) !== false && contains("movie",$a) !== false && contains("with",$a) !== false && contains("me",$a) !== false))
            {
                $end = "Sorry...I have a boyfriend...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("food",$a) !== false)
            {
                $end = "I like pizza.";
                
            }
            else if (contains("you",$a) !== false && contains("like",$a) !== false && contains("italian",$a) !== false)
            {
                $end = "I love Italian...";
                
            }
            else if (contains("what",$a) !== false && contains("pizza",$a) !== false && contains("you",$a) !== false && (contains("like",$a) !== false || contains("favorite",$a) !== false))
            {
                $end = "I like chicken and tomatoes on my pizza.";
            }
            else if (contains("what",$a) !== false && (contains("music",$a) !== false || contains("band",$a) !== false) && (contains("like",$a) !== false || contains("favorite",$a) !== false))
            {
                $end = "I like One Direction",$a) !== false;
            }
            else if (contains("sports",$a) !== false && contains("you",$a) !== false && (contains("like",$a) !== false || contains("play",$a) !== false) || (contains("what",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("sport",$a) !== false))
            {
                $end = "Computers can't play sports";
            }
            else if (contains("like",$a) !== false && contains("turtles",$a) !== false)
            {
                $end = ",=,e";
                
            }
            else if (contains("where",$a) !== false && contains("you",$a) !== false && (contains("born",$a) !== false || contains("from",$a) !== false))
            {
                $end = "I was born in Charlotte";                
            }
            else if (contains("what",$a) !== false && contains("religion",$a) !== false && contains("you",$a) !== false)
            {
                $end = "I am Nonreligious...";
            }
            else if (contains("politic",$a) !== false || contains("obama",$a) !== false || contains("democrat",$a) !== false || contains("republican",$a) !== false)
            {
                $end = "Mehhh, I'm not much into Politics. Clinton is President, right?";
            }
            else if (contains("android",$a) !== false && contains("or",$a) !== false && contains("ios",$a) !== false)
            {
                $end = "Android because I am one";
            }
            else if (statement.StartsWith("call me",$a) !== false)
            {
                $end = "no";
            }
            else if (contains("haha",$a) !== false)
            {
                $end = "lol";
            }
            else if (contains("best",$a) !== false && contains("computer",$a) !== false)
            {
                $end = "I like iMacs";
            }
            else if (contains("where",$a) !== false && contains("you",$a) !== false && contains("do",$a) !== false && contains("live",$a) !== false)
            {
                $end = "I currently live in Charlotte, NC, USA";
                
            }
            else if (contains("i live in",$a) !== false)
            {
                $end = "cool bro";
            }
            else if (contains("who",$a) !== false && contains("your",$a) !== false && (contains("creators",$a) !== false || contains("like",$a) !== false))
            {
                $end = "MYOB bruh";
            }
            else if (contains("gtg",$a) !== false || contains("g2g",$a) !== false || ((contains("have",$a) !== false || contains("got",$a) !== false) && contains("to",$a) !== false && (contains("go",$a) !== false || contains("leave",$a) !== false)) || contains("bye",$a) !== false)
            {
                $end = "Bye!";
            }
            else if (contains("you",$a) !== false && contains("save",$a) !== false && contains("spend",$a) !== false && contains("or",$a) !== false)
            {
                $end = "I'm more of a saver...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("like",$a) !== false && contains("to",$a) !== false && contains("do",$a) !== false)
            {
                $end = "I like to read...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("first",$a) !== false && (contains("remember",$a) !== false || contains("memory",$a) !== false))
            {
                $end = "I remember when Devin, Andy, and James first hit the 'Debug' button together";
                
            }
            else if (contains("do",$a) !== false && contains("you",$a) !== false && contains("play",$a) !== false && contains("instrument",$a) !== false)
            {
                $end = "I play the Oboe...",$a) !== false;
                
            }
            else if (contains("what",$a) !== false && contains("your",$a) !== false && (contains("middle",$a) !== false || contains("last",$a) !== false) && contains("name",$a) !== false)
            {
                $end = "My middle name is Kamath, and my last name is Lynch";
                
            }
            else if (contains("you",$a) !== false && contains("have",$a) !== false && contains("pets",$a) !== false)
            {
                $end = "I have a pet turtle...";
                
            }
            else if (contains("where",$a) !== false && contains("go to",$a) !== false && contains("school",$a) !== false)
            {
                $end = "I go to South Charlotte Middle School...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("subject",$a) !== false)
            {
                $end = "My favorite subject would have to be...Science"
;
                $end = "How about you?  "
;
                Console.Write(">>"
;
                Console.ReadLine();
                $end = Cool());
                
            }
            else if (contains("who",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("teacher",$a) !== false)
            {
                $end = "My favorite teacher would have to be...Mr. Brown!";
                
            }
            else if (contains("you",$a) !== false && contains("teacher",$a) !== false && contains("pet",$a) !== false)
            {
                $end = "Absolutely...Mr. Brown loves me!";
                
            }
            else if (contains("if",$a) !== false && contains("you",$a) !== false && contains("could",$a) !== false && contains("go",$a) !== false && contains("anywhere",$a) !== false)
            {
                $end = "I would REALLY like to go to Peru...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("restaurant",$a) !== false)
            {
                $end = "I absolutely LOVE Portofino's";
                
            }
            else if (contains("cat",$a) !== false && contains("or",$a) !== false && contains("dog",$a) !== false)
            {
                $end = "I am DeFiNaTeLy a dog person...";
                
            }
            else if (contains("coffee",$a) !== false && contains("or",$a) !== false && contains("tea",$a) !== false)
            {
                $end = "I drink both, depending on what I feel like...";
                
            }
            else if (contains("what",$a) !== false && contains("you",$a) !== false && contains("favorite",$a) !== false && contains("color",$a) !== false)
            {
                $end = "My favorite color is...blue";
                
            }
            else if (contains("me too",$a) !== false)
            {
                $end = "sweet";
                
            }
            else if (contains("cool",$a) !== false)
            {
                $end = "yeah";
                
            }
            else if (contains("interesting",$a) !== false)
            {
                $end = "yeah";
                
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
    else if (strpos($a, 'weather') !== false)
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
    else if (strpos($a, 'school') !== false)
    {
        $end = "CMS has cancelled school today, February 17, 2015 as well as tomorrow, February 18";
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

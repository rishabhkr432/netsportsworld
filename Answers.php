<?php
//Question 1
//function showFortyChar($text){
//    if ($text === null){
//        return "No text entered";
//    }
//    elseif(strlen($text) > 200){
//        return "The entered text is too big. Text length is ". strlen($text);
//    }
//    else{
//
//        $string = wordwrap($text, 200, "\n", true);
//        strlen($string);
//        $rest = substr($string, 0,40);
//        return $rest;
//
//    }
//}
//$text = "The text should fit within 200 character long......................................................................................................................................................";
//echo showFortyChar($text);

//Question 2
//function removeNumbers($text){
//    if ($text === null){
//        return "No text entered";
//    }
//    else{
//
//        $words = preg_replace('/\d/', '', $text );
//        strlen($words);
//
//        return $words;
//    }
//}
//$text = "The text should fit within 200 character ...";
//echo removeNumbers($text);

//Question 3
//function deceipherText($text){
//    if ($text === null){
//        return "No text entered";
//    }
//    else{
//        $words = str_replace(["a", "r", "d"], ["c", "m", "e"], $text);
//
//        return $words;
//    }
//}
//$text = " a === c, r === m, d === e  ";
//
//echo deceipherText($text);


//Question 4
//function extractDomain($text){
//    if ($text === null){
//        return "No text entered";
//    }
//    else{
//        $url = parse_url($text);
//        $domain = $url['host'];
//        $domainName = str_replace('www.','',$domain);
//        return $domainName;
//    }
//}
//$text = "https://www.google.com";
//
//echo extractDomain($text);

//Question5
function extractDomain($text){
    if ($text === null){
        return "No text entered";
    }
    else{
        $url = parse_url($text, PHP_URL_QUERY);
        parse_str($url,$params);


        $variablesinfo = $params['name']. $params['value'];


            return $url;
//        return $variables;
    }
}
$text = "http://www.google.com/page?name=admin&value=12345";

echo extractDomain($text);
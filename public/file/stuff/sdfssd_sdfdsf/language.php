<?php

function lang($key=null){
        $file = "http://".$_SERVER['HTTP_HOST']."/app/language/hu_language2.json";
        $str = file_get_contents($file);
        $lang= current(json_decode($str, true));


    if(!empty($key)) {
        if (array_key_exists($key, $lang)) {
            echo $lang[$key];
        } else {
            echo $key . "*****";
        }
    }
    else {
       echo '<script> var langObj = '.json_encode($lang).'; function lang(key){ if(langObj.hasOwnProperty(key)){return langObj[key]} else {return key+"***";}}</script>';
    }

}

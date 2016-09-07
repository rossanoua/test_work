<?php
//edit this for
//checking for code 200 response
function remoteFileExists($robotstxt){
    $curl = curl_init($robotstxt);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    $result = curl_exec($curl);
    $ret = false;
    if ($result !== false) {
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($statusCode == 200) {
            $ret = true;
        }else
            $ret = false;

    }
    curl_close($curl);
    return $ret;
}

//define URL
$oururl = 'http://ceramica.noip.me/index.php?route=common/home';
//parse URL
$parsed = parse_url($oururl);
//set url for robots.txt
$robotstxt = "http://{$parsed['host']}/robots.txt";


//сгенерируй html для вставки в таблицу
//массив со значениями для вставки?
///////////////////////////////////////




//$exists = remoteFileExists("$robotstxt");
//if($exists){
//    $robottxt = file_get_contents("$robotstxt");
//}else{
//    $robottxt = "none";
//}
//
//echo '<pre>';
//echo $robottxt;
//echo '</pre>';

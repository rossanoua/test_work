<?php

require_once SCRIPTS . 'arr_for_table_content.php';
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
    return array($ret, $statusCode);
}

//define URL
$oururl = $url;
//parse URL
$parsed = parse_url($oururl);
//set url for robots.txt
$robotstxt = "http://{$parsed['host']}/robots.txt";


$exists = remoteFileExists("$robotstxt");
$check_code_response = $exists[0];
//echo '<pre>';
//print_r($check_code_response);
//echo '</pre>';

if($check_code_response){
    $robottxt = $arr[30];
}else{
    $robottxt = $arr[32];
}

//return array ($robottxt , $exists[1]);


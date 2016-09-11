<?php

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
$respondStatusCode = $exists[1];

//$arrayCheckCodeResponse['0'] = '1' ;
$arrayCheckCodeResponse[] = 'Проверка кода ответа сервера для файла robots.txt' ;

if($check_code_response){
    $arrayCheckCodeResponse[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arrayCheckCodeResponse[] = 'Состояние';
    $arrayCheckCodeResponse[] = 'Файл robots.txt отдаёт код ответа сервера:' . $respondStatusCode;
    $arrayCheckCodeResponse[] = 'Рекомендации';
    $arrayCheckCodeResponse[] = 'Доработки не требуются';
}else{
    $arrayCheckCodeResponse[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arrayCheckCodeResponse[] = 'Состояние';
    $arrayCheckCodeResponse[] = 'При обращении к файлу robots.txt сервер возвращает код ответа: ' . $respondStatusCode;
    $arrayCheckCodeResponse[] = 'Рекомендации';
    $arrayCheckCodeResponse[] = 'Программист: Файл robots.txt должны отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо настроить сайт таким образом, чтобы при обращении к файлу robots.txt сервер возвращает код ответа 200';
}


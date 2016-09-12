<?php
require_once SCRIPTS . 'c_file_exists.php';

function isHostSitemapSet ($robotstxt){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $robotstxt);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    curl_close($curl);

    $data = array($data);

    $str = implode(" ", $data);

    $str = strtolower($str);

    $sitemapset = substr_count($str, 'sitemap:');
    $hostset =  substr_count($str, 'host:');

    $hostsetbool = (boolean) $hostset;
    $sitemapsetbool = (boolean) $sitemapset;

    return array($sitemapset, $hostset, $hostsetbool, $sitemapsetbool);
}

$arrayisHostSitemapSet = isHostSitemapSet($robotstxt);

$arrayHostSet[] = 'Проверка указания директивы Host' ;

if($arrayisHostSitemapSet[2]){
    $arrayHostSet[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arrayHostSet[] = 'Состояние';
    $arrayHostSet[] = 'Директива Host указана';
    $arrayHostSet[] = 'Рекомендации';
    $arrayHostSet[] = 'Доработки не требуются';
}else{
    $arrayHostSet[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arrayHostSet[] = 'Состояние';
    $arrayHostSet[] = 'В файле robots.txt не указана директива Host';
    $arrayHostSet[] = 'Рекомендации';
    $arrayHostSet[] = 'Программист: Для того, чтобы поисковые системы знали, какая версия сайта является основных зеркалом, необходимо прописать адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо добавить в файл robots.txt директиву Host. Директива Host задётся в файле 1 раз, после всех правил.';
}

$arrayHostCount[] = 'Проверка количества директив Host, прописанных в файле' ;

if($arrayisHostSitemapSet[1] == 1){
    $arrayHostCount[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arrayHostCount[] = 'Состояние';
    $arrayHostCount[] = 'В файле прописана 1 директива Host';
    $arrayHostCount[] = 'Рекомендации';
    $arrayHostCount[] = 'Доработки не требуются';
}else{
    $arrayHostCount[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arrayHostCount[] = 'Состояние';
    $arrayHostCount[] = 'В файле прописано несколько директив Host';
    $arrayHostCount[] = 'Рекомендации';
    $arrayHostCount[] = 'Программист: Директива Host должна быть указана в файле толоко 1 раз. Необходимо удалить все дополнительные директивы Host и оставить только 1, корректную и соответствующую основному зеркалу сайта';
}


$arraySitemapSet[] = 'Проверка указания директивы Sitemap' ;

if($arrayisHostSitemapSet[3]){
    $arraySitemapSet[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arraySitemapSet[] = 'Состояние';
    $arraySitemapSet[] = 'Директива Sitemap указана';
    $arraySitemapSet[] = 'Рекомендации';
    $arraySitemapSet[] = 'Доработки не требуются';
}else{
    $arraySitemapSet[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arraySitemapSet[] = 'Состояние';
    $arraySitemapSet[] = 'В файле robots.txt не указана директива Sitemap';
    $arraySitemapSet[] = 'Рекомендации';
    $arraySitemapSet[] = 'Программист: Добавить в файл robots.txt директиву Sitemap';
}


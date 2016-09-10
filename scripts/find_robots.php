<?php
require_once SCRIPTS . 'c_file_exists.php';

$arrayIsRobotsTxtExists[] = 'Проверка наличия файла robots.txt' ;

if($check_code_response){
    $arrayIsRobotsTxtExists[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arrayIsRobotsTxtExists[] = 'Состояние';
    $arrayIsRobotsTxtExists[] = 'Файл robots.txt присутствует';
    $arrayIsRobotsTxtExists[] = 'Рекомендации';
    $arrayIsRobotsTxtExists[] = 'Доработки не требуются';
}else{
    $arrayIsRobotsTxtExists[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arrayIsRobotsTxtExists[] = 'Состояние';
    $arrayIsRobotsTxtExists[] = 'Файл robots.txt отсутствует';
    $arrayIsRobotsTxtExists[] = 'Рекомендации';
    $arrayIsRobotsTxtExists[] = 'Программист: Создать файл robots.txt и разместить его на сайте.';
}
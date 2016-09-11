<?php
require_once SCRIPTS . 'c_file_exists.php';
function remote_filesize($robotstxt) {
    static $regex = '/^Content-Length: *+\K\d++$/im';
    if (!$fp = @fopen($robotstxt, 'rb')) {
        return false;
    }
    if (
        isset($http_response_header) &&
        preg_match($regex, implode("\n", $http_response_header), $matches)
    ) {
        return (int)$matches[0];
    }
    $size = strlen(stream_get_contents($fp));
    return $size;
}

$bytes =  remote_filesize($robotstxt);

function formatSizeUnits($bytes)
{
    if ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' kB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

$hrBytes = formatSizeUnits($bytes);


$arrayCheckFileSize[] = 'Проверка размера файла robots.txt' ;

if($bytes <= 32768){
    $arrayCheckFileSize[] = '<td class="tg-vkov" rowspan="2">ОК</td>';
    $arrayCheckFileSize[] = 'Состояние';
    $arrayCheckFileSize[] = 'Размер файла robots.txt составляет ' . $hrBytes . ' , что находится в пределах допустимой нормы';
    $arrayCheckFileSize[] = 'Рекомендации';
    $arrayCheckFileSize[] = 'Доработки не требуются';
}else{
    $arrayCheckFileSize[] = '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">Ошибка</td>';
    $arrayCheckFileSize[] = 'Состояние';
    $arrayCheckFileSize[] = 'Размера файла robots.txt составляет ' . $hrBytes . ' , что превышает допустимую норму';
    $arrayCheckFileSize[] = 'Рекомендации';
    $arrayCheckFileSize[] = 'Программист: Максимально допустимый размер файла robots.txt составляем 32 кб. Необходимо отредактировть файл robots.txt таким образом, чтобы его размер не превышал 32 Kb';
}
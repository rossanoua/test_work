<?php
$arrayCheckCodeResponse = array();
$arrayCheckFileSize = array();
$arrayIsRobotsTxtExists = array();
$globalArray = array();

require_once SCRIPTS . 'c_file_exists.php';
require_once SCRIPTS . 'find_robots.php';
require_once SCRIPTS . 'check_file_size.php';


$globalArray[] = $arrayIsRobotsTxtExists;
$globalArray[] = $arrayCheckFileSize;
$globalArray[] = $arrayCheckCodeResponse;



for ($i = 0; $i < count($globalArray); $i++) {

        $j = 0;
        echo '<tr>';
        echo '<td class="tg-s6z2" rowspan="2">' .  ++$i . '</td>';
        echo '<td class="tg-s6z2" rowspan="2">' . $globalArray[--$i][$j] . '</td>';
        echo $globalArray[$i][++$j];
        echo '<td class="tg-s6z2">' . $globalArray[$i][++$j] . '</td>'; // состояние
        echo '<td class="tg-s6z2">' . $globalArray[$i][++$j] . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="tg-yw4l">' . $globalArray[$i][++$j] . '</td>'; //рекомендации
        echo '<td class="tg-yw4l">' . $globalArray[$i][++$j] . '</td>';
        echo '</tr>';
}



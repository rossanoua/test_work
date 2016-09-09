<?php
$arrayCheckCodeResponse = array();
$globalArray = array();

require_once SCRIPTS . 'c_file_exists.php';

$globalArray[] = $arrayCheckCodeResponse;



for ($i = 0; $i < count($globalArray); $i++) {

        $j = 0;
        echo '<tr>';
        echo '<td class="tg-s6z2" rowspan="2">' . $globalArray[$i][$j] . '</td>';
        echo '<td class="tg-s6z2" rowspan="2">' . $globalArray[$i][$j+1] . '</td>';
        echo $globalArray[$i][$j+2];
        echo '<td class="tg-s6z2">' . $globalArray[$i][$j+3] . '</td>'; // состояние
        echo '<td class="tg-s6z2">' . $globalArray[$i][$j+5] . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="tg-yw4l">' . $globalArray[$i][$j+4] . '</td>'; //рекомендации
        echo '<td class="tg-yw4l">' . $globalArray[$i][$j+6] . '</td>';
        echo '</tr>';
}

?>

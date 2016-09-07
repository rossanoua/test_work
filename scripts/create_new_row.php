<?php
require_once (realpath(dirname(__FILE__) . "/../scripts/arr_for_table_content.php"));
require_once (realpath(dirname(__FILE__) . "/../scripts/c_file_exists.php"));
echo '<tr>';
echo '<td class="tg-s6z2" rowspan="2">1</td>';
echo '<td class="tg-s6z2" rowspan="2">' . $arr[5] . '</td>';
if ($exists[0] == 200){
    echo '<td class="tg-vkov" rowspan="2">' . $arr[6] . '</td>';
}else {
    echo '<td class="tg-vkov" rowspan="2" style="background-color: red; !important;">' . $arr[7] . '</td>';
}
echo '<td class="tg-s6z2">'. $arr[8] .'</td>'; // состояние
echo '<td class="tg-s6z2">' . "$robottxt" . $exists[1] . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td class="tg-yw4l">' . $arr[9] . '</td>'; //рекомендации
if ($exists[0] == 200){
    echo '<td class="tg-yw4l">' . $arr[31] . '</td>';
}else{
    echo '<td class="tg-yw4l">' . $arr[33] . '</td>';
}
echo '</tr>';
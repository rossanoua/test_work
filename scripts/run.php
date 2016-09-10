<?php require_once (realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../defines.php'));?>
<?php
if (!empty ($_POST)){
    $url = $_POST['url'];
    echo '<div class="h1"><h1>Ищем robots.txt по адресу: ' . $url . '/robots.txt</h1></div>';
    require_once VIEW . 'table.php';
    require_once SCRIPTS . 'c_file_exists.php';
    echo '<div>';
    echo '<a href="">Go to Start</a>';
    echo '</div>';
}else{
    echo '<div class="h1"><h1>Где будем искать?</h1></div>';
}
?>


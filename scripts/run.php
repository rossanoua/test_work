<?php require_once (realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../defines.php'));?>
<?php
if (!empty ($_POST)){
    $url = $_POST['url'] ;
    require_once VIEW . 'table.php';
    require_once SCRIPTS . 'c_file_exists.php';
}else{
    echo '<div class="h1"><h1>Где будем искать?</h1></div>';
}
?>
<?php //require_once realpath(dirname(__FILE__))   . "/../index.php";?>
<?php //require_once SITE_PATH . DS . 'index.php';?>

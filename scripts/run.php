<?php require_once (realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../defines.php'));?>
<?php
if (!empty ($_POST)){
    $url = $_POST['url'];
    echo '<div class="h1"><h1>Ищем robots.txt по адресу: ' . $url . '/robots.txt</h1></div>';
    require_once VIEW . 'table.php';
    echo '<div>';
    echo '<a href="">Go to Start</a>';
    echo '</div>';
}else{
    echo '<div class="h1"><h1>Где будем искать?</h1></div>';
    echo '<div class="a_robots"><p>Мини сервис для проверки синтаксиса файла robots.txt</p><p>Стандарт исключений для роботов (robots.txt) — файл ограничения доступа к содержимому роботам на http-сервере. Файл должен находиться в корне сайта (то есть иметь путь относительно имени сайта /robots.txt). При наличии нескольких поддоменов файл должен располагаться в корневом каталоге каждого из них.</p><a href="https://ru.wikipedia.org/wiki/%D0%A1%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82_%D0%B8%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B9_%D0%B4%D0%BB%D1%8F_%D1%80%D0%BE%D0%B1%D0%BE%D1%82%D0%BE%D0%B2">Почитать о robots.txt на wiki</a></div>';
}
?>


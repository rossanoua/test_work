<?php require_once (realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'defines.php'));?>
<?php require_once VIEW . 'head.php'?>
<body>

<form method="post" action="">
    <input type="text" name="url" placeholder="Enter URL starts with http://">
    <input type="submit">
</form>
<?php //require_once (realpath(dirname(__FILE__) . "/scripts/run.php"));?>
<?php require_once SCRIPTS . "run.php";?>



</body>
</html>
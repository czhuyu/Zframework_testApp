<?php  
/**
*新建application index.php
*/

define('APP_PATH', __DIR__);

require ('../Z/Z.php');

$app = Z::app();
$app->runController();

?>
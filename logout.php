
<?php
    ob_start(); // Initiate the output buffer
?>

<?php
require_once 'core/init.php';
$user = new User();
$user->logout();
Redirect::to('index.php');
?>
<?php
    ob_end_flush(); // Initiate the output buffer
?>
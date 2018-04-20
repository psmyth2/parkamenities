<?php
include '../../apis/cartodbProxy.php';
//      ^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "update park set flag = true where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
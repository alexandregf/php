<?php 

session_id('n1ao5qvn9js1jtd2lrip8i1in1');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>
<?php



define('BASEURL', '/datacollect/');

$db = mysqli_connect('127.0.0.1','root','','datacollect')
or die ( mysqli_error($MySQL_Handle) );

$sSQL= 'SET CHARACTER SET utf8';

mysqli_query($db,$sSQL)
or die ('Can\'t charset in DataBase');






?>
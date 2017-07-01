<?php

// <summary>connect to specif database</summary>
    $db = new PDO('mysql:host=localhost;dbname=nobatgiri;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
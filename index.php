<?php
    $pdo = new PDO('mysql:host=localhost; dbname=classicmodels', 'root', '');

    $sql = 'SELECT orderNumber, orderDate, shippedDate, status FROM orders;';
    $q = $pdo -> query($sql);
    $d=1; 
    include 'index.phtml'; 

?>
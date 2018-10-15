<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include_once 'Singleton.php';
        $s1 = Singleton::getInstance();
        $s1->setData(111); 
        $s2 = Singleton::getInstance();
        $s2->setData(777);        
        echo 'S1 data is: ' . $s1->getData() . '<br>';
        echo 'S1 data is: ' . $s2->getData() . '<br>';
        ?>
    </body>
</html>

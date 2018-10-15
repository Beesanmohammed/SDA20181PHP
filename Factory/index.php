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
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });
        $it1 = factoryDp::getStudent('IT');
        $it1->view();
        $it2 = factoryDp::getStudent('IT');
        $it2->view();
        $eng = factoryDp::getStudent('eNg');
        $eng->view();
        $art = factoryDp::getStudent('art2');
        $art->view();
        ?>
    </body>
</html>

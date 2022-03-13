<?php

    // Вариант с локальной областью видимости
    // Передача аргумента функции и возврат нового значения
    function change_hello($str_to_change) {
        $str_to_change = "Hello World";
        return $str_to_change;
    }
    
    $str = "Some text for string";
    echo $str."<br>";
    $str = change_hello($str);
    echo $str;


    // Вариант с глобальой областью видимости
    // Переменная $str_to_change внутри функции объявляется глобальной, что позволяет функции
    // изменять значение этой переменной за пределами локальной области видимости фунции
    
    // function change_hello($str_to_change) {
    //     global $str_to_change;
    //     $str_to_change = "Hello World";
    // }
    
    // $str_to_change = "Some text for string";
    // echo $str_to_change."<br>";
    // change_hello($str_to_change);
    // echo $str_to_change;

?>
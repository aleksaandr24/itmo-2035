<?php

    // Первый блок выполняться не будет из-за попытки вызова неопределенной функции bar(),
    // она является вложенной в функцию foo(), которую ещё не вызывали
    // Будет выведена ошибка: Fatal error: Uncaught Error: Call to undefined function bar()
    
    // function foo() {
    //     function bar() { 
    //         echo "Hello world";
    //     } 
    // } 
    // bar();

    // Второй блок выполнится, так как сначала вызывается функция foo()
    // В результате на странице выводится: Hello world
    
    function foo() {
        function bar() {
            echo "Hello world";
        }
    }
    foo(); 
    bar();
    
?>
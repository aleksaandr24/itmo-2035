<?php
    echo <<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>\n
    END;

    $right_answer1 = "Январь";
    $right_answer2 = 366;
    $user_answer1 = (isset($_POST['question_1_answer'])) ? $_POST['question_1_answer'] : 'не указан';
    $user_answer2 = (isset($_POST['question_2_answer'])) ? $_POST['question_2_answer'] : 'не указан';
    
    echo "<p><b>Вопрос 1. С какого месяца начинается новый год?</b></p>\n";
    echo "<p>Вы ответили - $user_answer1. Правильно - $right_answer1</p>\n";
    echo "<p><b>Вопрос 2. Сколько дней в високосном году?</b></p>\n";
    echo "<p>Вы ответили - $user_answer2. Правильно - $right_answer2</p>\n";

    echo <<<END
    </body>
    </html>
    END;
?>
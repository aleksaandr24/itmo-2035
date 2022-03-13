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
    <body>
        <form action="submit.php" method="post" name="testForm">
            <fieldset>
                <p><b>Вопрос 1. С какого месяца начинается новый год?</b></p>
                <labeL><input name="question_1_answer" type="radio" value="Сентябрь">Сентябрь</label><br>
                <labeL><input name="question_1_answer" type="radio" value="Январь" checked>Январь</label><br>
                <labeL><input name="question_1_answer" type="radio" value="Март">Март</label><br>
            </fieldset>
            <fieldset>
                <p><b>Вопрос 2. Сколько дней в високосном году?</b></p>
                <labeL><input name="question_2_answer" type="radio" value=365>365</label><br>
                <labeL><input name="question_2_answer" type="radio" value=366 checked>366</label><br>
                <labeL><input name="question_2_answer" type="radio" value=368>368</label><br>
            </fieldset>
            <input name="submitButton" type="submit" value="Отправить ответы">
        </form>
    </body>
    </html>
    END;
?>
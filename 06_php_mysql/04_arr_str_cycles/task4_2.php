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

    $i = 0;
    while (++$i < 11) {
        switch ($i) {
            case 5:
                echo "Итерация 5";
                break;
            case 6:
                echo " ";
                break;
            case 10:
                echo "Итерация 10";
                break;
        }
    }

    echo <<<END
    \n</body>
    </html>
    END;
?>
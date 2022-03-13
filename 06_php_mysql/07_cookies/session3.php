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

    session_start();
    unset($_SESSION['username'], $_SESSION['user_id']);
    session_destroy();
    echo "Переменные удалены, сессия разрушена<br>\n";

    echo <<<END
    \n</body>
    </html>
    END;
?>
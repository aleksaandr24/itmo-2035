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
    $_SESSION['username'] = 'test';
    $_SESSION['user_id'] = 12345;
    echo "Сессия установлена<br><br>\n";
    echo '<a href="session2.php">Следующая страница</a>';

    echo <<<END
    \n</body>
    </html>
    END;
?>
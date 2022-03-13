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

    $str_before = "теперь пора всем хорошим людям прийти на помощь стране";
    echo "<p>А. $str_before</p>\n";
    $str_before_arr = explode(" ", $str_before);
    $str_after_arr = array(
        $str_before_arr[1],
        $str_before_arr[0],
        $str_before_arr[8],
        $str_before_arr[5],
        $str_before_arr[6],
        $str_before_arr[7],
        $str_before_arr[2],
        $str_before_arr[3],
        $str_before_arr[4]
    );
    $str_after = implode(" ", $str_after_arr);
    echo "<p>Б. $str_after</p>\n";

    echo <<<END
    </body>
    </html>
    END;
?>
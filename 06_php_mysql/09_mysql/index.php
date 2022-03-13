<?php
    echo <<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Список заказов</title>
    </head>
    <body>\n
    END;

    $mysqli = mysqli_connect('db', 'root', 'password', 'NewDatabase');
    
    if ($mysqli === false) {
        die('ERROR: Could not connect. '.mysqli_connect_error());
    } else {
        $res = $mysqli->query('SELECT * FROM Zakaz;');
        
        echo "<table border=1 cellspacing=0 cellpadding=4 border-color=\"black\">\n";
        echo "<tr><td>id</td><td>Имя</td><td>Фамилия</td><td>Email</td><td>Товар</td><td>Количество</td></tr>\n";

        for ($row_no = 0; $row_no <= $res->num_rows - 1; $row_no++) {
            $res->data_seek($row_no);
            $row = $res->fetch_assoc();
            echo "<tr>".
                "<td>".$row['id']."</td>".
                "<td>".$row['Name']."</td>".
                "<td>".$row['Fam']."</td>".
                "<td>".$row['Email']."</td>".
                "<td>".$row['Tovar']."</td>".
                "<td>".$row['Col']."</td>".
                "</tr>\n";
        }

        echo "</table>";
        mysqli_close($mysqli);
    }

    echo <<<END
    \n</body>
    </html>
    END;
?>
<?php

function increment($alphaNumericString) {
    $numericValue = base_convert($alphaNumericString, 36, 10);
    $numericValue++;
    $newAlphaNumericString = base_convert($numericValue, 10, 36);
    return str_pad($newAlphaNumericString, strlen($alphaNumericString), '0', STR_PAD_LEFT);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border: 1px solid black;
            margin: auto;
            border-collapse: collapse;
            width: 50%; 
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: yellow;
        }

        tr:nth-child(even) {
            background-color: lightgray;
        }

        tr:nth-child(odd) {
            background-color: white;
        }
    </style>
</head>
<body>

<table>
    <tr><th>Input</th><th>Output</th></tr>

    <?php
    $number = "000";
    do {
        echo '<tr>';
        echo '<td>' . $number . '</td>';
        $number = increment($number);
        echo '<td>' . $number . '</td>';
        echo '</tr>';
    } while ($number != "zzz");
    ?>
</table>

</body>
</html>

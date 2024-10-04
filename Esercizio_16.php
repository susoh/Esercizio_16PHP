<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $r = 5;
        $c = 5;
        echo "<table border = '1' style = 'border-collapse: collapse;'>";


        function creaTabella($col, $row) {
            for ($i=1; $i <= $col; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= $row; $j++) { 
                    echo "<td style = 'padding: 10px '>{$i},{$j}</td>";
                }
                echo "</tr>";
            }
        }

        creaTabella($c,$r);
        echo "</table>"
    ?>
</body>
</html>
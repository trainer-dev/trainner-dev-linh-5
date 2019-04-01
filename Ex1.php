<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
    echo  "<table border=1><tr>";
    for($i=1;$i<=5;$i++)
    {
        echo "<td>";
        for($n=1;$n<=10;$n++) {
            echo $n."x". $i ."=".($n * $i)."<br>";
        }
        echo "</td>";
    }

    echo "</tr><tr>";

    for($j=6;$j<11;$j++)
    {
        echo "<td>";
        for($m=1;$m<=10;$m++) {
            echo $j . "x" . $m . "=" . ($m * $j)."<br>";
        }
        echo"</td>";
    }
    echo"</tr></table>";

?>

</body>
</html>
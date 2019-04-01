<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VE tam giac</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="nums">
    <input  type="submit" name="submit" value="Ve tam giac">
</form>

<?php
    if(isset($_POST["submit"])) {
        $size = $_POST["nums"];
        $array = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

        for ($i = 1; $i <= $size; $i++) {
            for ($j = 0; $j <= $size - $i; $j++)
                echo " ";
            for ($k = 1; $k <= $i; $k++) {
                if ($k === 1 || $k === $i) {
                    echo $array[$i - 1] . " ";
                } else {
                    for ($b = 2; $b < $i / 2 + 1; $b++) {
                        if ($k === $b)
                            echo " " . $array[$i - $b] . " ";
                    }
                    for ($c = $b; $c < $i; $c++) {
                        if ($k === $c) {
                            for ($z = 1; $z < 2; $z++)
                                echo " " . $array[$k - 2 + $z] . " ";
                        }
                    }
                }

            }
            echo "<br>";

            if ($i >= 9) {
                for ($x = 9; $x >= 0 ; $x--) {
                    array_splice($array, 10, 0, $array[$x]);

                }
            }

        }
    }
?>



</body>
</html>
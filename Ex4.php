<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VE tam giac</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name="nums" >
    <input  type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])) {
    $num = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $post = $_POST['nums'];
    for ($i = 0; $i < $post; $i++) {
        echo $num[$i] . " ";
        for ($j = $i - 1; $j >= 0; $j--) {
            echo $num[$j], " ";
        }
        echo "<br>";

        if ($i >= 9) {
            for ($x = 9; $x >= 0 ; $x--) {
                array_splice($num, 10, 0, $num[$x]);
            }
        }
    }
}

?>

</body>
</html>
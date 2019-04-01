<html>
<header>
    <title>Bonus 1</title>
</header>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    a: <input type="text" name="numA" placeholder="Please enter a number"><br><br>
    b: <input type="text" name="numB" placeholder="Please enter a number"><br><br>
    c: <input type="text" name="numC" placeholder="Please enter a number"><br><br>
    <input type="submit" value="submit" name="submit">
</form>

<?php
require "pagination.php";

?>

</body>
</html>
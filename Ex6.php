<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Máy tính điện tử</title>
    <style>
        input[type=text] {
            max-width: 40px;
            height: 15px;
        }
        .casio {
            max-width: 300px;
            height: 30px;
            padding: 10px;
            border: 1px solid #000000;
        }
        p {
            width: 5px;
            margin: 0;
            display: inline;
        }
        form {
            padding: 1% 3%;
        }
    </style>
</head>
<body>
<div class="casio" >
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="num1">
        <input type="submit" name="submit" value="+">
        <input type="submit" name="submit" value="-">
        <input type="submit" name="submit" value="x">
        <input type="submit" name="submit" value="/">
        <input type="submit" name="submit" value="^">
        <input type="text" name="num2">
        <p>=</p>
        <input type="text" id="rs" value= "<?php if(isset($result)) echo $result?>">
    </form>
    <span>
        <?php
        if(isset($error))
            echo $error;
        ?>
    </span>
</div>

<?php
if(isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $submit = $_POST["submit"];

    if($submit == "+"){
        $result = $num1 + $num2;
    }
    if($submit =="-")
        $result = $num1 - $num2;
    if($submit =="*")
        $result = $num1 * $num2;
    if($submit == "/") {
        if($num2!=0) {
            $result = ($num1 / $num2);
        }
        else {
            $error =  "Please enter a number which difference 0.";
        }
    }

    if($submit == "^")
        $result = pow($num1,$num2);
}
?>

</body>
</html>

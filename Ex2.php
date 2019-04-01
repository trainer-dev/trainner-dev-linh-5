<html>
<head>
    <meta charset="UTF-8">
    <title>Exercise 2</title>

    <style>
        * {
            margin:0;
            padding:0;
        }
        form{
            padding: 10px 0;
        }
        .pro {
            height: 15px;
        }


        ul {
            list-style-type: none ;
            display: inline;
        }
        li {
            float: left;

        }
        li#Anh {
            width: <?php echo $_POST["Anh"]?>;
            height: 20px;
            background-color: red;
        }
        li#Phap {
            width: <?php echo $_POST["Phap"]?>;
            height: 20px;
            background-color: red;
        }
        li#Duc {
            width: <?php echo $_POST["Duc"]?>;
            height: 20px;
            background-color: red;
        }
        li#Nga {
            width: <?php echo $_POST["Nga"]?>;
            height: 20px;
            background-color: red;
        }
        li#Nhat {
            width: <?php echo $_POST["Nhat"]?>;
            height: 20px;
            background-color: red;
        }

    </style>
</head>
<body>
<div id="table">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Anh: <input type="number" id="Anh" name="Anh" autocomplete="true"><br>
        Phap: <input type="number" id="Phap" name="Phap" autocomplete="true"><br>
        Duc: <input type="number" id="Duc" name="Duc" autocomplete="true"><br>
        Nga: <input type="number" id="Nga" name="Nga" autocomplete="true"><br>
        Nhat: <input type="number" id="Nhat" name="Nhat" autocomplete="true"><br>
        <input  type="submit" value="Ve do thi"  name="submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
    ?>
    <table border="1">
        <tr>
            <td>Anh</td>
            <td>
                <ul>
                    <li id="Anh"></li>
                    <li class="pro"><?php echo $_POST["Anh"]."%"?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Phap</td>
            <td>
                <ul>
                    <li id="Phap"></li>
                    <li class="pro"><?php echo $_POST["Phap"]."%"?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Duc</td>
            <td>
                <ul>
                    <li id="Duc"></li>
                    <li class="pro"><?php echo $_POST["Duc"]."%"?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Nga</td>
            <td>
                <ul>
                    <li id="Nga"></li>
                    <li class="pro"><?php echo $_POST["Nga"]."%" ?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Nhat</td>
            <td>
                <ul>
                    <li id="Nhat"></li>
                    <li class="pro"><?php echo $_POST["Nhat"]."%" ?></li>
                </ul>
            </td>
        </tr>
    </table>
    <?php } ?>
</div>
</body>
</html>
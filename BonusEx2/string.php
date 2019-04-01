<html>
<header>
    <title>Bai 2</title>
    <style>
        b{
            background: yellow;
        }
    </style>
</header>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter text here:<br>
        <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Enter a character:<br>
        <input type="text" class="character" name="element"><br><br>
        <input type="submit" name="submit" value="Phan tich"><br>
    </form>
</body>
</html>
<?php

function utf8convert($str) {

    if(!$str) return false;

    $utf8 = array(

        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

        'd'=>'đ|Đ',

        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

        'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

        'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

    );

    foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);

    return $str;

}

if(isset($_POST["submit"])){
    $string = test_input($_POST["comment"]);

    /**
     * Tính số lần xuất hiện của element
     */
    $substr = $_POST["element"];
    $count = substr_count($string,$substr);

    /**
     * Danh sách các từ chứa các ký tự
     */


    function getWord($string,$key)
    {
        $array = explode(" ",strtolower($string));

        for ($i = 0; $i < count($array); $i++) {
            $a = strpos($array[$i],$key);
            if($a!==false){
                echo $array[$i].", ";
            }
        }
    }

    /**
     * Đoạn văn bản với các từ có ký tự được in đậm
     */
    function Paint($string,$key)
    {
        $str = utf8convert($string);
        $array = explode(" ",strtolower($str));
        $strArray = explode(" ",$string);
        for ($i = 0; $i < count($array); $i++) {
            $a = strpos($array[$i],$key);
            if($a!==false){
                $strArray[$i]= "<b>".$strArray[$i]."</b>";
            }
            echo $strArray[$i]. " ";
        }
    }


    /**
     * result
     */
    echo "Numbers of time appears: ".$count."<br><br>";
    echo "List element: ";
    echo getWord($string,$substr)."<br><br>";
    echo "Full para: ";
    echo Paint($string,$substr);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


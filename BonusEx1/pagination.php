<?php
/**
 * Created by PhpStorm.
 * User: linhngoc
 * Date: 26/03/2019
 * Time: 15:55
 */

if(isset($_GET["submit"])) {
    $array=array();

    /**
     * Tạo mảng các số nhỏ hơn a và chia hết cho b
     */
    $array = array();
    for ($i = 1; $i <= $_GET["numA"]; $i++) {
        if($i % $_GET["numB"]==0){
            $array[$i]=$i;
//            echo $array."<br>";
        }
    }


    /**
     * Chia trang chứa c số chia hết cho b và nhỏ hơn a
     */

    //Tìm limit và current page
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1; //Trang hien tai
    $limit = $_GET["numC"];

    //Tính toán total pages và start
    $total_page = ceil(count($array) / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $offset = ($current_page - 1) * $limit;


    /**
     * In ra cac phan tu trong trang
     */
    $newArray = array_splice($array, $offset, $limit);
    echo implode("<br>", $newArray) . "<br>";


    /**
     * Phần hiển thị phân trang
     */
    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
    if ($current_page > 1 && $total_page > 1){
        echo '[ <a href="index.php?page='.($current_page-1).'&numA='.$_GET["numA"].'&numB='.$_GET["numB"].'&numC='.$_GET["numC"].'&submit=submit">Prev</a> ] ';

    }


    // Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page){
            echo '[ <span>'.$i.'</span> ] ';
        }
        else{
//            echo '[ <a href="index.php?page='.$i.'&ofset='.$offset.'&limit='.$limit.'">'.$i.'</a> ] ';
            echo '[ <a href="index.php?page='.$i.'&numA='.$_GET["numA"].'&numB='.$_GET["numB"].'&numC='.$_GET["numC"].'&submit=submit">'.$i.'</a> ] ';

        }
    }

    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
    if ($current_page < $total_page && $total_page > 1){
        echo '[ <a href="index.php?page='.($current_page+1).'&numA='.$_GET["numA"].'&numB='.$_GET["numB"].'&numC='.$_GET["numC"].'&submit=submit">Next</a> ] ';

    }
}

?>
<?php

$db = mysqli_connect($hostname,$username, $password, $dbname);
//запрос для вибора вірного кодування
mysqli_set_charset($db, "utf8");


if (isset($_GET['page'])) {
    //якщо значення сторінки присутнє, то воно присвоюється змінній page
    $page = $_GET['page'];
} else { // Иначе
    // якщо значення відсутє, значить це перша сторінка, і змінній присвоюється 1
    $page = 1;
}

//визначає, які записи будуть показані, залежно від сторінки
function select_boxers_page($page){
    $num = -10 + ($page * 10);
    return $num;
    
}

//заносить в перемінну значення сторінок які виводяться
$num = select_boxers_page($page);
 
//запрос записів з бд залежно від сторінки
$query = "SELECT * FROM $usertable LIMIT $num,10";
//запрос кількості рядків
$query2 = "SELECT * FROM $usertable";
//10 потрібних записів з бд
$result = mysqli_query($db, $query);
//кількість рядків бд
$sql = "SELECT * FROM $usertable";
if($result2 = mysqli_query($db, $query2)){
    while($row = mysqli_fetch_array($result2)){
        $pages =  $pages + 1;
        
    }
}
while ($pages>0){
    $pages = $pages - 10;
    $last_page = $last_page + 1;
}



?>










<?php include("header.php"); ?>
<?php include("left_box.php"); ?>
<?php include("content_fights.php"); ?>

<?php include("footer.php"); ?>
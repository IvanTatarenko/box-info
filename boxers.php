<?php

$db = mysqli_connect($hostname,$username, $password, $dbname);

mysqli_set_charset($db, "utf8");


if (isset($_GET['page'])) {
    
    $page = $_GET['page'];
} else { 
    
    $page = 1;
}

function select_boxers_page($page){
    $num = -10 + ($page * 10);
    return $num;
    
}

$num = select_boxers_page($page);
 
$query = "SELECT * FROM $usertable LIMIT $num,10";
$query2 = "SELECT * FROM $usertable";
$result = mysqli_query($db, $query);
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
<?php include("content_boxers.php"); ?>

<?php include("footer.php"); ?>
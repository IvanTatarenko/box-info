<?php

$id = $_GET['id'];
$db = mysqli_connect($hostname,$username, $password, $dbname);

mysqli_set_charset($db, "utf8");


$query = "SELECT * FROM $usertable WHERE id = $id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);


include("header.php");
include("left_box.php"); 
?>

<main>

<article>

<section class = "boxer_page">
<div class = "boxer_page_bloc_left">
        <img class = "boxer_img" src="img/img_boxer_null.jpg" alt="альтернативный текст" height="200" width="200">
    </div>
    <div class = "boxer_page_bloc_left">
        <h2><a class = "no_emphasis" href="<?php  echo "boxer.php?id=".($row["id"]);  ?>"><?= $row["name_ua"] ?><br><small><?= $row["name_usa"] ?></small></a></h2>
        
        <?= $row["win"] ?> / <?= $row["loss"] ?> / <?= $row["draw"] ?> / KO <?= $row["ko"] ?>
        
    </div> 
    
    <div class = "boxer_page_bloc_info">
    Початок професійної карєри <?= $row["beg_prof_car"] ?>
    <br>Народження <?= $row["birthday"] ?>
    <br>Років <?= $date ?>
    <br>Зріст <?= $row["height"] ?> см
    <br>Розмах рук <?= $row["reach"] ?> см
    </div>
    
    
    <br>
    <br>
    <br>
    
</section>




        
    




</article>

</main>





<?php include("right_box.php"); ?>
<?php include("footer.php"); ?>
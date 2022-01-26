

<main>
<h1>Список боксерів</h1>
<article>


<?php while($row = mysqli_fetch_array($result)): $date = date('Y-m-d'); $date = $date - $row["birthday"] ?> 
<section class = "boxer_list" >
    <div class = "boxer_list_1">
        <div class = "boxer_list_11">
            <h2><a class = "no_emphasis" href="<?php  echo "boxer.php?id=".($row["id"]);  ?>"><?= $row["name_ua"] ?><br><small><?= $row["name_usa"] ?></small></a></h2>
        </div>
        <div>
            <?= $row["win"] ?> / <?= $row["loss"] ?> / <?= $row["draw"] ?> / KO <?= $row["ko"] ?>
            <br>Початок професійної карєри <?= $row["beg_prof_car"] ?>
            <br>Народження <?= $row["birthday"] ?>
            <br>Років <?= $date ?>
            <br>Зріст <?= $row["height"] ?> см
            <br>Розмах рук <?= $row["reach"] ?> см
        </div>
    </div>
    <div class = "boxer_list_2">
        <div class = "boxer_list_21">
        </div>
        <div>
            <h3>Останні бої</h3>
            10,50,2015 іваівола іваіваіва<br>
            10,50,2015 іваівола іваіваіва<br>
            10,50,2015 іваівола іваіваіва
        </div>
    </div>
    <div class = "boxer_list_3">
        <img class = "boxer_img" src="img/img_boxer_null.jpg" alt="альтернативный текст" height="200" width="200">
    </div>
</section>
<br>










        
    
<?php endwhile ?>
<nav>
    <div class = "navigation_boxers_page">
        <?php if ($page != 1): ?><a class = "nav_left" href="<?php  echo "?page=".($page - 1);  ?>">Попередня сторінка</a><?php endif ?>
        <?php if ($page == 1): ?><a class = "nav_left" href="">1</a><?php endif ?>
        <?php if ($page != 1): ?><a class = "nav_left" href="<?php  echo "?page=1" ?>">1 &nbsp;&nbsp;&nbsp;...</a><?php endif ?>
        <?php if ($page == 1): ?><a class = "nav_left" href="<?php  echo "?page=2" ?>">2</a><?php endif ?>
        <?php if ($page == 1): ?><a class = "nav_left" href="<?php  echo "?page=3" ?>">3</a><?php endif ?>
        <?php if ($page != 1): if ($page != $last_page): if ($page != 2): ?><a class = "nav_left" href="<?php  echo "?page=".($page - 1);  ?>"><?php  echo $page - 1;  ?></a><?php endif ?><?php endif ?><?php endif ?>
        <?php if ($page != 1): if ($page != $last_page): ?><a class = "nav_left" href=""><?php  echo $page;  ?></a><?php endif ?><?php endif ?>
        <?php if ($page != 1): if ($page != $last_page): if ($page != ($last_page - 1)): ?><a class = "nav_left" href="<?php  echo "?page=".($page + 1);  ?>"><?php  echo $page + 1;  ?></a><?php endif ?><?php endif ?><?php endif ?>
        <?php if ($page == $last_page): ?><a class = "nav_left" href="<?php  echo "?page=".($last_page - 2);  ?>"><?php  echo $last_page - 2;  ?></a><?php endif ?>
        <?php if ($page == $last_page): ?><a class = "nav_left" href="<?php  echo "?page=".($last_page - 1);  ?>"><?php  echo $last_page - 1;  ?></a><?php endif ?>
        <?php if ($page == $last_page): ?><a class = "nav_left" href="<?php  echo "?page=".($last_page);  ?>"><?php  echo $last_page;  ?></a><?php endif ?>
        <?php if ($page != $last_page): ?><a class = "nav_left" href="<?php  echo "?page=".($last_page);  ?>">...&nbsp;&nbsp;&nbsp; <?php  echo $last_page;  ?></a><?php endif ?>
        <?php if ($last_page > $page): ?><a class = "nav_rght" href="<?php  echo "?page=".($page + 1);  ?>">Наступна сторінка</a><?php endif ?>
    </div>
</nav>


</article>

</main>

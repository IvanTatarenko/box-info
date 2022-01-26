<main>
<h1>Список боїв</h1>
<article>


<?php while($row = mysqli_fetch_array($result)): $date = date('Y-m-d'); $date = $date - $row["birthday"] ?> 
<section class = "fight_list" >
    <div class = "fight_list_1">
        <div>
            <h2><a class = "no_emphasis" href="<?php  echo "boxer.php?name=".($row["boxer1"]);  ?>"><?= $row["boxer1"] ?></a></h2>
        </div>
        <div>
            <img class = "boxer_img" src="img/img_boxer_null.jpg" alt="альтернативный текст" height="200" width="200">
        </div>
    </div>
    <div class = "fight_list_2">
        <div>
            <?php if ($row["who_win"] != "нічия"): ?><h3 class = "grey_text">Переможець <br><?= $row["who_win"] ?></h3><?php endif ?>
            <?php if ($row["who_win"] == "нічия"): ?><h3 class = "grey_text">Нічия</h3><br><?php endif ?>
        </div>
        <div class = "text_center_vertical">
        <big><big><?= $row["type_win"] ?></big></big><br>
        <big><?= $row["rounds_win"] ?> / <?= $row["rounds"] ?></big> раундів<br>
        Вагова категорія: <?= $row["weight_category"] ?><br>
        Місце проведення: <?= $row["country_venue"] ?> <?= $row["venue"] ?><br>
        Дата: <?= $row["date"] ?>
        </div>
    </div>
    <div class = "fight_list_3">
        <div>
            <h2><a class = "no_emphasis" href="<?php  echo "boxer.php?name=".($row["boxer2"]);  ?>"><?= $row["boxer2"] ?></a></h2>
        </div>
        <div>
            <img class = "boxer_img" src="img/img_boxer_null.jpg" alt="альтернативный текст" height="200" width="200">
        </div>
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
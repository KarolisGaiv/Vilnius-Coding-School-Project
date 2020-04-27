<?php include "header.php" ?>



<!-- Čia vienos naujienos puslapio vidinė dalis -->

<nav class="light-green">
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="index.php" class="breadcrumb">Home</a>
            <a href="news.php" class="breadcrumb">News</a>
            <a href="singleentry.php" class="breadcrumb">Single entry</a>
        </div>
    </div>
</nav>

<div class="single-entry container">

    <?php

    $title1 = "Antraste 1";
    $picture1 = "https://picsum.photos/seed/1/500/300";
    $name1 = "Straipsnis 1";
    $text1 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
    if (isset($_GET["n"])) {
        $news = $_GET["n"];
        if ($news == 1) {
            $title1 = "Antraste 1";
            $picture1 = "https://picsum.photos/seed/1/500/300";
            $name1 = "Straipsnis 1";
            $text1 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";

            $title2 = "Antraste 2";
            $picture2 = "https://picsum.photos/seed/2/500/300";
            $name2 = "Straipsnis 2";
            $text2 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";
            $link2 = 2;

            $title3 = "Antraste 3";
            $picture3 = "https://picsum.photos/seed/3/500/300";
            $name3 = "Straipsnis 3";
            $text3 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";
            $link3 = 3;
        } else if ($news == 2) {
            $title1 = "Antraste 2";
            $picture1 = "https://picsum.photos/seed/2/500/300";
            $name1 = "Straipsnis 2";
            $text1 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";

            $title2 = "Antraste 1";
            $picture2 = "https://picsum.photos/seed/1/500/300";
            $name2 = "Straipsnis 1";
            $text2 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
            $link2 = 1;

            $title3 = "Antraste 3";
            $picture3 = "https://picsum.photos/seed/3/500/300";
            $name3 = "Straipsnis 3";
            $text3 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";
            $link3 = 3;
        } else if ($news == 3) {
            $title1 = "Antraste 3";
            $picture1 = "https://picsum.photos/seed/3/500/300";
            $name1 = "Straipsnis 3";
            $text1 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";

            $title2 = "Antraste 2";
            $picture2 = "https://picsum.photos/seed/2/500/300";
            $name2 = "Straipsnis 2";
            $text2 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";
            $link2 = 2;

            $title3 = "Antraste 1";
            $picture3 = "https://picsum.photos/seed/1/500/300";
            $name3 = "Straipsnis 1";
            $text3 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
            $link3 = 1;
        }
    }


    ?>

    <h2 class="center-align"><?php echo $title1; ?></h2>

    <div class="main-news">
        <img src=<?php echo $picture1; ?> alt="">
        <h3><?php echo $name1; ?></h3>
        <p><?php echo $text1; ?></p>
    </div>

    <div class="row news">
        <div class="col s4 offset-2 news-small">
            <div class="img-div">
                <img class="article-photo" src=<?php echo $picture2; ?> alt="">
            </div>
            <div class="news-inside">
                <h3><?php echo $name2; ?></h3>
                <p class="truncate"><?php echo $text2; ?></p>
                <a href="singleentry.php?n=<?php echo ($link2); ?>">Read more...</a>
            </div>
        </div>

        <div class="col s4 offset-2 news-small">
            <div class="img-div">
                <img class="article-photo" src=<?php echo $picture3; ?> alt="">
            </div>
            <div class="news-inside">
                <h3><?php echo $name3; ?></h3>
                <p class="truncate"><?php echo $text3; ?></p>
                <a href="singleentry.php?n=<?php echo ($link3)?> ">Read more...</a>
            </div>
        </div>
    </div>
</div>





<?php include "footer.php" ?>
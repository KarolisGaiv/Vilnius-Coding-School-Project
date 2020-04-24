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

    $antraste1 = "Antraste 1";
    $nuotrauka1 = "https://picsum.photos/seed/1/500/300";
    $pavadinimas1 = "Straipsnis 1";
    $tekstas1 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
    if (isset($_GET["n"])) {
        $naujiena = $_GET["n"];
        if ($naujiena == 1) {
            $antraste1 = "Antraste 1";
            $nuotrauka1 = "https://picsum.photos/seed/1/500/300";
            $pavadinimas1 = "Straipsnis 1";
            $tekstas1 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";

            $antraste2 = "Antraste 2";
            $nuotrauka2 = "https://picsum.photos/seed/2/500/300";
            $pavadinimas2 = "Straipsnis 2";
            $tekstas2 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";
            $nuoroda2 = 2;

            $antraste3 = "Antraste 3";
            $nuotrauka3 = "https://picsum.photos/seed/3/500/300";
            $pavadinimas3 = "Straipsnis 3";
            $tekstas3 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";
            $nuoroda3 = 3;
        } else if ($naujiena == 2) {
            $antraste1 = "Antraste 2";
            $nuotrauka1 = "https://picsum.photos/seed/2/500/300";
            $pavadinimas1 = "Straipsnis 2";
            $tekstas1 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";

            $antraste2 = "Antraste 1";
            $nuotrauka2 = "https://picsum.photos/seed/1/500/300";
            $pavadinimas2 = "Straipsnis 1";
            $tekstas2 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
            $nuoroda2 = 1;

            $antraste3 = "Antraste 3";
            $nuotrauka3 = "https://picsum.photos/seed/3/500/300";
            $pavadinimas3 = "Straipsnis 3";
            $tekstas3 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";
            $nuoroda3 = 3;
        } else if ($naujiena == 3) {
            $antraste1 = "Antraste 3";
            $nuotrauka1 = "https://picsum.photos/seed/3/500/300";
            $pavadinimas1 = "Straipsnis 3";
            $tekstas1 = "Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3. Tekstas 3.";

            $antraste2 = "Antraste 2";
            $nuotrauka2 = "https://picsum.photos/seed/2/500/300";
            $pavadinimas2 = "Straipsnis 2";
            $tekstas2 = "Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2. Tekstas 2.";
            $nuoroda2 = 2;

            $antraste3 = "Antraste 1";
            $nuotrauka3 = "https://picsum.photos/seed/1/500/300";
            $pavadinimas3 = "Straipsnis 1";
            $tekstas3 = "Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1. Tekstas 1.";
            $nuoroda3 = 1;
        }
    }


    ?>

    <h2 class="center-align"><?php echo $antraste1; ?></h2>

    <div class="main-news">
        <img src=<?php echo $nuotrauka1; ?> alt="">
        <h3><?php echo $pavadinimas1; ?></h3>
        <p><?php echo $tekstas1; ?></p>
    </div>

    <div class="row news">
        <div class="col s4 offset-2 news-small">
            <div class="img-div">
                <img class="article-photo" src=<?php echo $nuotrauka2; ?> alt="">
            </div>
            <div class="news-inside">
                <h3><?php echo $pavadinimas2; ?></h3>
                <p class="truncate"><?php echo $tekstas2; ?></p>
                <a href="singleentry.php?n=<?php echo ($nuoroda2); ?>">Read more...</a>
            </div>
        </div>

        <div class="col s4 offset-2 news-small">
            <div class="img-div">
                <img class="article-photo" src=<?php echo $nuotrauka3; ?> alt="">
            </div>
            <div class="news-inside">
                <h3><?php echo $pavadinimas3; ?></h3>
                <p class="truncate"><?php echo $tekstas3; ?></p>
                <a href="singleentry.php?n=<?php echo ($nuoroda3)?> ">Read more...</a>
            </div>
        </div>
    </div>
</div>





<?php include "footer.php" ?>
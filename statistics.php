<?php include "header.php" ?>

<nav class="light-green">
    <div class="nav-wrapper">
        <a href="index.php" class="breadcrumb">Home</a>
        <a href="statistics.php" class="breadcrumb">Statistics</a>
    </div>
</nav>
<!-- Čia papildomo puslapio vidinė dalis -->

<ul class="collection with-header container">
    <li class="collection-header">
        <h4>Webpage guests statistics</h4>
    </li>
    <li class="collection-item">
        <div class="row person-block">
            <div class="col l4 m6 s12 person-block-img">
                <img class="responsive-img materialboxed" src="https://www.pngitem.com/pimgs/m/21-214425_canon-information-document-transparent-confused-person-png-png.png" alt="">
            </div>
            <div class="col l8 m12 s12 person-block-text">
                <p class="news-block-article">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero nam. Cum recusandae ex officia atque dignissimos. Incidunt tenetur facere ut repellendus nulla aperiam deleniti porro deserunt nesciunt earum? Hic. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero nam. Cum recusandae ex officia atque dignissimos. Incidunt tenetur facere ut repellendus nulla aperiam deleniti porro deserunt nesciunt earum? Hic.
                </p>
            </div>
        </div>
    </li>
</ul>

<div class="row">
    <div class="col s4">
        <canvas id="myChartMen"></canvas>
    </div>
    <div class="col s4">
        <canvas id="myChartAge"></canvas>
    </div>
    <div class="col s4">
        <canvas id="myChartInterests"></canvas>
    </div>
</div>

<div class="row container">
    <div class="col s6">
        <canvas id="myChartBarsMen"></canvas>
    </div>
    <div class="col s6">
        <canvas id="myChartBarsAge"></canvas>
    </div>
</div>


<?php include "footer.php" ?>
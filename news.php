<?php include "header.php" ?>

<nav class="light-green">
  <div class="nav-wrapper">
    <a href="index.php" class="breadcrumb">Home</a>
    <a href="news.php" class="breadcrumb">News</a>
  </div>
</nav>

<!-- Čia pagrindinio puslapio vidinė dalis -->

<ul class="container collection with-header">
  <li class="collection-header">
    <h2>First News</h2>
  </li>
  <li class="collection-item">
    <div class=" row news-block">
      <div class="col l3 m6 s12 news-block-img">
        <img class="responsive-img" src="https://picsum.photos/500" alt="">
      </div>
      <div class="col l7 m12 s12 news-block-text">
        <h5>First interesting article</h5>
        <p class="news-block-article">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero nam. Cum recusandae ex officia atque dignissimos. Incidunt tenetur facere ut repellendus nulla aperiam deleniti porro deserunt nesciunt earum? Hic.
        </p>
      </div>
      <div class="col l2 m6 s12 news-block-button">
        <a href="singleentry.php?n=1" class="button-modify waves-effect waves-light btn-large"><i class="material-icons left"></i>_____ READ _____</a>
      </div>
    </div>
  </li>

  <li class="collection-item">
    <div class=" row news-block">
      <div class="col l3 m6 s12 news-block-img">
        <img class="responsive-img" src="https://picsum.photos/800" alt="">
      </div>
      <div class="col l7 m12 s12 news-block-text">
        <h5>Second fantastic article</h5>
        <p class="news-block-article">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero nam. Cum recusandae ex officia atque dignissimos. Incidunt tenetur facere ut repellendus nulla aperiam deleniti porro deserunt nesciunt earum? Hic.
        </p>
      </div>
      <div class="col l2 m6 s12 news-block-button">
        <a href="singleentry.php?n=2" class="button-modify waves-effect waves-light btn-large"><i class="material-icons left"></i>_____ READ _____</a>
      </div>
    </div>
  </li>

  <li class="collection-item">
    <div class=" row news-block">
      <div class="col l3 m6 s12 news-block-img">
        <img class="responsive-img" src="https://picsum.photos/200" alt="">
      </div>
      <div class="col l7 m12 s12 news-block-text">
        <h5>Third impressive article</h5>
        <p class="news-block-article">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero nam. Cum recusandae ex officia atque dignissimos. Incidunt tenetur facere ut repellendus nulla aperiam deleniti porro deserunt nesciunt earum? Hic.
        </p>
      </div>
      <div class="col l2 m6 s12 news-block-button">
        <a href="singleentry.php?n=3" class="button-modify waves-effect waves-light btn-large"><i class="material-icons left"></i>_____ READ _____</a>
      </div>
    </div>
  </li>


</ul>


<?php include "footer.php" ?>
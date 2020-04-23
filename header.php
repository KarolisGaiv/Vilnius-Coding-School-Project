<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles/style.css">


    <title>3 grupės projektas</title>
</head>

<body>

    <!-- Čia pasikartojanti visuose puslapiuose viršutinė dalis -->

    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Karolis</a></li>
        <li><a href="#!">Romanas</a></li>
        <li><a href="#!">Vaidotas</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo">3 grupės projektas</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="singleentry.php">Single entry</a></li>
                <!-- Dropdown Trigger - kol kas neveikia, nežinau kodėl, bandysiu išsiaiškint -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">About us<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>

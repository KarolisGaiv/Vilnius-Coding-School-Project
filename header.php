<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles/style.css">

    <!-- Sito reikia grafikams -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>3 grupės projektas</title>
</head>

<body>
    <main>

        <!-- Čia pasikartojanti visuose puslapiuose viršutinė dalis -->

        <ul id="dropdown1" class="dropdown-content">
            <li><a target="_top" href="about.php#karolis">Karolis</a></li>
            <li><a target="_top" href="about.php#romanas">Romanas</a></li>
            <li><a target="_top" href="about.php#vaidotas">Vaidotas</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Karolis</a></li>
            <li><a href="#!">Romanas</a></li>
            <li><a href="#!">Vaidotas</a></li>
        </ul>

        <nav>
            <div class="nav-wrapper light-green">
                <a href="#!" class="brand-logo">3 grupės projektas</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li><a href="singleentry.php?n=1">Single entry</a></li>
                    <li><a href="person.php">Statistics</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">About us<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav light-green" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="singleentry.php">Single entry</a></li>
            <li><a href="person.php">Statistics</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">About us<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
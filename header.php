<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../KOdile/styles/header.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="../../KOdile">Accueil</a></li>
                    <li><a href="../../KOdile/pages/task.php">Tâches</a></li>
                    <?php
                    if (isset($_SESSION["action"]))
                        echo "<li><a href='../../KOdile/php/deconnexion.php'>Déconnxion</a></li>"
                    ?>
                </ul>
                <h1 class="logo">Gestionnaires de Tâches</h1>
            </div>
        </nav>
        <script src="../../KOdile/scripts/task.js"></script>
    </header>
</body>

</html>
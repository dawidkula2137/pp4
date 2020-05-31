<?php
if(isset($_GET['ID'])){
    require("connect.php");
    $ID = mysqli_real_escape_string($con, $_GET['ID']);

    $sql = "SELECT * FROM ksiazka WHERE id_ksiazki = '$ID'";
    $result = $con->query($sql);
    $row = mysqli_fetch_array($result);

    $sql2 = "SELECT * FROM recenzja WHERE id_ksiazki = '$ID'";
    $result2 = $con->query($sql2);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>e-Books</title>
    <meta content="width=device-width, initial-scale=1.0" name=viewport">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <a class="header-brand" href="index.html">e-Books</a>
    <nav>
        <ul>
            <li><a href="Trending.php">Trending</a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a href="Search.html">Search</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
        <a class="header-Books" href="addBook.php">Add Book</a>
        <a class="header-Books" href="addReview.php">Add Review</a>
    </nav>
</header>
<main>
    <div class="wrapper">
        <h1><?php echo $row['tytul'] ?></h1>
        <h1><?php echo $row['autor'] ?></h1>
        <h5><?php
            while($row2 = mysqli_fetch_array($result2)){
                echo $row2['tresc']."</br>";
            }
            ?></h5>
    </div>
</main>
<div class="wrapper">
    <footer>
        <ul class="footer-links-main">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Trending</a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">About us</a></li>
        </ul>
        <ul class="footer-links-Books">
            <li><a><p>Books Reviews</p></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </footer>
</div>
</body>
</html>

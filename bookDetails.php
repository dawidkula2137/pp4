<?php
if(isset($_GET['ID'])){
    require("connect.php");
    $ID = mysqli_real_escape_string($con, $_GET['ID']);

    $sql = "SELECT * FROM ksiazka WHERE id_ksiazki = '$ID'";
    $result = $con->query($sql);
    $row = mysqli_fetch_array($result);

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
            <li><a href="Trending.html">Trending</a></li>
            <li><a href="Books.php">Newest</a></li>
            <li><a href="Search.html">Search</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
        <a class="header-newest" href="addBook.php">Add Book</a>
        <a class="header-newest" href="addReview.html">Add Review</a>
    </nav>
</header>
<main>
    <div class="wrapper">
        <h1><?php echo $row['tytul'] ?></h1>
        <h1><?php echo $row['autor'] ?></h1>
        <form action="addReview.html" method="post">
            <input type="button" value="dodaj post">
        </form>
    </div>
</main>
<div class="wrapper">
    <footer>
        <ul class="footer-links-main">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Trending</a></li>
            <li><a href="Books.php">Newest</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">About us</a></li>
        </ul>
        <ul class="footer-links-newest">
            <li><a><p>Newest Reviews</p></a></li>
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
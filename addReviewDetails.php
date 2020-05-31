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

        <?php
        echo "<form action='dbReviewAdd.php?ID={$ID}' method='post'>"
        ?>
            <textarea name="content" rows="5" cols="40"></textarea>
            <input type="text" name="rauthor">
            <input type="submit" value="dodaj post">
            <select name="mark">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </form>
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

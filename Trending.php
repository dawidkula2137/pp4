<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>e-Books</title>
    <meta content="width=device-width, initial-scale=1.0" name=viewport">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        hover1 :hover {
            background-color: #e3e3e3;
        }
        hover2 :hover {
            color: #bdbdbd;
        }
        hover3 :hover {
            color: #a0a0a0;
        }
        hover4 :hover {
            background-color: #e3e3e3;
        }
    </style>
</head>
<body>
<header>
    <a class="header-brand" href="index.html">e-Books</a>
    <nav>
        <ul>
            <li><a href="Trending.php">Trending</a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a href="Search.html">Search</a></li>
            <li><a href="about.html">About us</a></li>
        </ul>
        <a class="header-Books" href="addBook.php">Add Book</a>
        <a class="header-Books" href="addReview.php">Add Review</a>
    </nav>
</header>
<main>
    <section class="posts-links">
        <div class="wrapper">
            <h2>Books</h2>

                <?php
                require('./connect.php');

                $sql = "select ksiazka.id_ksiazki, ksiazka.tytul, (SELECT AVG(recenzja.ocena) 
                        from recenzja where recenzja.id_ksiazki = ksiazka.id_ksiazki) AS AvgScore FROM ksiazka ORDER BY AvgScore DESC ";
                $result = $con->query($sql);

                while($row = mysqli_fetch_array($result)){

                    echo "<a href='bookDetails.php?ID={$row['id_ksiazki']}'>";
                    echo "  <div class='posts-link'>";
                    echo "<p>".$row['tytul']."</p>";
                    echo "  </div>";
                    echo "</a>";

                }

                ?>

        </div>
    </section>
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
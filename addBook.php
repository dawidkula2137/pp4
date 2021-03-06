<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
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
        <form action="dbBookAdd.php" method="post">
            <div>
                <label>
                    <input name="title" type="text" placeholder="tytuł">
                </label>
                <label>
                    <input name="author" type="text" placeholder="autor">
                </label>
                <label>
                    <select name="genre">

                        <?php

                        require('./connect.php');

                        $sql = "SELECT nazwa FROM gatunki";
                        $result = $con->query($sql);

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='{$row['nazwa']}'>" . $row['nazwa'] . "</option>";
                        }

                        ?>
                    </select>
                </label>
                <label>
                    <input type="submit" value="Add">
                </label>
                <label>
                    <input type="reset" value="Clear all">
                </label>
            </div>
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
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
            <h2>Search for book</h2>
            <input type="text" value="" autocomplete="off"
                   name="searchBar" id="searchBar" placeholder="Search for book"
                   class="searchWrapper" onkeyup="searchFunction()"/>
            <script>
                function searchFunction(){
                    var input,filter,ul,li,p,i;
                    input = document.getElementById("searchBar");
                    filter =input.value.toUpperCase();
                    ul = document.getElementById("list");
                    li = ul.getElementsByTagName("li");

                    for(i=0; i< li.length; i++){
                        p = li[i].getElementsByTagName('p')[0];
                        if(p.innerHTML.toUpperCase().indexOf(filter) > -1){
                            li[i].style.display = "";
                        }else{
                            li[i].style.display = "none";
                        }
                    }
                }
            </script>
            <hover4>
                <ul id="list" class="wrapper">
                <?php

                require('./connect.php');

                $sql = "SELECT * FROM ksiazka";
                $result = $con->query($sql);

                while($row = mysqli_fetch_array($result)){
                    echo "<li>";
                    echo "<a href='bookDetails.php?ID={$row['id_ksiazki']}'>";
                    echo "  <div class='posts-link'>";
                    echo "<p id='title'>".$row['tytul']."</p>";
                    echo "  </div>";
                    echo "</a>";
                    echo "</li>";

                }
                ?>
                </ul>
            </hover4>
        </div>
    </section>
</main>
<div class="wrapper">
    <footer>
        <ul class="footer-links-main">
            <li><a href="index.html">Home</a></li>
            <li><a href="Trending.php">Trending</a></li>
            <li><a href="Books.php">Books</a></li>
            <li><a href="Search.php">Search</a></li>
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
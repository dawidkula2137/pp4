<?php
    require('./connect.php');

    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];

    $sql2 = "SELECT id_gatunek FROM gatunki WHERE nazwa = ".$genre;
    $result2 = $con->query($sql2);
    $genreName = mysqli_fetch_array($result2);

    echo $genreName;


    $sql = "INSERT INTO ksiazka(tytul,autor,id_gatunek) VALUES('$title', '$author','1')";
    $result = $con->query($sql);

    if(!$result){
        echo "blad dodawania";
    }

?>





















































































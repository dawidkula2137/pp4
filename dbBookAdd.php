<?php
    include 'connect.php';

    $db_host = "localhost";
    $db_user = 'root';
    $db_pass = "";
    $db_name = "id13880151_projektpp4";

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['value'];

    $sql = "INSERT INTO ksiazka(tytul,autor,id_gatunek) VALUES('$title', '$author','1')";

    $result = $con->query($sql);

    if(!$result){
        echo "blad dodawania";
    }

?>





















































































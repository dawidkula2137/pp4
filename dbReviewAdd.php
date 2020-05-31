<?php
    include 'connect.php';

    $db_host = "localhost";
    $db_user = 'root';
    $db_pass = "";
    $db_name = "id13880151_projektpp4";

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $content = $_POST['content'];
    $rauthor = $_POST['rauthor'];
    $score = $_POST['score'];


    $sql = "INSERT INTO recenzja(tresc,recenzent,ocena,id_ksiazki) VALUES('$content', '$rauthor','$score','1')";

    $result = $con->query($sql);

    if (!$result) {
        echo "blad dodawania";
}



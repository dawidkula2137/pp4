<?php
    require('./connect.php');

    $content = $_POST['content'];
    $rauthor = $_POST['rauthor'];
    $score = $_POST['score'];

    $sql2 = "SELECT * FROM ksiazki";

    $sql = "INSERT INTO recenzja(tresc,recenzent,ocena,id_ksiazki) VALUES('$content', '$rauthor','$score','1')";

    $result = $con->query($sql);

    if (!$result) {
        echo "blad dodawania";
}



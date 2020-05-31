<?php
    require('./connect.php');
    $ID = mysqli_real_escape_string($con, $_GET['ID']);
    $content = $_POST['content'];
    $rauthor = $_POST['rauthor'];
    $score = $_POST['mark'];

    $sql2 = "SELECT * FROM ksiazki";

    $sql = "INSERT INTO recenzja(tresc,recenzent,ocena,id_ksiazki) VALUES('$content', '$rauthor','$score','$ID')";

    $result = $con->query($sql);

    if (!$result) {
        echo "blad dodawania";
}



<?php
    include 'connetion.php';
    $comment = "SELECT * FROM `comments`";
    // while ($comment__arr = mysqli_fetch_assoc($comment)){
    //     echo '1';
    // }
    $result = $induction->query($comment);
        foreach ($result as $arr) {
        echo $arr['id'];
    }
?>
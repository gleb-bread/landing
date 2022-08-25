<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $induction = mysqli_connect("localhost","root","", "shop_land") or die("Пиздец");
?>
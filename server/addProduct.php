<?php 
    include 'connetion.php';
    $product = mysqli_query($induction, "SELECT * FROM `product_shop`");

    function addProduct($product_id,$number){
        if ($product_bd['id'] == $product_id){
            $basket = mysqli_query($induction, " INSERT INTO `basket` (`id_prouduct`,`number_product`)) VALUES ($id,$number)");
        }
    } 
    if (isset($_POST_)) {
        echo '1';
        $JSONData = json_decode($_POST, true);
        $id = $JSONData['id'];
        $value = $JSONData['value'];
        addProduct($id,$value);
    } 
?>

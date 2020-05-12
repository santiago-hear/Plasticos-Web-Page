<?php
    include("connection.php");

    $name= isset($_POST['nameproduct']) ? $_POST["nameproduct"] : 'NULL' ;
    $categories = isset($_POST['category']) ? $_POST["category"] : [];
    $description = isset($_POST['description']) ? $_POST["description"] : 'NULL';
    $price = isset($_POST['price']) ? $_POST["price"] : 'NULL';
    $amount = isset($_POST['amount']) ? $_POST["amount"] : 'NULL';
    $brand = isset($_POST['brand']) ? $_POST["brand"] : 'NULL'; 
    $material = isset($_POST['material']) ? $_POST["material"] : 'NULL';

    $backdir = $_SERVER["HTTP_REFERER"];

    $name = $name != '' ? "'$name'" : 'NULL' ;
    $description = $description != '' ? "'$description'" : 'NULL' ;
    $price = $price != '' ? "$price" : 'NULL' ;
    $amount = $amount != '' ? "'$amount'" : 'NULL' ;
    $brand = $brand != '' ? "'$brand'" : 'NULL' ;
    $material = $material != '' ? "'$material'" : 'NULL' ;
    
    $insert_product = "
        INSERT INTO product SET 
            ProductName = $name, 
            Description = $description,
            Price = $price,
            Amount = $amount,
            Brands = $brand,
            Material = $material";

    var_dump($insert_product);

    echo mysqli_query($database,$insert_product);

    for ($i=0; $i < sizeof($categories); $i++) 
    { 
        $insert_rel = "
        INSERT INTO productxcategory SET
            ProductId = (SELECT MAX(ProductId) FROM  product),
            CategoryId = $categories[$i]";
        echo mysqli_query($database,$insert_rel);
    }
    
    header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=ok"); 
?>
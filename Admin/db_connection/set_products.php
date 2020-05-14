<?php
    include("connection.php");

    $name= isset($_POST['nameproduct']) ? $_POST["nameproduct"] : 'NULL' ;
    $categories = isset($_POST['category']) ? $_POST["category"] : [];
    $description = isset($_POST['description']) ? $_POST["description"] : 'NULL';
    $price = isset($_POST['price']) ? $_POST["price"] : 'NULL';
    $amount = isset($_POST['amount']) ? $_POST["amount"] : 'NULL';
    $brand = isset($_POST['brand']) ? $_POST["brand"] : 'NULL'; 
    $material = isset($_POST['material']) ? $_POST["material"] : 'NULL';

    $path = isset($_FILES['productimage']) ? str_replace("\\","/",$_FILES['productimage']['tmp_name']) : '';

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
            Material = $material,
            Image = LOAD_FILE('$path')";

    $okp = mysqli_query($database,$insert_product);

    if ($okp):
        for ($i=0; $i < sizeof($categories); $i++) 
        { 
            $insert_rel = "
            INSERT INTO productxcategory SET
                ProductId = (SELECT MAX(ProductId) FROM  product),
                CategoryId = $categories[$i]";
            $okrel = mysqli_query($database,$insert_rel);
        }
    else:
        $okp = false;
    endif;

    if ($okp):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=okadd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=erroradd");
    endif; 
?>
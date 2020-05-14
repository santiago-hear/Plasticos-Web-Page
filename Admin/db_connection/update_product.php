<?php
    include("connection.php");

    $pid = isset ($_POST['pid']) ? $_POST['pid'] : 'NULL';
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

    if ($path == ''):
        $update_product = "
            UPDATE product SET 
                ProductName = $name, 
                Description = $description,
                Price = $price,
                Amount = $amount,
                Brands = $brand,
                Material = $material
            WHERE ProductId = $pid
        ";
    else:
        $update_product = "
            UPDATE product SET 
                ProductName = $name, 
                Description = $description,
                Price = $price,
                Amount = $amount,
                Brands = $brand,
                Material = $material,
                Image = LOAD_FILE('$path')
            WHERE ProductId = $pid
        ";
    endif;
    
    $ok = mysqli_query($database,$update_product);

    if ($ok):
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=okupd");
    else:
        header("Location: http://localhost/Plasticos_la17/Admin/control_panel.php?view=products&msg=errorupd");
    endif; 
?>
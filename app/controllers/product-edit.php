<?php

$errors = [];

$id = $_GET['id'] ?? null;
$product = new Product();
$row = $product->first(['id'=>$id]);

if($_SERVER['REQUEST_METHOD'] == "POST" && $row){

    $_POST['barcode'] = empty($_POST['barcode']) ? $product->generate_barcode() : $_POST['barcode'];

    if(!empty($_FILES['image']['name'])){
        $_POST['image'] = $_FILES['image'];
    }

    $errors = $product->validate($_POST,$row['id']);
    if(empty($errors)){

        // image upload part
        $folder = "uploads/";
        if(!file_exists($folder)){
            mkdir($folder,0777,true);
        }

        if(!empty($_POST['image'])){
            $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
            $destination = $folder . $product->generate_filename($ext);
            move_uploaded_file($_POST['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
        }

        $product->insert($_POST);
        redirect('admin&tab=products');
    }
}

require views_path('products/product-edit');
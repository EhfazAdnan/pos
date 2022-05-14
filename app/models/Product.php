<?php

class Product extends Model {

    protected $table = "products";

    protected $allowed_columns = [
        'barcode',
        'user_id',
        'description',
        'qty',
        'amount',
        'image',
        'date',
        'views',
    ];

    public function validate($data){
        $errors = [];
     
        // check description
        if(empty($data['description'])){
            $errors['description'] = "description is required";
        }else if(!preg_match('/[a-zA-Z0-9 _\-\&\(\)]+/', $data['description'])){
            $errors['description'] = "Only letters allowed in description";
        }

        // check qty
        if(empty($data['qty'])){
            $errors['qty'] = "Quantity is required";
        }else if(!preg_match('/^[0-9]+$/', $data['qty'])){
            $errors['qty'] = "Only numbers allowed in Quantity";
        }
     
        // check amount
        if(empty($data['amount'])){
           $errors['amount'] = "Amount is required";
        }else if(!preg_match('/^[0-9.]+$/', $data['amount'])){
           $errors['amount'] = "Only numbers allowed in amount";
        }

        // check image
        $max_size = 4;
        $size = $max_size * (1024 * 1024);

        if(empty($data['image'])){
            $errors['image'] = "Product image is required";
        }else if(!($data['image']['type'] == "image/jpeg" || $data['image']['type'] == "image/png")){
            $errors['image'] = "Image must be a valid JPEG or PNG";
        }else if($data['image']['error'] > 0){
            $errors['image'] = "Image failed to upload";
        }else if($data['image']['size'] > $size){
            $errors['image'] = "Image size must be lower then" . $max_size . "MB";
        }

        return $errors;
    }

    public function generate_barcode(){
        return "2222" . rand(1000, 999999999);
    }

    public function generate_filename($ext = "jpg"){
        return hash("sha1",rand(1000, 999999999))."_".rand(1000,9999).".".$ext;
    }
}
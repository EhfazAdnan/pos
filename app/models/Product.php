<?php

class User extends Model {

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
        }else if(!preg_match('/[a-zA-Z0-9 _-\&\(\)]+/', $data['description'])){
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

        return $errors;
    }

    public function generate_barcode(){
        return "2222" . rand(1000, 999999999);
    }
}
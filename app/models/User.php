<?php

class User extends Model {

    protected $table = "users";

    protected $allowed_columns = [
        'username',
        'email',
        'password',
        'role',
        'image',
        'date',
    ];

    public function validate($data){
        $errors = [];
     
        // check username
        if(empty($data['username'])){
            $errors['username'] = "Username is required";
        }else if(!preg_match('/[a-zA-Z]/', $data['username'])){
            $errors['username'] = "Only letters allowed in username";
        }
     
        // check email
        if(empty($data['email'])){
             $errors['email'] = "Email is required";
        }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
             $errors['email'] = "Email Not Valid";
        }
     
        // check password
        if(empty($data['password'])){
             $errors['password'] = "Password is required";
        }else if($data['password'] !== $data['password_retype']){
             $errors['password_retype'] = "Password do not match";
        }else if(strlen($data['password']) < 8){
             $errors['password'] = "Password must be at least 8 characters long";
        }
     
        return $errors;
    }
}
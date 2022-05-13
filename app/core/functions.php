<?php

function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function views_path($view){
    if(file_exists("../app/views/$view.view.php")){
        return "../app/views/$view.view.php";
    }else{
        echo "view '$view' not found";
    }
}

function esc($str){
    return htmlspecialchars($str);
}

function redirect($page){
    header("Location: index.php?pg=" . $page);
}

function allowed_columns($data, $table){
    if($table == 'users'){
        $columns = [
           'username',
           'email',
           'password',
           'role',
           'image',
           'date',
        ];

        foreach($data as $key => $value){
           if(!in_array($key, $columns)){
               unset($data[$key]);
           }
        }

        return $data;
    }
}

function validate($data, $table){
   $errors = [];

   if($table == 'users'){

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

   }

   return $errors;
}

function set_value($key, $default = ""){
    if(!empty($_POST[$key])){
        return $_POST[$key];
    }
    return $default;
}

function authenticate($row){
   $_SESSION['USER'] = $row;
}

function auth($column){
    if(!empty($_SESSION['USER'][$column])){
        return $_SESSION['USER'][$column];
    }
    return "Guest User";
}
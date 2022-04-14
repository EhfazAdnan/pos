<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
   $_POST['role'] = "user";
   $_POST['date'] = date("Y-m-d H:i:s");
   $query = "insert into users (username,email,password,date,role) values (:username,:email,:password,:date,:role)";
   unset($_POST['password_retype']);
   query($query,$_POST);
}

require views_path('auth/signup');
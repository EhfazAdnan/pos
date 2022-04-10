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

function db_connect(){
    $DBHOST = "localhost";
    $DBNAME = "pos_db";
    $DBUSER = "root";
    $DBPASS = "";
    $DBDRIVER = "mysql";

    try{
       $con = new PDO("mysql:host=localhost;dbname=pos_db", $DBUSER,$DBPASS);
    }catch(PDOException $e){
       echo $e->getMessage();
    }

    return $con;

}

db_connect();

function query($query, $data = array()){

}
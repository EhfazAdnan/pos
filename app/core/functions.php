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

function crop($filename, $size = 600){

    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $cropped_file = preg_replace("/\.$ext$/", "_cropped.".$ext, $filename);

    echo $cropped_file;
    return;

    imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
    imagejpeg($dst_image, $cropped_file);

    imagedestroy($dst_image);
    imagedestroy($src_image);
}
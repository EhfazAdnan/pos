<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=esc(APP_NAME); ?></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>
<body>

<?php
   $no_nav[] = "login";
?>

<?php 
if(!in_array($controller, $no_nav)) :
require views_path('partials/nav'); 
endif;
?>

<div class="container-fluid" style="min-width: 350px;">
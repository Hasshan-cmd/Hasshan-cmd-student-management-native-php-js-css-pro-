<?php
    require_once __DIR__.'/../../autoload.php';
    $id = $_GET['id'];

    $success =  Student::deleteById($id);

    if ($success) header('location:table.php');
    echo "Not Successfull";


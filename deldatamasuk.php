<?php
require_once 'conn.php';
require_once 'conn2.php';
    if(!$_GET['id']){
        include 'error.php';
        header("Location: datamasuk.php");
    }else{
        $id = $_GET['id'];

        $result = $crud->deleteForm($id);

        if($result){
            header("Location: datamasuk.php");
        }else{
            include 'error.php';
        }
    }
?>
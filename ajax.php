<?php
include "conn.php";
$connection = new Connection;

if(isset($_POST['division'])){
    $division = $_POST['division'];
    $result = $connection->getAll("SELECT DISTINCT district FROM unions WHERE division='$division'",null);
    

    $html = '<select id="district" name="district" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">Open this select menu</option>';
    foreach($result as $res){
        $district = $res['district'];
        $idd = $res['id'];
        $html .= '<option value="'.$idd.'">'.$district.'</option>';
    }
    $html .= '</select>';
    echo $html;
}

if(isset($_POST['district'])){
    $district = $_POST['district'];
    $result = $connection->getAll("SELECT DISTINCT upazila FROM unions WHERE district='$district'",null);
    

    $html = '<select id="upazila" name="upazila" class="form-select" aria-label="Default select example">
                        <option selected disabled value="">Open this select menu</option>';
    foreach($result as $res){
        $upazila = $res['upazila'];
        $idu = $res['id'];
        $html .= '<option value="'.$idu.'">'.$upazila.'</option>';
    }
    $html .= '</select>';
    echo $html;
}

?>
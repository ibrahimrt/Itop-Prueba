<?php require_once '../../modelos/Potencial.php';

    $dni = $_GET['dni'];
    $number = base64_decode($_GET['update']);
    if($number!= 0 ){
        $number = $number;
    
    }else{
        $number = '';
    }
    $fetch = new Potencial();
    $fetch->fetch($dni,$number);

?> 

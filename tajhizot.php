<?php

 $name = filter_var(trim($_POST['name']));

 $namud= filter_var(trim($_POST['namud']));
 $narh = filter_var(trim($_POST['narh']));
 $haridandarkor = filter_var(trim($_POST['haridandarkor']));
//  $tamga = filter_var(trim($_POST['tamga']));
//  $vin = filter_var(trim($_POST['vin']));
//  $tashhis = filter_var(trim($_POST['tashhis']));
//  $kismiehtieti = filter_var(trim($_POST['kismiehtieti']));
//  $narhikismiehtieti = filter_var(trim($_POST['narhikismiehtieti']));
//  $ijrokunanda = filter_var(trim($_POST['ijrokunanda']));
//  (FILTER_SANITIZE);
 

    // echo "НОМ  - ",
    //  $name ,
    // $telefone,
    // $kor,
    // $narhikor,
    // $tamga,

    // $tashhis,$kismiehtieti,$narhikismiehtieti,$ijrokunanda,

$mysql = new mysqli("localhost","root","","mushtari");
 $mysql->query("INSERT INTO`tajhizoti korhona`(`name`,`namud`,
 `narh`,`haridandarkor`)



 VALUES('$name','$namud','$narh','$haridandarkor')");



header('Location:\asosi\index.php');
$mysql->close();
?> 
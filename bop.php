<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$first_name_kana = $_POST["first_name_kana"];
$last_name_kana = $_POST["last_name_kana"];
$post_code = $_POST["post_code"];
$prefecture = $_POST["prefecture"];
$city = $_POST["city"];
$banti = $_POST["banti"];
$birth = $_POST["birth"];
$email = $_POST["email"];
$room_num = $_POST["room_num"];
$phone_num = $_POST["phone_num"];
$gender = $_POST["gender"];

//if($_POST["gender"]=='on'){
//  $gender = 'male';
//}elseif($_POST["gender"]=='off'){
//  $gender = 'female';
//}else{
//  $gender = '';
//}

$pdo = new PDO('mysql:host=localhost;dbname=dppq;charset=utf8','root','gQtWnUJErPu3');

$stmt = $pdo->prepare("INSERT INTO users (last_name, first_name, last_name_kana, first_name_kana, post_code, prefecture, city, banti,birth, room_num, phone_num, email, gender) VALUES (:last_name, :first_name, :last_name_kana, :first_name_kana, :post_code, :prefecture, :city, :banti, :birth, :room_num, :phone_num, :email, :gender)");

$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
$stmt->bindParam(':last_name_kana', $last_name_kana, PDO::PARAM_STR);
$stmt->bindParam(':first_name_kana', $first_name_kana, PDO::PARAM_STR);
$stmt->bindParam(':prefecture', $prefecture, PDO::PARAM_STR);
$stmt->bindParam(':city', $city, PDO::PARAM_STR);
$stmt->bindParam(':banti', $banti, PDO::PARAM_STR);
$stmt->bindParam(':post_code',$post_code, PDO::PARAM_STR);
$stmt->bindParam(':birth', $birth, PDO::PARAM_STR);
$stmt->bindParam(':room_num', $room_num, PDO::PARAM_STR);
$stmt->bindParam(':phone_num', $phone_num, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);


$stmt->execute();







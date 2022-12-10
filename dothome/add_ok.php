<?php
$uname = $_POST['uname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$hobby1 = $_POST['hobby1'];
$hobby2 = $_POST['hobby2'];
$hobby3 = $_POST['hobby3'];
$hobby4 = $_POST['hobby4'];
$major = $_POST['major'];
$adress = $_POST['adress'];
$memo = $_POST['memo'];
$date = $_POST['fromdate'];
$color = $_POST['color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>입력하신 데이터는 다음과 같습니다. </h3>
<div> 이름 : <?= $uname?> </div>
<div> 이메일 : <?= $email?> </div>
<div> 전화번호 : <?= $mobile?> </div>
<div> 성별 : <?= $gender?> </div>
<div> 취미 : <?= $hobby1?> <?= $hobby2?> <?= $hobby3?> <?= $hobby4?></div>
<div> 전공 : <?= $major?> </div>
<div> 주소 : <?= $adress?> </div>
<div> 메모 : <?= $memo?> </div>
<div> 생일 : <?= $date?> </div>
<div> 좋아하는 색상 : <?= $color?> </div>
</body>
</html>
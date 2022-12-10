<?php
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];
    $city = $_POST['city'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
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
    <div> 비번 : <?= $pwd?> </div>
    <div> 전화번호 : <?= $mobile?> </div>
    <div> 성별 : <?= $gender?> </div>
    <div> 취미 : <?= $hobby1?> <?= $hobby2?> <?= $hobby3?></div>
    <div> 지역 : <?= $city?> </div>
    <div> 제목 : <?= $subject?> </div>
    <div> 내용 : <?= $content?> </div>
    <div> 날짜 : <?= $date?> </div>
    <div> 색상 : <?= $color?> </div>
</body>
</html>
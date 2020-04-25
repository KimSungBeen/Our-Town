
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커뮤니티</title>
</head>
<body bgcolor="#79ABFF">
    
<?php
    $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB연결
    if(!$connect)die("연결에 실패 하였습니다.".mysqli_error());

    //쿼리문으로 데이터 불러오기
    $query = "select * from community";
    $result = mysqli_query($connect, $query);

    //데이터 출력하기
    while($data = mysqli_fetch_array($result)) {
    
    echo $data['no'].'. ';
    echo '메모: '.$data['memo'];
    echo '이름: '.$data['name'];
    echo '이메일: '.$data['mail'].'<br>';
    }
?>

</body>
</html>
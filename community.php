
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커뮤니티</title>
</head>
<body bgcolor="#79ABFF">
    
<a href="write.html"><button>글작성</button></a>
<br>
<br>
<br>
<hr size = '0.1'>

<?php
    $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB연결

    $page=$_GET['page'];

    $view_page = 5; //한 페이지에 보일 게시글의 수
    if(!$page){
        $page = 1; //페이지번호가 지정 안되었을 경우
    }
    $start = ($page - 1)*$view_page;

    $query = "select * from community";
    $result = mysqli_query($connect, $query);
    $total = mysqli_num_rows($result);

    $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB연결
    if(!$connect)die("연결에 실패 하였습니다.".mysqli_error());

    //쿼리문으로 데이터 불러오기
    $query = "select * from community order by no desc limit $start, $view_page";
    $result = mysqli_query($connect, $query);

    //데이터 출력하기
    while($data = mysqli_fetch_array($result)) {

            echo $data['no'].'. ';
            echo '&nbsp &nbsp &nbsp';
            echo '-이름: '.$data['name'];
            echo '&nbsp &nbsp &nbsp';
            echo '-이메일: '.$data['mail'];
            echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
            echo $data['date'].'<br>';
            echo '메모: '.$data['memo'];
            echo '<hr size = 0.1>';

    }
    include('./page.php');
?>

</body>
</html>
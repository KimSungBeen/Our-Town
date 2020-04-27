<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시글</title>
</head>
<style>
    body{
        margin: 20vh;
    }
</style>

<body bgcolor="#79ABFF">
    
    <?php
        $post_num = $_GET['no'];

        $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB접속

        $query = "select * from community WHERE no=$post_num"; //게시글 번호에 맞는 행의 데이터 조회
        $result = mysqli_query($connect, $query); //데이터베이스에 정보요청 후 변수에 저장

        $data = mysqli_fetch_array($result); //받아온 데이터 배열화
    ?>

    <fieldset style="height: 100vh">
        <legend><b>제목: </b><?php echo $data['title'];?></legend>
        <div style="outline: white solid 1px; float: right; "> 
            <?php 
                echo '작성자: <b>'.$data['name'].'</b>';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '이메일: '.$data['mail'];
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '작성일: '.$data['date'];
            ?>
        </div>
        <br>
        <br>
        <div style="outline: white solid 1px; height: 90vh">
            <br>
            <?php 
                echo $data['memo'];
                echo '<br>';
            ?>
        </div>
    </fieldset>
</body>
</html>
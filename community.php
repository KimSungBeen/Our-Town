<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>커뮤니티</title>
</head>

<style>
    .btn-link {
    border: none;
    outline: none;
    background: none;
    cursor: pointer;
    color: #0000EE;
    padding: 0;
    font-family: inherit;
    font-size: inherit;
    text-decoration: none;
}
.form{
    display:inline;
    margin:0px;
    padding:0px;
    left: 20%;
}

table{
    width: 100%;
    text-align: center;
}
</style>

<body bgcolor="#79ABFF">
    
<br>
<br>
<br>
<hr size = '0.1'>
    <table style="background-color: lightblue">
        <tr>
            <td width="4%">번호</td>
            <td width="50%">제목</td>
            <td width="4%">작성자</td>
            <td width="16%">이메일</td>
            <td>날짜</td>
        </tr>
    </table>
<hr size = '0.1'>

<table style="background-color: #D3D3D3; text-align: center">
<?php
    $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB연결

    $page=$_GET['page'];

    $view_page = 5; //한 페이지에 보일 게시글의 수
    if(!$page){
        $page = 1; //페이지번호가 지정 안되었을 경우
    }
    $start = ($page - 1)*$view_page; //start: 페이지의 시작 게시글 번호

    $query = "select * from community";
    $result = mysqli_query($connect, $query);
    $total = mysqli_num_rows($result); //데이터의 총 갯수

    $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //DB연결
    if(!$connect)die("연결에 실패 하였습니다.".mysqli_error());

    //쿼리문으로 데이터 불러오기
    $query = "select * from community order by no desc limit $start, $view_page";
    $result = mysqli_query($connect, $query);

    //데이터 출력하기
    while($data = mysqli_fetch_array($result)) {
?>
        
            <tr>
                <td>&nbsp;&nbsp;&nbsp;<?php echo $data['no'];?>&nbsp;</td><!--게시글 번호-->

                <td width='50%'>
                <!-- 게시글로 이동 -->
                <form action="post_community.php" method="get" class="form">
                    <input type="hidden" name="no" value="<?php echo $data['no']?>"> <!--게시글의 번호 전달-->
                    <button type="submit" class="btn-link"><?php echo $data['title'] ?></button>
                </form>
                </td>

                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['mail'];?></td>
                <td><?php echo $data['date'];?></td> <!--날짜-->
            </tr>
            
  <?php }?>
  </table>

  <a href="write.html" style="float: right; margin-top: 10px"><button>글작성</button></a>
  <br>
  
    <?php include('./page.php'); ?>
</body>
</html>
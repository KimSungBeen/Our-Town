<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body bgcolor="#79ABFF">
  <?php
  $mail = $_POST['mail'];
  $name = $_POST['name'];
  $title = $_POST['title'];
  $memo = $_POST['memo'];

  $date = date("Y년 m월 d일 h:i:sa", time());
  $ip = getenv("REMOTE_ADDR");

   $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //mysql 연결
   if (!$connect) {
     echo "연결에 실패 하였습니다.".mysqli_error();
   }

   //쿼리전송
   $query = "insert into community(mail, name, memo, date, ip, title) 
                           values('$mail', '$name', '$memo', '$date', '$ip', '$title')";

   mysqli_query($connect, $query);

   mysqli_close($connect);
  ?>

  <script>
    window. alert('정상적으로 처리 되었습니다.');
    location.href='./community.php?page=1';
  </script>
  </body>
</html>
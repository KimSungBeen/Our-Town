<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body bgcolor="#79ABFF">
  <?php
  $mail = $_POST['mail'];
  $name = $_POST['name'];
  $memo = $_POST['memo'];

  echo $date = date("YmdHis", time());
  echo "<br>";
  echo $ip=getenv("REMOTE_ADDR");

   $connect = mysqli_connect("localhost:3306", "root", "x#eYb@jHlGZErzWtKpeH", "beenDB"); //mysql 연결
   if (!$connect) {
     echo "연결에 실패 하였습니다.".mysqli_error();
   }

   //쿼리전송
   $query = "insert into community(mail, name, memo, date, ip) 
                           values('$mail', '$name', '$memo', '$date', '$ip')";

   mysqli_query($connect, $query);

   mysqli_close($connect);
  ?>
  </body>
</html>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>Our Town</title>
    <style>
        li {
            list-style-type: none;
        }

        a {
            text-decoration-line: none;
        }

        #banner {
            height: 30vh;
            width: 70%;
            margin: 0 auto;
            display: flex;
            background-color: powderblue;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
        }
        #menu {
            width: 70%;
            margin: 0 auto;
            display:flex;
            justify-content: space-between;
            margin-top: 5px;
        }
    </style>
</head>

<body bgcolor="#79ABFF">

    <div align=right>
        <?php
            echo $_POST['email'].'님 반갑습니다'.'<br>';
            // echo $_POST['name'].'님 반갑습니다';
        ?>
    </div>

        <div id="banner">
            <lu>
            <li><h1>지역 커뮤니티 사이트</h1></li>
            <li style="text-align: center"><h2>Our-Town</h2></li>
            </lu>
        </div>

    <div id="menu">
        <form action="community.php" method="GET">
            <input type="hidden" name="page" value="1"> <!--페이지 번호 전달-->
            <input type="submit" value="커뮤니티">
        </form>
        <a href="marketplace.html"><button>장터</button></a>
        <a href="news.html"><button>나눔</button></a>
        <a href="news.html"><button>뉴스</button></a>
    </div>

    

</body>

</html>
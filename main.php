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
            echo $_POST['email'].'<br>';
            echo $_POST['name'].'님 반갑습니다';
        ?>
    </div>

        <div id="banner">
            <h1>배너</h1>

        </div>

    <div id="menu">
        <a href="community.html"><button>커뮤니티</button></a>
        <a href="marketplace.html"><button>중고장터</button></a>
        <a href="news.html"><button>나눔</button></a>
        <a href="news.html"><button>뉴스</button></a>
    </div>

    

</body>

</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div align=center>
    <?php
        $PHP_SELF = &$_SERVER['PHP_SELF'];

        // 총게시물 $total
        // 한페이지에 보여지는 게시글 수 $view_page
        // ceil: 올림 함수
        // 총개시물을 한페이지에 보여줄 개시물로 나눈 후 올림처리해서 그 크기만큼 페이징 처리
        $total_page = ceil($total/$view_page);

        //페이지 그룹 구성(시작)
        if($page%10) {
            $start_page = $page - $page%10 + 1; //(ex. 1, 2, ...) 시작페이지: 1-1+1 =1    2-2+1 =1 ....
        }else {
            $start_page = $page -9; //if문의 조건이 '0' 일 때(ex. 10, 20, ...) 시작페이지:1, 11, ....
        }
        echo "<br>";

        //페이지 그룹 구성(끝)
        $last_page = $start_page + 10;
        echo "<br>";

        //이전 페이지 그룹의 마지막페이지
        $prev_group = $start_page -1;
        if($prev_group < 1) {
            $prev_group = 1;
        }

        //다음 페이지 그룹의 첫번째 페이지
        $next_group = $last_page;
        if($next_group > $total_page) {
            $next_group = $total_page;
        }

        //처음페이지로 이동
        if($page != 1) {
            echo "<b><a style='text-decoration: none;' href =$PHP_SELF?page=1>First</a> &nbsp; &nbsp;";
        }else{
            echo "<b>First &nbsp; &nbsp;";
        }

        //이전 페이지 그룹으로 이동
        if($page != 1) {
            echo "<a style='text-decoration: none;' href=$PHP_SELF?page=$prev_group> ◀ </a> &nbsp; &nbsp;";
        }

        //페이지번호 생성
        for($page_num = $start_page; $page_num < $last_page; $page_num++){
            if($page_num > $total_page) { //반복수가 전체 페이지수를 넘으면 반복문 Break
                break;
            }
            if($page_num == $page){ //현재 페이지는 bold 텍스트로 출력(클릭 비활성화)
                echo "<b> ($page_num) &nbsp; &nbsp;";
            }else{
                //그밖에 페이지 번호에 링크생성
                //PHP_SELF: 자기자신(PHP파일)에게 요청하고 응답
                echo "<a style='text-decoration: none;' href=$PHP_SELF?page=$page_num>$page_num</a> &nbsp; &nbsp;";
            }
        }

        //다음 페이지 그룹으로 이동
        if($page != $total_page){
            echo "<a style='text-decoration: none;' href=$PHP_SELF?page=$next_group> ▶ </a> &nbsp; &nbsp;";
        }

        //마지막페이지로 이동
        if($page != $total_page) {
            echo "&nbsp; &nbsp; <b><a style='text-decoration: none;' href=$PHP_SELF?page=$total_page>Last</a>";
        }else {
            echo "Last";
        }

    ?>
</div>
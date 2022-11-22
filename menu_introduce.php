<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--익스플로러,크롬 호환-->
    <title>싱어송라이터 우유</title>
    <META name=viewport content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0">
    <meta property="og:type" content="website"> <!-- OPEN GRAPH(face book,카톡 등) SNS전송시 보여질 화면설정-->
    <meta property="og:title" content="싱어송라이터 우유">
    <meta property="og:description" content="Oo.you를 소개하는 공간">
    <meta property="og:image" content="image/free_bird.jpg">
    <meta name="description" content="싱어송라이터 우유를 소개하는 공간"> <!-- 검색 최적화-->
    <meta name="keyword" content="김민지,우유,기밍지,버스킹,버스킹영상"> <!-- ★중요★ 검색했을때 첫페이지표시 키워드 두둥 -->
    <style>
        @font-face {
            font-family: 'Cafe24Ssurroundair';
            font-weight: normal;
            font-style: normal;
            src: url(https://cdn.jsdelivr.net/gh/webfontworld/cafe24/Cafe24Ssurroundair.woff2) format('woff2');
            font-display: swap;
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.otf) format('opentype');
        }

        @font-face {
            font-family: 'Noto Sans KR';
            font-style: normal;
            font-weight: 900;
            src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff2) format('woff2'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff) format('woff'), url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.otf) format('opentype');
        }

        body, h1, h2, h3, h4, h5, h6, input, textarea, select {
            font-family: 'Noto Sans KR', sans-serif;
        }

        body {
            font-family: 'Noto Sans KR';
            background-color: black;
            color: #f1e8ce;
        }

        .header_top_title {
            font-weight: bold;
            font-size: 55px;
            padding-top: 60px;
            font-family: 'Cafe24Ssurroundair';
            text-decoration: none;
            color: #f1e8ce;
        }

        .header_menu_area {
            padding-top: 30px;
        }

        .mom {
            text-align: center;
            width: 100%;
            max-width: 950px;
            margin: 0px auto;
        }

        .menu_name {
            text-decoration: none;
            font-size: 19px;
            color: #f0e8ce;
            padding: 0px 10px;
        }

        .main {
            width: 100%;
            height: 100%;
        }

        .ming_photo {
            border-radius: 20px;
            /*display: inline-block;*/
            width: 400px;
            height: 600px;
            /*align: text-top;*/
            /*margin: 40px 0px;*/

        }

        .each_title {
            font-size: 25px;
            font-weight: bold;
            box-sizing: border-box;
            padding: 25px 0px;
        }

        .each_title_year {
            font-size: 20px;
            font-weight: bold;
            box-sizing: border-box;
            padding-bottom: 10px;
        }

        .each_text {
            width: 100%;
            box-sizing: border-box;
        }

        .top_screen {
            display: inline-block;
            width: 100%;
            height: 50%;
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .bottom_screen {
            display: inline-block;
            width: 100%;
            height: 100%;
            margin-bottom: 40px;
        }

        .top_screen_left {
            display: inline-block;
            float: left;
            width: 50%;
        }

        .top_screen_right {
            width: 50%;
            float: left;
            text-align: left;
        }

        .bottom_screen_left {
            display: inline-block;
            float: right;
            width: 50%;
            height: 100%;
        }
        .bottom_screen_right {
            width: 50%;
            height: 100%;
            float: right;
            box-sizing: border-box;
            padding-top: 20%;
        }

        .each_text_bottom {
            margin-bottom: 40px;
        }

        .song_name_area {
            font-size: 13px;
            margin-left: 200px;
            text-align:left;
        }

        @media (max-width: 844px) { /* 화면 크기가 509px 이하인 경우 : 모바일용 css */
            .header_top_title {
                font-size:40px;
            }
            .ming_photo {
                border-radius: 20px;
                /*display: inline-block;*/
                width: 85%;
                height: 85%;
                /*align: text-top;*/
                /*margin: 40px 0px;*/
            }
            .top_screen_left {
                width: 100%;
                float: unset;
        }
            .top_screen_right {
                width: 100%;
                float: unset;
            }

            .bottom_screen_right {
                width: 100%;
                float: right;
                padding:unset;
            }
            .bottom_screen_left {
                width: 100%;
                float: right;
            }
        }
    </style>

</head>

<body>
<div class="mom">
    <div class="header">
        <div class="header_top_title">
            <a class="header_top_title" href="my_profile.php" target="_self">싱어송라이터 우유</a>
        </div>
        <div class="header_menu_area">
            <a class="menu_name" href="menu_introduce.php">INTRODUCE</a>
            <a class="menu_name" href="menu_music.php">MUSIC</a>
            <a class="menu_name" href="menu_video.php">VIDEO</a>
            <a class="menu_name" href="menu_news.php">NEWS</a>
            <a class="menu_name" href="menu_board.php">BOARD</a>
            <a class="menu_name" href="https://www.instagram.com/over93/" target="_blank">INSTAGRAM</a>
            <a class="menu_name" href="https://www.facebook.com/MJ93.K/" target="_blank">FACEBOOK</a>
        </div>
    </div>

    <div class="main">
        <div class="top_screen">
            <div class="top_screen_left">
                <img class="ming_photo" src="image/minji.jpg">
            </div>

            <div class="top_screen_right">
                <div class="each_title">아티스트 소개</div>

                <div class="each_title_year">우유 Oo.you (김민지)</div>

                <div class="each_text">2013년 M.net의 오디션 프로그램 "슈퍼스타 K5"에 참가해 대중과 만난 그녀는
                    뛰어난 실력으로 TOP4를 기록,
                    2015년 첫 싱글 '날씨 좋아요'로 정식 데뷔했다.<br>
                    2016년 드라마 "싸우자 귀신아" OST에 참여해 극의 몰입도를 높인 그녀는
                    싱글 '창문', '새벽고민'에 이어 첫 미니앨범 [첫번째 상상]을 발표했고,
                    2019년 싱글 '신호등'으로 컴백하였다.
                </div>

                <div class="each_title">장르</div>
                <div class="each_text">
                    - 포크/블루스,인디음악,록/메탈,발라드,국내드라마,댄스
                </div>

                <div class="each_title">Details</div>
                <div class="each_text">
                    BJ활동 / 유튜버 / 기타강사 / 공연
                </div>

            </div>

        </div>


        <div class="bottom_screen">
            <div class="bottom_screen_right">
                <img class="ming_photo" src="image/minji2.jpg">
            </div>

            <div class="bottom_screen_left">
                <div class="each_title">AlBUM_LIST</div>
                <?php

                $sql = "select * from introduce";


                if ($all = $db->query($sql)) {
                while ($each = $all->fetch_assoc()) {

                    $year = $each['year'];
                    $work_name_1 = $each['work_name_1'];
                    $work_name_2 = $each['work_name_2'];
                    $work_name_3 = $each['work_name_3'];
                    $work_name_4 = $each['work_name_4'];
                    $work_name_5 = $each['work_name_5'];

                        ?>
                        <div class="text_area">
                            <div class="each_title_year"><?=$year?></div>
                            <div class="each_text_bottom">
                                <div><?= $work_name_1 ?></div>
                                <div><?= $work_name_2 ?></div>
                                <div>
                                    <?= $work_name_3 ?>
                                    <div class="song_name_area">
                                        <?php

                                        $sql_2 = "select * from mini_album";

                                        if ($year==2018) {
                                            if ($all_2 = $db->query($sql_2)) {
                                                while ($mini_each = $all_2->fetch_assoc()) {
                                                    $num = $mini_each['num'];
                                                    $mini_work_name = $mini_each['mini_work_name'];
                                                    ?>

                                                    <div class="song_name"><?=$num.".".$mini_work_name?></div>

                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div><?= $work_name_4 ?></div>
                                <div><?= $work_name_5 ?></div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>


</body>
</html>

<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
?>


<!DOCTYPE html>
<html lang="ko">

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
    <script src="https://kit.fontawesome.com/3a7191171a.js" crossorigin="anonymous"></script>
    <style>
        @font-face {
            font-family: 'Cafe24Ssurroundair';
            font-weight: normal;
            font-style: normal;
            src: url(https://cdn.jsdelivr.net/gh/webfontworld/cafe24/Cafe24Ssurroundair.woff2) format('woff2');
            font-display: swap;
        }
        @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 100;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Thin.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 300;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Light.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 400;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Regular.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 500;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Medium.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 700;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Bold.otf) format('opentype');} @font-face {font-family: 'Noto Sans KR';font-style: normal;font-weight: 900;src: url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff2) format('woff2'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.woff) format('woff'),url(//fonts.gstatic.com/ea/notosanskr/v2/NotoSansKR-Black.otf) format('opentype');} body, h1, h2, h3, h4, h5, h6, input, textarea, select { font-family: 'Noto Sans KR', sans-serif; }
        body {
            font-family: 'Noto Sans KR';
            background-color:black;
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
            width:100%;
            max-width: 900px;
            margin:0px auto;
        }
        .main {
            width: 100%;
            height: 100%;
        }
        .menu_name {
            text-decoration: none;
            font-size:19px;
            color:#f0e8ce;
            padding:0px 10px;
        }
        .first_album_photo {
            width:100%;
            max-width:400px;
            border-radius: 12px;
        }
        .first_album_photo_area {
            margin-top: 40px;
        }
        .sub_title {
            font-size:30px;
            font-weight:bold;
            padding: 20px 0px 30px 0px;
        }
        .sub_title2 {
            font-size:20px;
            font-weight: bold;
            padding: 20px 0px;
        }
        .first_album_day {
            font-size:15px;
            padding-bottom:10px;
        }
        .first_album_intro {
            font-size:18px;
        }
        .album_button {
            text-decoration: none;
            color: #f0e8ce;
            border: 1px solid #f0e8ce;
            border-radius: 25px;
            padding: 10px 20px;
            display: inline-block;

        }
        .section {
            margin-bottom: 100px;
        }
        .best_photo {
            width: 100%;
            max-width: 250px;
            border-radius: 20px;
            padding: 10px;
        }
        .button_margin {
            margin-top: 60px;
        }
        .youtube_area {
            width:100%;
            max-width: 560px;
            border-radius: 12px;
        }

        .album_area {
            width:100%;
            height:100%;
            position: relative;
            left:0px;
            top:0px;
            display: flex;
            justify-content: center;

        }
        .album_overflow_area {
            height:100%;
            width:745px;
            overflow:hidden;
            position: relative;
        }

        .album_slide_area {
            display: inline-block;
            text-align: center;
            width: 100%;
            height: 100%;
            white-space: nowrap;
            transition: all 0.5s;

        }
        .left_btn {
            position: absolute;
            left: 0px;
            top: 0px;
            cursor: pointer;
            width: 50px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right_btn {
            position: absolute;
            right:0px;
            top:0px;
            cursor:pointer;
            width:50px;
            height:100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn_hover:hover .fas {
            color:#8a8a8a;
        }
        .fas {
            color:white;
        }

        .img-a {
            display: inline-block;
            width: 225px;
            height: 225px;
            position: relative;
            margin: 10px;
        }
        .img-b {
            border-radius: 20px;
            width:100%;
            max-width:225px;
            height:225px;
        }
        .img-c {
            box-sizing: border-box;
            position: absolute;
            border: 4px solid white;
            text-align: center;
            background-color: black;
            padding: 80px 0px;
            width:100%;
            height:100%;
            top: 0px;
            left: 0px;
            border-radius: 20px;
            transition: all ease 1s 0s;
            opacity: 0;
        }
        .letter {
            display: inline-block;
            position: absolute;
            width:100%;
            top:50%;
            left:0px;
            font-size: 16px;
            line-height: 24px;
        }
        .img-a:hover .img-c {
            display: block;
            opacity: 0.8;
        }
        .left_gradient {
            left: 0;
            background-image: linear-gradient(90deg,#000,hsla(0,0%,100%,0));
        }
        .right_gradient {
            right: 0;
            background-image: linear-gradient(90deg,hsla(0,0%,100%,0),#000);
        }

        .pagination_gradient {
            position: absolute;
            top: 0;
            width: 15px;
            height: 100%;
            z-index: 72;
        }
        @media (max-width: 509px) { /* 화면 크기가 509px 이하인 경우 : 모바일용 css */
            .album_slide_area{
                margin-top:30px;
                width:90%;
                max-width: unset;
            }
            .img-a {
                width:100%;
                max-width:unset;
                height: unset;
                margin: 10px 0px;
            }
            .img-b {
                max-width:unset;
                height:unset;
            }
            .header_top_title {
                font-size:40px;
            }
        }

        @media (max-width: 899px) { /* 화면 크기가 768px 이하인 경우 : 모바일용 css */
            .header_top_title{
                font-size:40px;
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
        <div class="section first_album_introduce">
            <div class="first_album_photo_area">
                <img class="first_album_photo" src="image/nice_weather.jpg">
            </div>
            <div class="first_album_discription_area">
                <div class="sub_title">대표곡</div>
                <div class="first_album_day">
                    2015.10.15일 발매
                </div>
                <div class="first_album_intro">
                    <!--"문득 떠오른 첫 멜로디에 기분 좋음을 느껴 듣는이에게 밝은 느낌을 전달하고자 만들어낸 곡"-->
                    "비가오나,눈이오나 그 사람과 함께 걷던 그 날의 설렘을 회상하는 곡"
                </div>
            </div>
            <div class="button_margin first_album_button_area">
                <a class="album_button" href="https://www.melon.com/album/detail.htm?albumId=2644865" target="_blank">DETAILS</a>
            </div>
        </div>

        <div class="section best_album_photo">
            <div class="sub_title">작업 앨범</div>
            <div class="album_area">
                <div class="album_overflow_area">
                    <div class="album_slide_area">
                            <?php
                            $sql = "select * from music";

                            if($all=$db->query($sql)){
                                while($each=$all->fetch_assoc()){
                                    $photo = $each['photo'];
                                    $description =$each['description'];
                                    $line=$each['line'];
                                    $height = 24 * $line;
                                    $height = $height."px";
                                    $half_height= $height/2;
                                    ?>
                                    <div class="img-a">
                                        <img src="<?=$photo?>" alt="" class="img-b album_photo">
                                        <div class="img-c">
                                            <div class="letter" style="height:<?=$height?>;margin-top: -<?=$half_height?>px;"><?=$description?></div>
                                        </div>
                                        <!-- DB에 src(jpg)값, div에있는 text값 저장해서 불러와 while문으로 넣기??-->
                                        <!--<img src="image/sangsang_2.png" alt="" class="img-c">-->
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                    <div class="pagination_gradient left_gradient" style="display: block;"></div>
                    <div class="pagination_gradient right_gradient" style="display: block;"></div>
                </div>

                    <div role="button" class="left_btn btn_hover">
                        <i class="fas fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div role="button" class="right_btn btn_hover">
                        <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    </div>
            </div>

            <div class="button_margin best_button_area">
                <a class="album_button" href="menu_music.php">OTHERS</a>
            </div>
        </div>

        <div class="section best_mv_area">
            <div class="sub_title">MUSIC VIDEO</div>
            <div class="best_mv">
                <iframe class="youtube_area" width="560" height="315" src="https://www.youtube.com/embed/F8d128K54RI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="first_album_discription_area">
                <div class="sub_title2">
                    Free Bird
                </div>
                <div class="first_album_intro">
                    "태어나 보니 난 이미 나였고, 세상을 등지기엔 너무 컸고" <br>
                    "자유롭게 나는 새들을 보면, 날개없이 나는 상상을 했어" <br>
                </div>
            </div>
            <div class="button_margin">
            <a class="album_button" href="https://www.youtube.com/c/%EA%B8%B0%EB%B0%8D%EC%A7%80/videos" target="_blank">YOUTUBE</a>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>

<script>


let total_photo = document.querySelectorAll('.album_photo').length; //변하지 않는 값
let visible_photo_cnt = 3; // 변하지 않는 값
let pass_num = 0; // 변하는 값



    document.querySelector('.right_btn').addEventListener('click', function() {
        if( pass_num < total_photo - visible_photo_cnt){
            pass_num += 1;
            document.querySelector('.album_slide_area').style.transform = 'translate('+(-248.333 * pass_num)+'px)';
        }
        console.log("pass_num : " + pass_num);
    });

    document.querySelector('.left_btn').addEventListener('click', function() {
        //pass_num = pass_num -1;

        if(pass_num>0){
            pass_num = pass_num - 1;
            document.querySelector('.album_slide_area').style.transform = 'translate('+(-248.333 * pass_num)+'px)';
        }
        console.log("pass_num : " + pass_num);


    });

/*document.querySelector('.right_btn').addEventListener('click', function() {
    if(remain_cnt > visible_photo_cnt){
        remain_cnt = remain_cnt - 1;
        pass_num += 1;
        document.querySelector('.album_slide_area').style.transform = 'translate('+(-248.333 * pass_num)+'px)';
    }

    console.log("pass_num : " + pass_num);
    console.log("remain_cnt : " + remain_cnt);

});

document.querySelector('.left_btn').addEventListener('click', function() {
    //pass_num = pass_num -1;

    if(remain_cnt < total_photo){
        pass_num = pass_num - 1;
        remain_cnt = remain_cnt +1;
        document.querySelector('.album_slide_area').style.transform = 'translate('+(-248.333 * pass_num)+'px)';

    }

    console.log("pass_num : " + pass_num);
    console.log("remain_cnt : " + remain_cnt);


});*/

</script>
<a class="menu_name" href="admin_page.php">관리자 페이지 이동</a>
</body>
</html>

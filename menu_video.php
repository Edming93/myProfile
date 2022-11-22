<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
?>


<!DOCTYPE html>
<html lang="en" lang="ko">

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
            max-width: 1200px;
            margin:0px auto;
        }
        .main {
            text-align: center;
            width:100%;
            height:100%;
            margin-top: 60px;
            margin-bottom: 80px;
        }
        .menu_name {
            text-decoration: none;
            font-size:19px;
            color:#f0e8ce;
            padding:0px 10px;
        }
        .img-a {
            display: inline-block;
            width:100%;
            max-width: 400px;
            position: relative;
            margin: 30px;

        }
        .img-b {
            border-radius: 10px;
            width:100%;
        }
        .img-c {
            position: absolute;
            width:100%;
            top: 0px;
            left: 0px;
            /*display: none;*/
            border-radius: 10px;
            opacity: 0;
            transition: all ease 1s 0s;
        }
        .img-a:hover .img-c {
            display: block;
            opacity: 0.4;
        }
        .video_text {
            font-size: 17px;
            color:#ba9788;
            font-weight: bold;

        }
        .video_title {
            text-decoration: none;
            cursor:pointer;
        }


        @media (max-width: 899px) { /* 화면 크기가 768px 이하인 경우 : 모바일용 css */
            .video_area{
                margin:40px 10px 10px 10px;
                width:90%;
                max-width: unset;
            }
            .img-b {
                max-width:unset;
                height:unset;
            }
            .img-c {
                max-width:unset;
                height:unset;
            }
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

        <?php
        $sql = "select * from video";

        if($all=$db->query($sql)){
            while($each=$all->fetch_assoc()){
                $youtube_link = $each['youtube_link'];
                $youtube_photo = $each['youtube_photo'];
                $title =$each['title'];

                ?>
        <div class="img-a video_area">
            <a onclick="open_overlay('<?= $youtube_link?>')" class="video_title">
                <img class="img-b" src="image/video_image/<?=$youtube_photo?>">
                <img class="img-c" src="image/video_image/play.png">
                <div class="video_text"><?=$title?></div>
            </a>
        </div>
        <?php
        }
        }
        ?>
    </div>

    <style>
        .main_overlay {
            text-align: center;
        }
        .iframe_youtube {
            display: inline-block;
            width:100%;
        }
        #overlay{
            position:fixed;
            width:100vw;
            height:100vh;
            background-color: #000000cc;
            display:none;
            top:0px;
            left:0px;
            opacity: 0;
            transition: all ease 1s 0s;
        }
        #overlay:hover {
            display: block;
            opacity: 1;
        }
        #iframe_youtube {
            width:100%;
            max-width:1080px;
            height:608px;
        }
        .overlay_button_area{
            width:100%;
            height: 80px;
            margin-top: 75px;
        }
        .overlay_button{
            text-align: right;
        }
        .overlay_button_x {
            /*margin-bottom: 100px;
            margin-right:200px; !*미는만큼 영상이 왼쪽으로 가는것 해결-div를 만들어서 옮겨줄것*!
            margin-top:50px;*/
            margin-right: 10%;
            font-size: 20px;
            padding: 0px 10px;
            border-radius: 5px;
            border: 0px;
            cursor:pointer;
            background-color: #979694;
            font-weight: bold;
        }

        @media (max-width: 899px) { /* 화면 크기가 768px 이하인 경우 : 모바일용 css */
            #iframe_youtube {
                width: 100%;
                max-width: 1080px;
                height: 360px;
            }
            .overlay_button_x {
                /*margin-bottom: 13px;
                margin-right: 4px;
                margin-top: 7px;*/
                margin-right:5%;
                -webkit-appearance: none;
                -webkit-border-radius: 10px;
            }
        }

    </style>


    <div class="main_overlay" id="overlay">
        <div class="overlay_button_area">
            <div class="overlay_button">
                <input class="overlay_button_x" type="button" value="X" onclick="close_overlay();">
            </div>
        </div>
        <div class="iframe_youtube">
            <iframe id="iframe_youtube" src="" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </div>
    </div>


    <script>
        function open_overlay(youtube_link){
            let open = document.getElementById('overlay');
            open.style.display='block';
            document.getElementById('iframe_youtube').setAttribute('src',youtube_link);
        }

        function close_overlay(){
            let open = document.getElementById('overlay');
            open.style.display='none';
            document.getElementById('iframe_youtube').setAttribute('src','');
        }
    </script>

    <?php
    include("footer.php");
    ?>

</body>
</html>

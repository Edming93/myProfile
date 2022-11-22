<?php
$db = mysqli_connect("localhost", "root", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>우유 관리자 페이지</title>
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
            margin: 0px;
            background-color: #f5f5f5;
        }

        .main {
            width: 100%;
            height: 1600px;
            text-align: center;
        }

        .main_left{
            width: 330px;
            height: 100vh;
            background-color: black;
            /* float: left; */
            position: fixed;
            left: 0px;
            top: 0px;
        }

        .left_header_top {
            width: 100%;
            height: 150px;
            font-size: 60px;
            font-weight: 900;
            color: #e9e9de;
            padding: 30px;
            box-sizing: border-box;
        }

        .menu_list {
            width: 100%;
            height: calc(100% - 150px);
            text-align: left;
        }

        .menu {
            width: 100%;
            height: 50px;
            font-size: 23px;
            font-weight: 600;
            color: #e9e9de;
            padding: 8px 0px;
            box-sizing: border-box;
            padding-left: 53px;
        }

        .main_right {
            width: calc(100% - 330px);
            height: 100%;
            float: right;
            text-align: left;
        }

        .a_link {
            text-decoration: none;
            color: #e9e9de;
        }
        .a_link_color_black {
            text-decoration: none;
            color: #2c2c2c;
        }

        .right_header_top {
            width: 100%;
            height: 80px;
            font-size: 30px;
            font-weight: 900;
            color: #2c2c2c;
            margin-top: 65px;
            margin-left: 50px;
            border-bottom: 2px solid;
        }

        .main_right_area {
            width: 1000px;
            height: calc(100% - 160px);
            margin-left: 50px;
        }
        .main_left_table {
            width: 90%;
            height: 65px;
            border-bottom: 1px solid #dddddd;
        }
        .main_right_table {
            width:100%;
            margin-top: 15px;

        }
        .left_table_title_box {
            width: 60%;
            height: 100%;
            padding: 15px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .right_table_title_box {
            width: 100%;
            height: 100%;
            padding: 5px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            font-size: 18px;
            font-weight: 400;
            color: #8d8c8c;
        }
        .table_data_box {
            width: 40%;
            height: 100%;
            padding: 15px 0px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .text_box_explain {
            color: #8e8e8e;
            font-size: 14px;
            font-weight: 400;
            float: left;
            height: 100%;
            margin-left: 10px;
            display: inline-block;
            line-height: 33px;
        }
        .insert_write_area {
            width: 90%;
            height: 55px;
            border-bottom: 1px solid #dddddd;
            /* padding-top: 14px; */
            line-height: 50px;
            box-sizing: border-box;
        }

        .left_area {
            width:40%;
            float:left;
        }
        .right_area {
            width: 45%;
            float: left;
            margin-left: 45px;


        }
        .right_area_title {
            display: inline-block;
            font-weight: 900;
            font-size: 13px;
        }
        .right_area_button {
            width:80px;
            float: right;
        }
        .button {
            width: 75px;
            height: 23px;
            display: inline-block;
            line-height: 18px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }
        .song_name_area {
            font-size:14px;
            margin-left:15px;
        }



    </style>
</head>
<body>
<div class="main">
    <div class="main_left">
        <div class="left_header_top"><a class="a_link" href="admin_page.php">Oo.you</a></div>
        <div class="menu_list">
            <div class="menu"><a class="a_link" href="admin_page.php">· DASHBOARD</a></div>
            <div class="menu"><a class="a_link" href="admin_main.php">· MAIN</a></div>
            <div class="menu"><a class="a_link" href="admin_introduce.php">· INTRODUCE</a></div>
            <div class="menu"><a class="a_link" href="admin_music.php">· MUSIC</a></div>
            <div class="menu"><a class="a_link" href="admin_video.php">· VIDEO</a></div>
            <div class="menu"><a class="a_link" href="admin_news.php">· NEWS</a></div>
            <div class="menu"><a class="a_link" href="admin_settings.php">· SETTINGS</a></div>
        </div>
    </div>
    <div class="main_right">
        <div class="right_header_top">INTRODUCE</div>
        <div class="main_right_area">
            <div class="left_area">
                <div class="insert_write_area">

                    <div class="right_area_button">
                        <a href="admin_introduce_write.php"><input type="button" class="button" value="INSERT"></a>
                    </div>
                </div>
            </div>


            <div class="right_area">
                <div class="insert_write_area">
                    <div class="right_area_title">WORK_LIST</div>
                    <div class="right_area_button">
                        <input type="button" class="button" value="DELETE" onclick="db_button();">
                    </div>

                    <div class="right_area_button">

                            <input type="button" class="button" value="MODIFY"></a>
                    </div>
                </div>
                <div class="main_right_table">

                            <div class="right_table_title_box">

                            </div>

                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>
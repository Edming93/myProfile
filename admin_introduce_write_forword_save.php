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

        .main_left {
            width: 330px;
            height: 100%;
            background-color: black;
            float: left;
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
        .main_table {
            width:100%;
            height:75px;
            border-bottom: 1px solid #dddddd;
            float:left;
        }
        .table_title_box {
            width: 22%;
            height: 100%;
            padding: 22px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .table_data_box {
            width:78%;
            height:100%;
            padding: 22px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .text_box {
            width: 400px;
            height: 25px;
            float: left;
            border-radius: 5px;
            border: 1px solid #b9b9b2;
        }
        .main_table_dc {
            width:100%;
            height: 380px;
            border-bottom: 1px solid #dddddd;
            float:left;
        }
        .textarea_box {
            width: 600px;
            height: 300px;
            border: 1px solid #b9b9b2;
            border-radius: 7px;
            padding: 20px;
            box-sizing: border-box;
            margin-bottom: 20px;
            float: left;
            max-width: 600px;
            max-height: 320px;
        }
        .text_box_explain_area_padding {
            width: 150px;
            height: 100%;
            float: left;
            padding: 140px 0px;
            box-sizing: border-box;
        }
        .text_box_explain {
            color: #8e8e8e;
            font-size: 12px;
            font-weight: 400;
            float: left;
            height: 100%;
            margin-left: 10px;
            display: inline-block;
            line-height: 29px;
            }

        .main_table_photo {
            width:50%;
            height:75px;
            float:left;
        }
        .table_title_box_photo{
            width:35%;
            height: 100%;
            padding: 22px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .table_data_box_photo {
            width:65%;
            height:100%;
            padding: 22px 0px;
            padding-left: 25px;
            box-sizing: border-box;
            float: left;
            font-size: 20px;
            font-weight: 900;
            color: #2c2c2c;
        }
        .text_box_photo {
            width: 160px;
            height: 25px;
            float: left;
            border-radius: 5px;
            border: 1px solid #b9b9b2;
        }
        .text_box_explain_photo {
            color: #8e8e8e;
            font-size: 12px;
            font-weight: 400;
            float: left;
            height: 100%;
            margin-left: 10px;
            margin-top: 6px;
            display: inline-block;
        }
        .text_box_explain_area {
            width: 130px;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }
        .main_table_photo_area{
            width: 100%;
            height: 100px;
            border-bottom: 1px solid #dddddd;
            float: left;
            box-sizing: border-box;
            padding-top: 11px;
        }
        .main_table_no_height {
            width:100%;
            height:100%;
            border-bottom: 1px solid #dddddd;
            float:left;
        }
        .text_box_year {
            width: 160px;
            height: 25px;
            float: left;
            border-radius: 5px;
            border: 1px solid #b9b9b2;
        }
        .plus_button {
            margin-right:10px;
            height: 29px;
            width: 29px;
        }
        .submit_button {
            width:130px;
            height:30px;
            display:inline-block;
        }
        .submit_button_area {
            width: 100%;
            height: 30px;
            float: left;
            text-align: center;
            margin-top: 35px;
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
            <div class="menu"><a class="a_link" href="admin_introduce_write.php">· INTRODUCE</a></div>
            <div class="menu"><a class="a_link" href="admin_music.php">· MUSIC</a></div>
            <div class="menu"><a class="a_link" href="admin_video.php">· VIDEO</a></div>
            <div class="menu"><a class="a_link" href="admin_news.php">· NEWS</a></div>
            <div class="menu"><a class="a_link" href="admin_settings.php">· SETTINGS</a></div>
        </div>
    </div>
    <div class="main_right">
        <div class="right_header_top">INTRODUCE</div>
        <div class="main_right_area">
            <form method="post" action="admin_db_write.php">
                <div class="main_table">
                    <div class="table_title_box">INTRO_TITLE</div>
                    <div class="table_data_box">
                        <input class="text_box" type="text" name="title">
                        <div class="text_box_explain">title 제목을 입력하세요.</div>
                    </div>
                </div>
                <div class="main_table">
                    <div class="table_title_box">ARTIST_NAME</div>
                    <div class="table_data_box">
                        <input class="text_box" type="text" name="artist_name">
                        <div class="text_box_explain">artist 명을 입력하세요.</div>
                    </div>
                </div>
                <div class="main_table_dc">
                    <div class="table_title_box">INTRODUCE</div>
                    <div class="table_data_box">
                        <textarea class="textarea_box" type="text" name="introduce"></textarea>
                        <div class="text_box_explain_area_padding">
                        <div class="text_box_explain">설명을 입력하세요.</div>
                        </div>
                    </div>
                </div>
                <div class="main_table">
                    <div class="table_title_box">GENRE</div>
                    <div class="table_data_box">
                        <input class="text_box" type="text" name="genre">
                        <div class="text_box_explain">장르를 입력하세요.</div>
                    </div>
                </div>
                <div class="main_table">
                    <div class="table_title_box">DETAILS</div>
                    <div class="table_data_box">
                        <input class="text_box" type="text" name="plus_explain">
                        <div class="text_box_explain">추가설명을 입력하세요.</div>
                    </div>
                </div>
                <div class="main_table_photo_area">
                    <div class="main_table_photo">
                        <div class="table_title_box_photo">LEFT_PHOTO</div>
                        <div class="table_data_box_photo">
                            <input class="text_box_photo" type="text" name="left_photo"> <!--임시 input 추후에 파일업로드 팝업창으로 변경-->
                            <div class="text_box_explain_area">
                                <div class="text_box_explain_photo">왼쪽 사진을 입력</div>
                            </div>
                        </div>
                    </div>
                    <div class="main_table_photo">
                        <div class="table_title_box_photo">RIGHT_PHOTO</div>
                        <div class="table_data_box_photo">
                            <input class="text_box_photo" type="text" name="right_photo"> <!--임시 input 추후에 파일업로드 팝업창으로 변경-->
                            <div class="text_box_explain_area">
                                <div class="text_box_explain_photo">오른쪽 사진을 입력</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_table">
                    <div class="table_title_box">LIST_TITLE</div>
                    <div class="table_data_box">
                        <input class="text_box" type="text" name="list_title">
                        <div class="text_box_explain">리스트명을 입력하세요.</div>
                    </div>
                </div>

                <div class="main_table_no_height">
                    <div class="table_title_box">YEAR</div>
                        <div class="table_data_box">
                            <input class="text_box_year" type="text" name="year">
                            <div class="text_box_explain_area">
                                <div class="text_box_explain">
                                    <input class="plus_button" type="button" value="+" onclick="plus_button();"/>작품년도를 입력
                                </div>
                            </div>
                        </div>
                </div>
            <div class="submit_button_area">
                <input type="submit" class="submit_button" value="insert">
            </div>
            </form>
        </div>


    </div>
</div>
</body>
</html>
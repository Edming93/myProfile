<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');

$year = $_POST['year'];
$main_title = $_POST['main_title'];

if($year>2012) {

    if($year && $main_title) {
        echo "값모야 : ".($year&&$main_title);

        for($a=0; $a<5; $a++){
            $mini_work_name[$a] = $_POST['mini_work_name_'.($a+1)];

            echo "$mini_work_name : ".$mini_work_name[$a];
            echo "yaer: ".$year;

            $sql = "insert into mini_album(main_title,mini_work_name,year)";
            $sql = $sql . " values('{$main_title}','{$mini_work_name[$a]}','{$year}')";

            if($db->query($sql)) {
                /*$get_url = "menu_introduce.php?year=$year&work_name_1=$work_name_1&work_name_2=$work_name_1&work_name_3=$work_name_2&work_name_4=$work_name_3&work_name_5=$work_name_4";
                header('Location:'.$get_url);*/

            } else {

                echo "DB 저장에 실패하였습니다";
            }
        }
        header('Location:admin_introduce.php');
    } else {

//        if($year) {
//            if($get_name_2 || $get_name_3 || $get_name_4 || $get_name_5) {
//                echo "<script>
//            alert(\"다시 입력해주세요.\");
//             location.href ='admin_mini_insert.php?get_year=$year&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5';
//          </script>";
//            } else {
//                echo "<script>
//            alert(\"작업명을 입력해주세요.\");
//            location.href ='admin_mini_insert.php?get_year=$year';
//            </script>";
//            }
//        }
    }

} else {

    echo "<script>
         
            alert('2012년 이후 작업물을 입력해주세요.');
             location.href ='admin_mini_insert.php?no_save=중복확인&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5';
          </script>";


    /*$url = "admin_introduce_write.php?no_save=중복확인&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5";
    header('Location:'.$url);*/

}
?>



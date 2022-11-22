<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');

$year = $_POST['year'];

$work_list_name_1 = $_POST['work_list_name_1'];
$work_list_name_2 = $_POST['work_list_name_2'];
$work_list_name_3 = $_POST['work_list_name_3'];
$work_list_name_4 = $_POST['work_list_name_4'];
$work_list_name_5 = $_POST['work_list_name_5'];

$answer_year = 0;

$ask = "select * from introduce where year={$year}";
if($asked = $db->query($ask)) {
    while ($array = $asked->fetch_assoc()) {
        $answer_year = $array['year'];
    }
}

if($answer_year==$year) {

    $sql = "UPDATE introduce SET work_name_1 ='$work_list_name_1',work_name_2 ='$work_list_name_2',work_name_3='$work_list_name_3',work_name_4='$work_list_name_4',work_name_5='$work_list_name_5' where year='$year'";

    if($year && $work_list_name_1) {
        if($db->query($sql)) {
            echo $sql;
            header('Location:admin_introduce.php');

        } else {

            echo "DB 저장에 실패하였습니다";
        }

    } else {

        if($year) {
            if($work_list_name_2 || $work_list_name_3 || $work_list_name_4 || $work_list_name_5) {

                echo "<script>
            alert(\"다시 입력해주세요.\");
             location.href ='admin_introduce_write.php';
          </script>";

            } else {

                echo "<script>
            alert(\"작업명을 입력해주세요.\");
            location.href ='admin_introduce_write.php';
            </script>";
            }

        } else {
            echo "<script>
         
            alert(\"년도를 입력해주세요.\");
             location.href ='admin_introduce_write.php';
          </script>";
        }
    }

    } else {

        $get_name_1 = $work_list_name_1;
        $get_name_2 = $work_list_name_2;
        $get_name_3 = $work_list_name_3;
        $get_name_4 = $work_list_name_4;
        $get_name_5 = $work_list_name_5;


        /*$url = "admin_introduce_modify_fail.php?no_save=중복확인&year=$year&get_name_1=$get_name_1&get_name_2=$get_name_2&get_name_3=$get_name_3&get_name_4=$get_name_4&get_name_5=$get_name_5";
        header('Location:' . $url);*/

    }
?>


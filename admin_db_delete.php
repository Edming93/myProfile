<?php
$db = mysqli_connect("localhost", "ming", "Edming1@", "my_profile");
mysqli_set_charset($db, 'utf8');

$year = $_GET['year'];




    $sql = "DELETE FROM introduce where year='$year'";

    if($delete=1) {
        if($db->query($sql)) {
        echo $sql;
            header('Location:admin_introduce.php');

        } else {

            echo "DB 저장에 실패하였습니다";
        }

    } else {

        echo "삭제할 수 없는 파일입니다";

    }
?>


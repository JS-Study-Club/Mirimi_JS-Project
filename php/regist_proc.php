<?php
include("db_conn.php");
session_start();

$user_grade = $_POST["user_grade"];
$id = $_POST["user_id"];
$pw = $_POST["user_pw"];
$name = $_POST["user_name"];
$grade = substr($user_grade, 0, 1);
echo $grade;
$class = substr($user_grade, 1, 1);
echo $class;
$sql = "INSERT INTO mirimi_users (user_id, user_pw, user_name, user_grade, user_class) VALUES ('$id', '$pw', '$name', '$grade', '$class');";
$result = mysqli_query($db_conn, $sql);
/* $result = $db_conn -> query($sql);*/
// 입력이 됐으면 결과가 1

if ($result === false) { /* === 이면 자료형까지 일치하는지 확인 */
    echo "저장에 문제가 생겼습니다. 관리자에게 문의 바랍니다.";
    echo mysqli_error($db_conn);
} else { ?>
    <script>
        alert("회원가입이 완료되었습니다.")
        location.href = "my-page.php"
    </script>;

    <?php
}
?>
<?php
session_start();
include("db_conn.php");

$id = $_POST['user-id'];
$pw = $_POST['user-pw'];

//아이디 존재 여부 검사
$sql = "SELECT * FROM mirimi_users WHERE user_id='$id'";
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($result);


if (!$row) { // 아이디가 존재하지 않으면 로그인 페이지로
    echo "<script> 
        alert(\"일치하는 아이디가 없습니다.\");
        location.replace('login.php');
        </script>";

    var_dump($sql); // 쿼리 확인
    exit;
} else { // 아이디가 존재하면 비밀번호 확인
    if ($row['user_pw'] != $pw) { // 비밀번호 불일치 시 로그인 페이지로
        echo "<script>
                    alert(\"비밀번호가 일치하지 않습니다.\");
                    location.replace('login.php');
                </script>";

        exit;
    } else { // 비밀번호 일치 시 세션 변수 생성
        echo "<script>
                    alert(\"로그인 성공!\");
                    console.log(\"로그인 성공\");
                </script>";
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['grade'] = $row['user_grade'];
        $_SESSION['class'] = $row['user_class'];
        mysqli_close($db_conn);

        header("Location: ../main/my-page.php");

        // echo "<script>
        //     name = '$s_name';
        //     </script>";
        exit;
    }
}
?>
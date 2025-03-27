<?php
session_start();

// var_dump($_POST);
// exit;

$host = 'localhost'; // MySQL 호스트
$username = 'root'; // MySQL 사용자명
$password = '000000'; // MySQL 비밀번호
$database = 'js_project'; // 사용할 데이터베이스명

$db_conn = mysqli_connect($host, $username, $password, $database);

if (!$db_conn) {
    echo "<script> 
        alert('MySQL 연결 실패');
        </script>";
} else {
    echo "<script> 
        alert('MySQL 연결 성공');
        </script>";
}


$id = $_POST['user-id'];
$pw = $_POST['user-pw'];


//아이디 존재 여부 검사
$sql = "select * from mirimi_users where user_id='$id'";
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
        echo "ID " . $id . "<br>";
        echo "PW " . $pw . "<br>";
        echo "NAME " . $_SESSION['name'];
        header("Location: ../html/index.html");
        $s_name = $_SESSION['name'];
        echo "<script>
            name = '$s_name';
            </script>";
        exit;
    }
}
?>
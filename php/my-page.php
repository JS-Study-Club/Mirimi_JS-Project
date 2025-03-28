<?php
include "db_conn.php";

// 세션 확인 및 보안 처리
if (!isset($_SESSION['id'])) {
    echo "<script>
        alert('로그인이 필요합니다.');
        location.href = '../php/login.php';
    </script>";
    exit;
}

$id = mysqli_real_escape_string($db_conn, $_SESSION['id']);

$user_id = $_SESSION['id']; // 세션에서 값 가져오기
$sql = "SELECT * FROM mirimi_users WHERE user_id = '$user_id'";
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($result);

if (!$result) {
    die("쿼리 실행 실패: " . mysqli_error($db_conn));
}

if ($_SESSION['id'] != $id) {
    echo "<script>
        alert('권한이 없습니다.');
        location.href = '../html/index.html';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 마이페이지</title>
</head>

<body>
    <form action="../php/logout.php">
        <input type="submit" name="logout" id="logout" value="로그아웃">
        <input type="button" value="돌아가기" onclick="location.href='index.php'" >
    </form>

    <p>ID: <?php echo ($_SESSION['id']); ?></p>
    <p>NAME: <?php echo ($_SESSION['name']); ?></p>
    <p>GRADE: <?php echo ($_SESSION['grade']); ?></p>
    <p>CLASS: <?php echo ($_SESSION['class']); ?></p>
</body>

</html>
<?php
include("db_conn.php");

if (!isset($_GET['userid']) || empty($_GET['userid'])) {
    echo "<script>
    alert(\"아이디를 입력해 주십시오\");
    window.close();
    </script>";
}

$uid = $_GET['userid'];

$uid = mysqli_real_escape_string($db_conn, $uid);
$query = "SELECT * FROM mirimi_users WHERE user_id='$uid'";
$result = mysqli_query($db_conn, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($db_conn));
} else {
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo "<script>alert(\"사용 가능한 아이디입니다\");</script>";
    } else {
        echo "<script>alert(\"사용이 불가능한 아이디입니다\");</script>";
    }
}

echo "<script>window.close();</script>";
?>
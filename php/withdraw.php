<?php
session_start();
include("db_conn.php");

$id = $_SESSION['id'];
$sql = "DELETE FROM mirimi_users WHERE user_id='$id';";
$result = mysqli_query($db_conn, $sql);

if ($result === false) {
    echo "문제가 생겼습니다. 관리자에게 문의 바랍니다.";
    echo mysqli_error($db_conn);
} else {
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
    unset($_SESSION['name']);
    ?>
    ?>
    <script>
        alert("탈퇴가 완료되었습니다.");
        location.href = "index.php";
    </script>;

    <?php
}

in
    ?>
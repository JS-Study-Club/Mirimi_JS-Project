<?php
session_start();

// 세션 변수 해제
session_unset();

// 세션ID 삭제
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
      session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]
    );
  }

// 세션 파일 및 브라우저 쿠키 삭제
session_destroy();
unset($_SESSION['name']);
?>

<script>
    alert("로그아웃 되었습니다.");
    location.replace('../main/index.php');
</script>
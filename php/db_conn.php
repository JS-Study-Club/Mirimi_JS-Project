<?php
session_start();

$host = 'localhost'; // MySQL 호스트
$username = 'root'; // MySQL 사용자명
$password = '000000'; // MySQL 비밀번호
$database = 'js_project'; // 사용할 데이터베이스명

$db_conn = mysqli_connect($host, $username, $password, $database);

// if (!$db_conn) {
//     echo "<script> 
//         alert('MySQL 연결 실패');
//         </script>";
// } else {
//     echo "<script> 
//         alert('MySQL 연결 성공');
//         </script>";
// }
// phpinfo();
?>
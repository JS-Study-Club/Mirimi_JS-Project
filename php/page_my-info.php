<?php
session_start();
$my_info;
if (isset($_SESSION['name'])) {
    $user_grade = $_SESSION['grade'];
    $user_class = $_SESSION['class'];
    $user_name = $_SESSION['name'];
    $my_info = $user_grade . '학년 ' . $user_class . '반 ' . $user_name;
} else {
    $user_name = '로그인 필요';
    $my_info = $user_name;
}

?>
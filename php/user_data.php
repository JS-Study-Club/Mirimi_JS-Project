<?php
include("login.php");
session_start();

$user_id = $_SESSION["id"];
$user_name = $_SESSION["name"];
$user_grade = $_SESSION["s_grade"];
$user_class = $_SESSION["s_class"];
?>

<script>
    var id = "<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>";
    var name = "<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>";
    var s_grade = "<?php echo isset($_SESSION['s_grade']) ? $_SESSION['s_grade'] : ''; ?>";
    var s_class = "<?php echo isset($_SESSION['s_class']) ? $_SESSION['s_class'] : ''; ?>";

    function setStuID() {
        var StuInfo = '';
        const stuInfo = document.getElementById("stu_id");

        if (!id) {  // id가 없으면 로그인 필요 메시지 출력
            StuInfo = '로그인 필요';
        } else {
            StuInfo = `${s_grade}학년 ${s_class}반 ${name}`;
        }

        if (stuInfo) {  // stuInfo 요소가 존재할 경우에만 실행
            stuInfo.innerText = StuInfo;
        } else {
            console.error("stu_id 요소를 찾을 수 없습니다.");
        }
    }

    window.onload = setStuID(); // 페이지 로드 후 실행
</script>
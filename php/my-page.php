<?php
include "db_conn.php";
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
    <link rel="stylesheet" href="../css/my-page.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/screen.js"></script>
    <script>
        function withdrawCheck() {
            const check = confirm("정말 탈퇴하시겠습니까?");
            if (check) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
</head>

<body>
    <header>
        <div id="moon"></div>
        <div id="info">
            <span id="account_cir"><img src="../img/eva_person-outline.png"></span>
            <span id="stu_id">
                <?php
                echo $my_info;
                ?>
            </span>
        </div>
        <div id="me">
            <a href="timetable.php" class="menu">
                <div class="menu_button">
                    <img src="../img/School.png" class="menu_img">
                    <span class="menu_text">시간표</span>
                </div>
            </a>
            <a href="" class="menu">
                <div class="menu_button">
                    <img src="../img/Board.png" class="menu_img">
                    <span class="menu_text">게시판</span>
                </div>
            </a>
            <a href="notice_writing.html" class="menu">
                <div class="menu_button">
                    <img src="../img/pen-to-square.png" class="menu_img">
                    <span class="menu_text">글 작성</span>
                </div>
            </a>
            <a href="index.php" class="menu">
                <div class="menu_button">
                    <img src="../img/Rice.png" class="menu_img">
                    <span class="menu_text">급식표</span>
                </div>
            </a>
        </div>
        <div id="date">
            <div class="choice-date">
                <input type="date" id="dateInput">
                <script>
                    date = new Date();
                    document.getElementById('dateInput').valueAsDate = new Date(Date.UTC(date.getFullYear(), date.getMonth(), date.getDate()));
                </script>
            </div>
            <div class="input-date">
                <button type="button">
                    <img src="../img/Find.png" onclick="toInfo()" class="button-img">
                </button>
            </div>
        </div>
        <a href="../php/login.php" id="mypage_icon">
            <div id="mypage_img">
                <img src="../img/eva_person-outline.png">
            </div>
        </a>
    </header>

    <main>
        <div id="menu">
            <form action="../php/logout.php" class="menu_button">
                <input type="submit" name="logout" id="logout" value="로그아웃">
            </form>
            <form action="../php/index.php" class="menu_button">
                <input type="submit" value="돌아가기">
            </form>
            <form action="../php/mychange.php" class="menu_button">
                <input type="submit" name="change" id="change" value="학년/반 수정하기">
            </form>
            <form action="../php/withdraw.php" class="menu_button" onclick="return withdrawCheck()">
                <input type="submit" name="withdraw" id="withdraw" value="회원 탈퇴하기">
            </form>
        </div>



        <p>ID: <?php echo ($_SESSION['id']); ?></p>
        <p>NAME: <?php echo ($_SESSION['name']); ?></p>
        <p>GRADE: <?php echo ($_SESSION['grade']); ?></p>
        <p>CLASS: <?php echo ($_SESSION['class']); ?></p>
    </main>



    <div id="rec">
        <div id="blue_box">
            <span id="date2"></span>
            <div id="time_box">
                <span id="ampm"></span>
                <span id="time"></span>
            </div>
        </div>

        <div id="beige_box">
            <a href="timetable.php">
                <div id="class_table">
                    <div><img src="../img/School.png"></div>
                    <div><span>
                            우리반 <br>
                            시간표 보기
                        </span></div>
                </div>
            </a>

            <a href="">
                <div id="board">
                    <div><img src="../img/Board.png"></div>
                    <div><span>
                            우리학교 도움 <br>
                            요청 게시판 보기
                        </span></div>
                </div>
            </a>
        </div>
    </div>
    </main>
    <hr>
    <footer>
        <img src="../img/js_logo.png" id="footer_img">
        <div id="footer_text">
            <p><a href="">작성자저작권정보</a> | <a href="https://www.instagram.com/js_mirim/">JS인스타공개</a> | <a
                    href="https://www.e-mirim.hs.kr">학교정보공개</a></p>
            <div id="information">
                <p>서울시 관악구 호람로 546 (신림동) 미림마이스터고등학교 JS 스터디 커뮤니티 센터</p>
                <p>JS 부장 s2455@e-mirim.hs.kr | JS 부부장 s2455@e-mirim.hs.kr | 디자인팀 김설애 | 개발팀 김민재 / 곽자경 / 윤시웅 / 이서영</p>
                <p>546 Hoam-ro, Gwanak-gu, Seoul, 08821 Korea | MIRIM MEISTER SCHOOL JS STUDY</p>
            </div>
        </div>
    </footer>
    <script src="../js/screen_start.js"></script>
</body>

</html>
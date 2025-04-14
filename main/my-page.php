<?php
include("../php/page_my-info.php");


// 세션 확인 및 보안 처리
if (!isset($_SESSION['id'])) {
    echo "<script>
        alert('로그인이 필요합니다.');
        location.href = '../php/login.php';
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
        <?php
        include("header.php");
        ?>
    </header>
    <hr>
    <main>
        <div class="box">
            <div class="my-page">
                <div id="acc_info">
                    <span id="acc_cir">
                        <img src="../img/eva_person-outline.png">

                    </span>
                    <span id="my-info">
                        <p id="my-id"><?php echo ($_SESSION['id']); ?></p>
                        <p id="my-name"><?php echo ($my_info); ?></p>
                    </span>

                </div>

                <div id="my_menu">
                    <form action="../php/logout.php" class="my_menu_button">
                        <input type="submit" name="logout" id="logout" value="로그아웃">
                    </form>
                    <form action="../php/my-edit.php" class="my_menu_button">
                        <input type="submit" name="change" id="change" value="내 정보 수정">
                    </form>
                    <form action="../php/withdraw.php" class="my_menu_button" onclick="return withdrawCheck()">
                        <input type="submit" name="withdraw" id="withdraw" value="회원 탈퇴하기">
                    </form>
                </div>
            </div>

        </div>
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
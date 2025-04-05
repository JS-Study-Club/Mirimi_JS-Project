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

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 급식표</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/food_script.js"></script>
    <script src="../js/screen.js"></script>
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
    <hr>
    <aside>
        <div class="button-container">
            <a href="#yesterday" class="button" onclick="nearbyToday(-1)">어제</a>
            <a href="#today" class="button" onclick="nearbyToday(0)">오늘</a>
            <a href="#tomorrow" class="button" onclick="nearbyToday(1)">내일</a>
        </div>
    </aside>

    <main>
        <div class="school-meals-container">
            <div class="school-meals">
                <p class="meals_head">조식</p>
                <ul class="menuList" id="breakfastMenu"></ul>
            </div>
            <div class="school-meals">
                <p class="meals_head">중식</p>
                <ul class="menuList" id="lunchMenu"></ul>
                <p id="current_time_text"></p>
            </div>
            <div class="school-meals">
                <p class="meals_head">석식</p>
                <ul class="menuList" id="dinnerMenu"></ul>
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

    <script>
        function nearbyToday(day) {
            now = new Date();
            date = new Date(now.setDate(now.getDate() + day));
            year = date.getFullYear();
            month = date.getMonth() + 1;
            date = date.getDate();
            getMealInfo(`${year}${month >= 10 ? month : '0' + month}${date >= 10 ? date : '0' + date}`);
        }

        function toInfo() {
            getMealInfo(document.getElementById("dateInput").value.toString().replace(/-/g, ''));
        }

        
        // setStuID();

        init();
    </script>
    <script src="../js/screen_start.js"></script>
</body>

</html>
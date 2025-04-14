<?php
include("../php/page_my-info.php");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 시간표</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/timetable.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/screen.js"></script>
    <script src="../js/timetable.js"></script>
</head>

<body>
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <hr>
    <main>
        <table id="timeTable"></table>
        <div class="setInfo">
            <form id="form" action="">
                <div class="input_select">
                    <select id="grade" class="choice">
                        <option name="grade" value="1">1</option>
                        <option name="grade" value="2">2</option>
                        <option name="grade" value="3">3</option>
                    </select>
                    <span>학년</span>
                </div>
                <div class="input_select">
                    <select id="class" class="choice">
                        <option name="class" value="1">1</option>
                        <option name="class" value="2">2</option>
                        <option name="class" value="3">3</option>
                        <option name="class" value="4">4</option>
                        <option name="class" value="5">5</option>
                        <option name="class" value="6">6</option>
                    </select>
                    <span>반</span>
                </div>
                <button type="button" id="infoSubmit" onclick="getInfo()">조회</button>

            </form>
        </div>
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
    <script>
        <?php
        echo "var s_grade = '$user_grade';";
        echo "var s_class = '$user_class';";
        ?>
        getTimeTable(s_grade, s_class);
    </script>
</body>

</html>
<?php
include("../php/page_my-info.php");

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 게시판 글쓰기</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/notice_writing.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/screen.js"></script>
</head>

<body>
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <hr>
    <main>
        <div id="top">
            <form action="../php/board_post" method="post">
                <input type="submit" name="sumbit" id="submit" class="button" value="등록">
                <button id="delete" class="button" onclick="delete_confirm()">삭제</button>
                <div id="textbox">
                    <input type="text" placeholder="제목을 입력하세요. (50자 이내)" id="title_text" name="title_text"> <br>
                    <textarea placeholder="내용을 입력하세요. (500자 이내)" id="contect_text" name="contect_text"></textarea>
                </div>
            </form>
        </div>

        <script>
            function delete_confirm() {
                if (confirm("정말 삭제하시겠습니까?")) {
                    history.back();
                }
            }
        </script>

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
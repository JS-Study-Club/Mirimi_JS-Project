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
    <a href="notice_writing.php" class="menu">
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
    <div id="input-date">
        
    </div>
</div>
<a href="login.php" id="mypage_icon">
    <div id="mypage_img">
        <img src="../img/eva_person-outline.png">
    </div>
</a>
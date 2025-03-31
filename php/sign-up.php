<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 회원가입</title>
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@4.0.1/reset.min.css" />
    <script src="../js/regist_check.js"></script>
</head>

<body>
    <div id="total-screen">
        <img src="../img/js_logo.png" alt="js-logo" id="top-js-logo">
        <div id="input-set">
            <div id="form-set">
                <form action="sing-up.php" method="post" class="form" id="regist_form" name="regist_form"
                    onsubmit="sendit()">
                    <div class="input-container">
                        <input class="input-box" type="text" maxlength="4" required placeholder=" " id="user_grade"
                            name="user_grade">
                        <label for="grda" class="signin-label">학번</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="text" maxlength="5" required placeholder=" " id="user_name"
                            name="user_name">
                        <label for="name" class="signin-label">이름</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="text" maxlength="20" required placeholder=" " id="user_id"
                            name="user_id">
                        <label for="user-id" class="signin-label">ID</label>
                    </div>
                    <div id="id_check">
                        <input type="button" id="check_button" value="ID 중복체크" onclick="checkId();">
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="password" maxlength="20" required placeholder=" " id="user_pw"
                            name="user_pw">
                        <label for="password" class="signin-label">PW</label>
                    </div>
                    <button id="login-button">
                        <p class="login-text">회원가입</p>
                    </button>
                </form>
            </div>
        </div>
        <div>
            <a href="index.php" id="go-back" class="else-button">뒤로가기</a> |
            <a href="login.php" class="else-button">로그인</a>
        </div>
    </div>

</body>

</html>
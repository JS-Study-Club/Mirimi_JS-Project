<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 회원가입</title>
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@4.0.1/reset.min.css" />
    <script src="../js/regist_check.js"></script>
    <script>
        function getinfo() {
            if (grade_sendit() && id_sendit() && pw_sendit()) {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
</head>

<body>
    <div id="total-screen">
        <img src="../img/js_logo.png" alt="js-logo" id="top-js-logo">
        <div id="input-set">
            <div id="form-set">
                <form action="sing-up.php" method="post" class="form" id="regist_form" name="regist_form"
                    onsubmit="return getinfo()">
                    <div class="input-container">
                        <input class="input-box" type="text" required placeholder=" " id="user_id"
                            name="user_id">
                        <label for="user-id" class="signin-label">ID</label>
                    </div>
                    <div class="id_check">
                        <button type="button" onclick="checkId()" id="check_button">아이디 중복체크</button>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="password" required placeholder=" " id="user_pw"
                            name="user_pw">
                        <label for="password" class="signin-label">PW</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="text" maxlength="4" required placeholder=" " id="user_grade"
                            name="user_grade">
                        <label for="grda" class="signin-label">학번</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="text" required placeholder=" " id="user_name"
                            name="user_name">
                        <label for="name" class="signin-label">이름</label>
                    </div>
                    
                    <button id="login-button">
                        <p class="login-text">회원가입</p>
                    </button>
                </form>
            </div>
        </div>
        <div>
            <a href="index.php" id="go-back" class="else-button">돌아가기</a> |
            <a href="login.php" class="else-button">로그인</a>
        </div>
    </div>

</body>

</html>
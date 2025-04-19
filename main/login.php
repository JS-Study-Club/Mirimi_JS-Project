<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 로그인</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@4.0.1/reset.min.css" />
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo "<script>
        location.href = \"my-page.php\";
        </script>";
    } else {
        ?>
        <div id="total-screen">
            <img src="../img/js_logo.png" alt="js-logo" id="top-js-logo">
            <div id="input-set">
                <div id="form-set">
                    <form action="../php/login_proc.php" method="post" class="form" onsubmit="return login_check()">
                        <div class="input-container">
                            <input class="input-box" type="text" placeholder=" " id="user-id" name="user-id">
                            <label for="user-id" class="signin-label">ID</label>
                        </div>
                        <div class="input-container">
                            <input class="input-box" type="password" placeholder=" " id="user-pw" name="user-pw">
                            <label for="user-pw" class="signin-label">PW</label>
                        </div>
                        <p><input type="submit" value="로그인" id="login-button" class="login-text"></p>
                    </form>
                </div>
            </div>
            <div>
                <a onclick="window.history.back()" id="go-back" class="else-button">돌아가기</a> |
                <a href="sign-up.php" class="else-button">회원가입</a>
            </div>
        </div>
        <script>
            function login_check() {
                var userid = document.getElementById("user-id").value;
                var userpw = document.getElementById("user-pw").value;
                //alert(`${userid.value} / ${userpw.value}`);
                if (userid == "") {
                    alert("아이디를 입력해 주세요");
                    return false;
                }
                if (userpw == "") {
                    alert("비밀번호를 입력해 주세요");
                    return false;
                }
                if (userid.includes(`'`) || userid.includes(`"`)) {
                    alert(`따옴표 혹은 쌍따옴표는 허용되지 않습니다`);
                    return false;
                }
                

                return true;
            };
        </script>
    </body>

    </html>
    <?php
    }
    ?>
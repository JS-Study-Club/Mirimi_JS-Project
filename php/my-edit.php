<?php
session_start();
$user_grade = $_SESSION['grade'];
$user_class = $_SESSION['class'];
$user_name = $_SESSION['name'];
$user_id = $_SESSION['id'];
//$user_pw = $_SESSION['pw'];
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirimi - 회원 정보 수정</title>
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@4.0.1/reset.min.css" />
</head>

<body>
    <div id="total-screen">
        <img src="../img/js_logo.png" alt="js-logo" id="top-js-logo">
        <div id="input-set">
            <div id="form-set">
                <form action="my-edit_proc.php" method="post" class="form" id="edit_form" name="edit_form"
                    onsubmit="return getinfo()">
                    <div class="input-container">
                        <input class="input-box" type="text" required placeholder=" " id="user_id" name="user_id"  disabled=true value="<?php echo $user_id; ?>">
                        <label for="user-id" class="signin-label">ID</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="text" maxlength="5" required placeholder=" " id="user_name" name="user_name" value="<?php echo $user_name; ?>">
                        <label for="name" class="signin-label">이름</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="number" min="1" max="3" required placeholder=" " id="user_grade" name="user_grade" value="<?php echo $user_grade; ?>">
                        <label for="class" class="signin-label">학년</label>
                    </div>
                    <div class="input-container">
                        <input class="input-box" type="number" min="1" max="6" required placeholder=" " id="user_class" name="user_class" value="<?php echo $user_class; ?>">
                        <label for="grade" class="signin-label">반</label>
                    </div>
                    

                    <button id="login-button">
                        <p class="login-text">저장하기</p>
                    </button>
                </form>
            </div>
        </div>
        <div>
            <a href="my-page.php" id="go-back" class="else-button">돌아가기</a>
        </div>
    </div>

</body>

</html>
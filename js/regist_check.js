

function checkId() {
    var left = Math.ceil((window.screen.width - 500) / 2);
    var top = Math.ceil((window.screen.height - 300) / 2);
    var userid = document.getElementById("user-id").value;
    var win = window.open("regist_proc.php?userid=" + userid, "Idcheck", `width=500, height=300, top=${top}, left=${left}`);
}

function grade_sendit() {
    const regex = /^[1-3][1-6][0-9]{2}$/;
    const user_grade = document.regist_form.user_grade.value;

    if (regex.test(user_grade)) {
        let gradeNum = user_grade.charAt(0); //학년
        let classNum = user_grade.charAt(1); //반

        console.log(`학년: ${gradeNum}, 반: ${classNum}`);
    } else {
        alert("올바르지 않은 학번입니다.");
        return false;
    }

    return true;
}

function id_sendit() {
    const regex1 = /^[a-zA-Z0-9]+$/;
    const regex2 = /^[0-9]+$/;
    //const user_name = document.regist_form.user_name.value;
    const user_id = document.regist_form.user_id.value;

    if (regex1.test(user_id)) {
        if (user_id.length >= 4 && user_id.length <= 16) {
            if (!regex2.test(user_id)) {
                return true;
            }
            else {
                alert("아이디는 영문이 포함되어야 합니다.");
            }
        }
        else {
            alert("아이디는 4글자 이상, 16자 이하만 가능합니다.");
        }
    }
    else {
        alert("아이디는 영어와 숫자로만 이루어져야 합니다.");
    }


    return false;
}

function pw_sendit() {
    const regex1 = /^[a-zA-Z0-9]+$/;
    const regex2 = /^[0-9]+$/;

    const user_pw = document.regist_form.user_pw.value;

    if (regex1.test(user_pw)) {
        if (user_pw.length >= 4 && user_pw.length <= 16) {
            if (!regex2.test(user_pw)) {
                return true;
            }
            else {
                alert("비밀번호는 영문이 포함되어야 합니다.");
            }
        }
        else {
            alert("비밀번호는 4글자 이상, 16자 이하만 가능합니다.");
        }
    }
    else {
        alert("비밀번호는 영어와 숫자로만 이루어져야 합니다.");
    }

    return false;
}
var userid;

function checkId() {
    var left = Math.ceil((window.screen.width - 500) / 2);
    var top = Math.ceil((window.screen.height - 300) / 2);
    userid = document.getElementById("user_id").value;
    var win = window.open(`../php/duplicated_check.php?userid=${userid}`, "Idcheck", `width=500, height=300, top=${top}, left=${left}`);
}

function grade_sendit() {
    const regex = /^[1-3][1-6][0-9]{2}$/;
    const user_grade = document.regist_form.user_grade.value;

    if (regex.test(user_grade)) {
        let gradeNum = user_grade.charAt(0); //학년
        let classNum = user_grade.charAt(1); //반

        //console.log(`학년: ${gradeNum}, 반: ${classNum}`);
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
        if (!regex2.test(user_id)) {
            return true;
        }
        else {
            alert("아이디는 영문이 포함되어야 합니다.");
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
        if (!regex2.test(user_pw)) {
            return true;
        }
        else {
            alert("비밀번호는 영문이 포함되어야 합니다.");
        }
    }
    else {
        alert("비밀번호는 영어와 숫자로만 이루어져야 합니다.");
    }

    return false;
}

function joinCheck() {
    const temp = document.getElementById("user_id").value;
    // console.log(temp);
    // console.log(userid);
    if (temp != userid) {
        alert("아이디 중복 체크를 해 주십시오");
        return false;
    }
    return true;
}
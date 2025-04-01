const regex = /^[1-3][1-6][0-9]{2}$/;

function checkId() {
    var left = Math.ceil((window.screen.width - 500) / 2);
    var top = Math.ceil((window.screen.height - 300) / 2);
    var userid = document.getElementById("user-id").value;
    var win = window.open("regist_proc.php?userid=" + userid, "Idcheck", `width=500, height=300, top=${top}, left=${left}`);
}

const sendit = () => {
    const user_grade = document.regist_form.user_grade.value;
    const user_name = document.regist_form.user_name.value;
    const user_id = document.regist_form.user_id.value;
    const user_pw = document.regist_form.user_pw.value;

    if (regex.test(user_grade)) {
        let gradeNum = user_grade.charAt(0); //학년
        let classNum = user_grade.charAt(1); //반

        console.log(`학년: ${gradeNum}, 반: ${classNum}`);
    } else {
        console.log("올바르지 않은 학번입니다.");
    }


}
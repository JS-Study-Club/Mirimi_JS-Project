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
    // if ()
}
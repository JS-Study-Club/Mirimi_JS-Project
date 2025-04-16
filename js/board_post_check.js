function title_check() {
    const title = document.getElementById("title_text");
    if (title.value.trim() != "") {
        return true;
    }
    alert("제목을 3자 이상 입력해 주십시오");
    return false;
}

function contents_check() {
    const contents = document.getElementById("contents_text");
    if (contents.value.trim() != "") {
        return true;
    }
    alert("내용을 입력해 주십시오");
    return false;
}
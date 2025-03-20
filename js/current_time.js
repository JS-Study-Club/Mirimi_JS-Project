function current_time() {
    const noww = new Date();
    const hours = noww.getHours();
    const minutes = String(noww.getMinutes()).padStart(2, "0"); //0을 붙여서 두 자릿수 유지

    document.getElementById("date2").innerText = `${noww.getFullYear()}.${noww.getMonth() + 1}.${noww.getDate()}`;
    document.getElementById("ampm").innerText = hours >= 12 ? "오후" : "오전";
    document.getElementById("time").innerText = `${String(hours % 12 || 12).padStart(2, "0")}:${minutes}`;
}
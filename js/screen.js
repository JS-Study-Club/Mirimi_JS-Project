
function background() {
    let now = new Date().getHours();
    console.log(now);
    let imageContainer = document.getElementById("moon");
    let img = document.createElement("img");
    img.style.width = "3vw";
    let time_box = document.getElementById("blue_box");
    let box = document

    if (now >= 6 && now < 18) {
        document.body.style.background = "linear-gradient(to bottom, rgba(168, 251, 255, 0.48), #FFFFFF)";
        img.src = "../img/day.png";
        time_box.style.backgroundColor = "#7ABFFF";
        time_box.style.color = "#000000";
    } else {
        document.body.style.background = "linear-gradient(to bottom, #223056, #FFFFFF)";
        time_box.style.backgroundColor = "#2C4982";
        time_box.style.color = "#ffffff"
        img.src = "../img/moon.png";
    }
    document.body.style.backgroundAttachment = "fixed";
    imageContainer.appendChild(img);
}

function current_time() {
    const noww = new Date();
    const hours = noww.getHours();
    const minutes = String(noww.getMinutes()).padStart(2, "0"); //0을 붙여서 두 자릿수 유지

    document.getElementById("date2").innerText = `${noww.getFullYear()}.${noww.getMonth() + 1}.${noww.getDate()}`;
    document.getElementById("ampm").innerText = hours >= 12 ? "오후" : "오전";
    document.getElementById("time").innerText = `${String(hours % 12 || 12).padStart(2, "0")}:${minutes}`;
}
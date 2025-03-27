
function background(){
    let now = new Date().getHours();
    console.log(now);
    let imageContainer = document.getElementById("moon");
    let img = document.createElement("img");
    img.style.width = "3vw";
    let time_box = document.getElementById("blue_box");
    let box = document

    if(now >= 6 && now < 18){
        document.body.style.background = "linear-gradient(to bottom, rgba(168, 251, 255, 0.48), #FFFFFF)";
        img.src = "../img/day.png";
        time_box.style.backgroundColor = "#7ABFFF";
        time_box.style.color = "#000000";
    } else{
        document.body.style.background = "linear-gradient(to bottom, #223056, #FFFFFF)";
        time_box.style.backgroundColor = "#2C4982";
        time_box.style.color = "#ffffff"
        img.src = "../img/moon.png";
    }
    document.body.style.backgroundAttachment = "fixed";
    imageContainer.appendChild(img);
}


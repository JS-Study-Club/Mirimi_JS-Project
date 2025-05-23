

function getMealInfo(date) {
  const API_KEY = "90de860d4ab54f7eb75640bf431149a4";
  const URL = "https://open.neis.go.kr/hub/mealServiceDietInfo";
  const ATPT_OFCDC_SC_CODE = "B10";   //서울 특별시 교육청
  const SD_SCHUL_CODE = "7011569";
  const TYPE = "json";
  const dateData = date;
  const api_url = `https://open.neis.go.kr/hub/mealServiceDietInfo?ATPT_OFCDC_SC_CODE=${ATPT_OFCDC_SC_CODE}&SD_SCHUL_CODE=${SD_SCHUL_CODE}&KEY=${API_KEY}&MLSV_YMD=${dateData}&Type=${TYPE}`;
  console.log(dateData);


  fetch(api_url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      const breakfastMenuUL = document.getElementById("breakfastMenu");
      const lunchMenuUL = document.getElementById("lunchMenu");
      const dinnerMenuUL = document.getElementById("dinnerMenu");

      const currentTimeP = document.getElementById("current_time_text");
      current_time_text.innerHTML = '';
      current_time_text.innerHTML += timeDesign(dateData);

      // 초기화
      breakfastMenu.innerHTML = '';
      lunchMenu.innerHTML = '';
      dinnerMenu.innerHTML = '';


      if (!data.mealServiceDietInfo) {
        return;
      }

      const menuData = data.mealServiceDietInfo[1].row;

      console.log(menuData);

      menuData.forEach(menuRow => {
        const { MMEAL_SC_NM, DDISH_NM } = menuRow;
        const menuList = DDISH_NM.replace(/\([^()]*\)/g, '')
          .replace(/\./g, '')
          .replace(/\*/g, '')
          .split('<br/>');

        const menuItems = menuList.map(item => `<li>${item}</li>`).join('');

        switch (MMEAL_SC_NM) {
          case '조식':
            breakfastMenu.innerHTML += menuItems;
            break;
          case '중식':
            lunchMenu.innerHTML += menuItems;

            break;
          case '석식':
            dinnerMenu.innerHTML += menuItems;
            break;
        }


      });
    })
    .catch(error => {
      console.error('Error fetching data:', error);
      // 에러 메시지를 사용자에게 표시하거나 다른 처리를 수행
    });

}


function timeDesign(dateData) {
  var str_date = dateData.toString();
  var str_year = str_date.substring(0, 4);
  var str_month = str_date.substring(4, 6);
  var str_day = str_date.substring(6, 8);
  return `${str_year}년 ${str_month}월 ${str_day}일`;
}

var button = document.getElementsByClassName("button");
function handleClick(event) {

  if (event.target.classList[1] === "clicked") {
    event.target.classList.remove("clicked");
  }
  else {
    for (var i = 0; i < button.length; i++) {
      button[i].classList.remove("clicked");
      button[i].classList.add("non_clicked")
    }

    event.target.classList.remove("non_clicked");
    event.target.classList.add("clicked");
  }
}

function init() {
  for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("click", handleClick);
  }
}

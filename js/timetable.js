function getTimeTable(grade, class_nm) {
    const API_KEY = "90de860d4ab54f7eb75640bf431149a4";
    const URL = "https://open.neis.go.kr/hub/hisTimetable";
    const ATPT_OFCDC_SC_CODE = "B10";   //서울 특별시 교육청
    const SD_SCHUL_CODE = "7011569";
    const TYPE = "json";
    const AY = "2025";
    const SEM = "1";
    const GRADE = grade;
    const CLASS_NM = class_nm;
    var ALL_TI_YMD = mondayDate();

    function fetchTimetable(dayCount) {
        if (dayCount > 4) return;  // 금요일까지 요청 완료하면 종료

        console.log(ALL_TI_YMD);

        let api_url = `https://open.neis.go.kr/hub/hisTimetable?KEY=${API_KEY}&ATPT_OFCDC_SC_CODE=${ATPT_OFCDC_SC_CODE}&SD_SCHUL_CODE=${SD_SCHUL_CODE}&AY=${AY}&SEM=${SEM}&ALL_TI_YMD=${ALL_TI_YMD}&GRADE=${GRADE}&CLASS_NM=${CLASS_NM}&Type=${TYPE}`;

        fetch(api_url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                let TimeTable = data.hisTimetable[1].row;

                console.log(TimeTable);

                TimeTable.forEach(element => {
                    console.log(element.ITRT_CNTNT);
                });

                // 다음 요일로 이동
                ALL_TI_YMD = dateplus(ALL_TI_YMD);
                fetchTimetable(dayCount + 1); // 다음 요일의 데이터를 요청
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    fetchTimetable(0);  // 첫 번째 요청 시작 (월요일)


}

function mondayDate() {
    let date = new Date();
    date.setDate(date.getDate() - date.getDay() + 1);
    return formatDate(date);
}

function dateplus(dateData) {
    let year = dateData.slice(0, 4);
    let month = dateData.slice(4, 6);
    let day = dateData.slice(6, 8);

    let date = new Date(year, month - 1, day);
    date.setDate(date.getDate() + 1);
    return formatDate(date);
}

function formatDate(date) {
    let year = date.getFullYear();
    let month = String(date.getMonth() + 1).padStart(2, '0');
    let day = String(date.getDate()).padStart(2, '0');
    return `${year}${month}${day}`;
}

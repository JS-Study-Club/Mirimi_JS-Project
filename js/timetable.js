function getTimeTable(grade, class_nm) {
    const API_KEY = "12223b6763eb4851acee4c8f03d4dba8	";
    const URL = "https://open.neis.go.kr/hub/hisTimetable";
    const ATPT_OFCDC_SC_CODE = "B10";   //서울 특별시 교육청
    const SD_SCHUL_CODE = "7011569";
    const TYPE = "json";
    const AY = "2025";
    const SEM = "1";
    const GRADE = grade;
    const CLASS_NM = class_nm;
    var ALL_TI_YMD = 20250321;
    const api_url =
        `https://open.neis.go.kr/hub/hisTimetable?ATPT_OFCDC_SC_CODE=${ATPT_OFCDC_SC_CODE}&SD_SCHUL_CODE=${SD_SCHUL_CODE}&AY=${AY}&SEM=${SEM}&ALL_TI_YMD=${ALL_TI_YMD}&GRADE=${GRADE}&CLASS_NM=${CLASS_NM}&Type=${TYPE}`;

    fetch(api_url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {

            console.log(data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            // 에러 메시지를 사용자에게 표시하거나 다른 처리를 수행
        });

}
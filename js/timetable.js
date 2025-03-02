async function loadTimetable() {
    const apiKey = "3c5713b5902f45c793337fb84e37760b"; // 인증키
    const educationCode = "B10"; 
    const schoolCode = "7011569"; 
    const grade = "1"; //값 입력 필요
    const className = "1";
    
    const today = new Date().toISOString().slice(0, 10).replace(/-/g, "");
    
    const apiUrl = `https://open.neis.go.kr/hub/hisTimetable?KEY=${apiKey}&Type=json&pIndex=1&pSize=100&ATPT_OFCDC_SC_CODE=${educationCode}&SD_SCHUL_CODE=${schoolCode}&GRADE=${grade}&CLASS_NM=${className}&ALL_TI_YMD=${today}`;

    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (!data || !data.timetable || data.timetable.length === 0) {
            console.error("시간표 데이터가 없습니다.");
            return;
        }

        const timetable = data.timetable;
        const table = document.querySelector("table");

        // 시간표 테이블 구성
        timetable.forEach((item) => {
            const period = parseInt(item.PERIO); 
            const dayIndex = new Date(item.ALL_TI_YMD).getDay();
            
            if (dayIndex >= 1 && dayIndex <= 5) { 
                table.rows[period].cells[dayIndex].innerText = item.ITRT_CNTNT; 
            }
        });
    } catch (error) {
        console.error("시간표 불러오기오류:", error);
    }
}

loadTimetable();

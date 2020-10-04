//時計用桁数調整
function set2fig(num) {
    // 桁数が1桁だったら先頭に0を加えて2桁に調整する
    var ret;
    if (num < 10) {
        ret = "0" + num;
    } else {
        ret = num;
    }
    return ret;
}

//時間リアルタイム表示用(右サイドバー)
function showClock_right() {
    var nowTime = new Date();
    var nowHour = set2fig(nowTime.getHours());
    var nowMin = set2fig(nowTime.getMinutes());
    var nowSec = set2fig(nowTime.getSeconds());
    var msg =
        "<span class='time_name'>現在時刻</span><span class='timezone'></span><br><span class='time'>" +
        nowHour +
        ":" +
        nowMin +
        ":</span><span class='second'>" +
        nowSec +
        "</span>";
    document.getElementById("Watch_right").innerHTML = msg;
}
setInterval("showClock_right()", 1000);
// ここまで

//時間リアルタイム表示用(ホームJST)
function showClock_main_JST() {
    var nowTime = new Date();
    var nowYear = nowTime.getFullYear();
    // getYearは2000年問題の関係で4桁返してくれないのでgetFullYearを使用
    var nowMonth = nowTime.getMonth() + 1;
    //getMonthは0~11で返ってくるので1足した
    var nowDate = nowTime.getDate();
    var nowHour = set2fig(nowTime.getHours());
    var nowMin = set2fig(nowTime.getMinutes());
    var nowSec = set2fig(nowTime.getSeconds());
    var msg =
        "<span class='main-timezone'>お使いのデバイスでの時刻</span><br><span class='main-date'>" +
        nowYear +
        "年" +
        nowMonth +
        "月" +
        nowDate +
        "日" +
        "</span><span class='main-hour'>" +
        nowHour +
        ":" +
        nowMin +
        ":<span class='main-second'>" +
        nowSec +
        "</span>";
    document.getElementById("Watch_main_JST").innerHTML = msg;
}
setInterval("showClock_main_JST()", 1000);
// ここまで

//時間リアルタイム表示用(ホームUTC)
function showClock_main_UTC() {
    var nowTime = new Date();
    var nowYear = nowTime.getUTCFullYear();
    // getYearは2000年問題の関係で4桁返してくれないのでgetFullYearを使用
    var nowMonth = nowTime.getUTCMonth() + 1;
    //getMonthは0~11で返ってくるので1足した
    var nowDate = nowTime.getUTCDate();
    var nowHour = set2fig(nowTime.getUTCHours());
    var nowMin = set2fig(nowTime.getUTCMinutes());
    var nowSec = set2fig(nowTime.getUTCSeconds());
    var msg =
        "<span class='main-timezone'>協定標準時(UTC)</span><br><span class='main-date'>" +
        nowYear +
        "年" +
        nowMonth +
        "月" +
        nowDate +
        "日" +
        "</span><span class='main-hour'>" +
        nowHour +
        ":" +
        nowMin +
        ":<span class='main-second'>" +
        nowSec +
        "</span>";
    document.getElementById("Watch_main_UTC").innerHTML = msg;
}
setInterval("showClock_main_UTC()", 1000);
// ここまで

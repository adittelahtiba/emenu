  $(document).ready(function(){
        startTime();


  function startTime() {
        var a_day = ['Minggu','Senin','Selasa','Rabu', 'Kamis', 'Jum&#39;at','Sabtu']
        var a_month = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
        var date = new Date().getDate();
        var _day = new Date().getDay();
        var _month = new Date().getMonth();
        var _year = new Date().getYear();
        var day = a_day[_day];
        var month = a_month[_month];
        var year = (_year < 1000) ? _year + 1900 : _year;
 
        var hour = new Date().getHours();
        var minute = checkTime(new Date().getMinutes());
        var second = checkTime(new Date().getSeconds()); 
        $('.date').html(day + ", " + date + " " + month + " " + year);
        $('.time').html(hour + ":" + minute + ":" + second + " WIB"); 
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
});
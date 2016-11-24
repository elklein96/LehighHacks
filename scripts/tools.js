$(function() {
    var deadline = 'December 3 2016 15:00:00 GMT-0500';

    function getTimeRemaining(endtime){
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor( (t/1000) % 60 );
        var minutes = Math.floor( (t/1000/60) % 60 );
        var hours = Math.floor( (t/(1000*60*60)) % 24 );
        var days = Math.floor( t/(1000*60*60*24) );
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
              clearInterval(timeinterval);
            }
        }
        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    initializeClock('clockdiv', deadline);
});
$(document).on("click touchstart", ".sidebar-brand", function(e) {
    $("html, body").animate({
        scrollTop: $('#').offset().top
    }, 1000, "easeInOutExpo");
}), $(document).on("click touchstart", "#li-gen", function(e) {
    $("html, body").animate({
        scrollTop: $('#hardware').offset().top
    }, 750, "easeInOutExpo");
}), $(document).on("click touchstart", "#li-env", function(e) {
    $("html, body").animate({
        scrollTop: $('#smart-env').offset().top
    }, 750, "easeInOutExpo");
}), $(document).on("click touchstart", "#li-vr", function(e) {
    $("html, body").animate({
        scrollTop: $('#vr').offset().top
    }, 750, "easeInOutExpo");
}), $(document).on("click touchstart", "#li-fin", function(e) {
    $("html, body").animate({
        scrollTop: $('#fin-tech').offset().top
    }, 750, "easeInOutExpo");
}), $(document).on("click touchstart", "#li-apps", function(e) {
    $("html, body").animate({
        scrollTop: $('#social-apps').offset().top
    }, 750, "easeInOutExpo");
});
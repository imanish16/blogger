// Flatpickr

var f1 = flatpickr(document.getElementById('basicFlatpickr'));
var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'));
var f3 = flatpickr(document.getElementById('dateTimeFlatpickrcus'));
//var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
    //mode: "range",
//});
var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultDate: "13:45"
});
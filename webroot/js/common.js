$(function() {

});

// Y-M-D
function createDate() {
    var now   = new Date(),
        date  = now.getDate().toString(),
        month = (now.getMonth()+1).toString(),
        year  = now.getFullYear().toString();

    if(date.length == 1) {
        date = '0' + date;
    }

    if(month.length == 1) {
        month = '0' + month;
    }
    return year + '-' + month + '-' + date;
}
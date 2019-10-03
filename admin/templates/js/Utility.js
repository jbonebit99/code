function toDate(dateStr) {
    var date = new Date(dateStr);
    var year = date.getFullYear();

    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;

    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;

    return day + '/' + month + '/' + year;
}

function coverMoney($value) {
    var result = parseFloat($value).toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
    return result;
}
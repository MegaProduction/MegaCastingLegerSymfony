let link = location.pathname
let select = link.substring(1)
$('.active').removeClass('active');
if (select == ""){
    $('#index').addClass('active');
}
else{
    $('#' + select).addClass('active');
}



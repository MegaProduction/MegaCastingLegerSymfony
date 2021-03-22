let link = location.pathname
let select = link.substring(1)
let activeLink = $('.active');
$('.active').removeClass('active');
$('#' + select).addClass('active');
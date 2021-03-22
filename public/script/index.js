let link = location.pathname
let select = link.substring(1)
let elementactive = $('#' + select);
let activeLink =$('.active');
console.log(activeLink);
if (!elementactive.hasClass("active")) {
    activeLink.removeClass("active");
    elementactive.addClass("active");
}

// Arrows behaviour for Posts

$(".acc").click(function(){
    $(this).find(".rotate").toggleClass("down");
});

// Slick Slider
$('.slider-oyster').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
    prevArrow: '<div class="left-slick-arrow"><span class="fa fa-angle-left"></span></div>',
	nextArrow: '<div class="right-slick-arrow"><span class="fa fa-angle-right"></span></div>'
});
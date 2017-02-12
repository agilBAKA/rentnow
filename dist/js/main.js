 
var heightHeader = $('header.header-section').outerHeight() - 100;
$(window).scroll(function () {
    var scolling  =  $(window).scrollTop();
    if(scolling > heightHeader){
        $('nav.navigation').addClass('navigation-block');
    }else {
        $('nav.navigation').removeClass('navigation-block');
    }
});

$("#where").on( "click", function(){
    var pos = $(this).offset();

    $("#where.active").removeClass("active");
    $(this).addClass("active");
    $(".destination-drop").css({
        "display": "block",
        "left": pos.left,
        "top": pos.top + $(this).innerHeight()
    });

    el = $(this);
    $(".destination-drop a").hover(function(){
        var dataVal = $(this).data("value");
        $("#where.active").val( dataVal );
    });
    $(".destination-drop a").click(function(){
        var dataVal = $(this).data("value");
        $("#where.active").val( dataVal );
        $(".destination-drop").hide();
    });

});
$(".destination-drop a").on("click", function(){
    $(".destination-drop").hide();
})

$('#register').on('click', function(){
    $('#modal-register').addClass('modal-show');
    $('body').addClass('no-scroll');
});

$('#btn-subscribe').on('click', function(e){
    e.preventDefault();
    $('#modal-subscribe').addClass('modal-show');
    $('body').addClass('no-scroll');
    return false;
});

$('.overlay').on('click', function(){
    $('#modal-register').removeClass('modal-show');
    $('body').removeClass('no-scroll');
});

$('.menu li a').on('click', function(){
    $(this).next().toggleClass('open-submenu');
});

$('#burger').on('click', function(){
    $(this).toggleClass('close');
    $('.menu').toggleClass('menu-open');
    $('body').toggleClass('no-scroll');
    $('.overlay-menu').toggleClass('overlay-menu-open');
});

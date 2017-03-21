$('#register').on('click', function(){
    $('#modal-register').addClass('modal-show');
    $('body').addClass('no-scroll');
});

$('#add-topup').on('click', function(){
    $('#modal-topup').addClass('modal-show');
    $('body').addClass('no-scroll');
});

$('#add-rent').on('click', function(){
    $('#modal-rent').addClass('modal-show');
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

$('.overlay').on('click', function(){
    $('#modal-topup').removeClass('modal-show');
    $('body').removeClass('no-scroll');
});


$('#finish-payment').on('click', function(){
    $('#modal-rent').removeClass('modal-show');
    $('body').removeClass('no-scroll');
});

$('.overlay').on('click', function(){
    $('#modal-rent').removeClass('modal-show');
    $('#modal-rent').addClass('is-work');
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
    $('.submenu').toggleClass('open-submenu');
});

 
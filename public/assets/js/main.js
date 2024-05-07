$(document).ready(function() {
    var myHash = location.hash; 
    location.hash = '';
    if(myHash[1] != undefined){
        console.log(myHash)
        $('html, body').animate({scrollTop: $(myHash).offset().top - 110}, 700); 
        location.hash = myHash;
    }
});

$('nav a').on('click', function(e){
    let ancor = $(this).attr('href')
    let path = window.location.pathname
    console.log(path)
    if((path == '/main.html') || (path == '/')) {
        $('html,body').stop().animate({ scrollTop: $(ancor).offset().top }, 1000);
        e.preventDefault();
    }
});



$('.show-more-logos').click(function(){
    let selector = $('.clients-block__logos');
    let curHeight = selector.height();
    if(curHeight == 380) {
        selector.css('height', 'auto');
        let autoHeight = selector.height();
        selector.height(curHeight).animate({height: autoHeight}, 1000);
    } else {
        selector.animate({height: 480}, 1000);
    }
})

$('.menu-btn').click(function(){
    $('.header-menu').slideToggle()
})

$('.send-form').click(function(e){
    e.preventDefault();

    let question = $('#question').val();
    let name = $('#name').val();
    let phone = $('#phone').val()
    phone = phone.replace(/[^0-9]/g, '');
    let err = 0;

    $('.hint').each(function(){
        $(this).css('display','none');
    })

    if(phone.length < 9){
        err++;
        $('#phone').parent().find('.hint').css('display','block');
    }

    if(name.length < 1){
        err++;
        $('#name').parent().find('.hint').css('display','block');
    }

    if(question.length < 10){
        err++;
        $('#question').parent().find('.hint').css('display','block');
    }

    if(err == 0) {
        phone = '+' + phone

        $.ajax({
            url: '/telegram',
            method: 'post',
            dataType: 'html',
            data: {
                question: question,
                name: name,
                phone: phone
            },
            success: function(data){
                $('.recall-form__title').remove()
                $('.recall-form__subtitle').remove()
                $('.recall-form__controls').remove()
                $('.send-form').remove()
                $('.success-block').css('display','flex')
            }
        });
    }
    
})
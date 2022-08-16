$(document).ready(function () {

    //ANIMATION
    function animation() {
        let  windowHeight = $(window).height();
        let scroll = $(window).scrollTop();
        $('.animation').each(function () {
            let position = $(this).offset().top;
            let animationName = $(this).attr('data-animation');
            let delay = $(this).attr('data-delay');

            if (position < windowHeight + scroll - 100) {
                $(this).addClass(animationName);
                $(this).css('animation-delay', delay);
            }
        });
    }


    $(window).scroll(function () {
        animation();
    });
    animation();


//form validator

    if ($('.contact-form').length > 0) {

        $('.contact-form').validate({

            highlight: function (element) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function (element) {
                $(element).addClass('is-valid').removeClass('is-invalid');
            },
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email:{
                    required:true,
                    email:true
                },
                subject:{
                    required:true,
                    minlength: 5
                    
                },
                message:{
                    required:true
                }
            },
            messages:{
                name:{
                    required:'The Name* field is required',
            minlength:'The Name* field should be min 3 characters long'
                },
                email:{
                    required:'The Email* field is required'
            
                },
                subject:{
                    required:'The Subject* field is required',
            minlength:'The Name* field should be min 5 characters long'
                },
                message:{
                    required:'The Message* field is required'
            
                }
            },
            
          errorElement: 'p',
            errorPlacement: function (error, element) {
                error.appendTo(element.closest(".form-group").find(".error-msg"));
            }

        });
    }
    
    //owl carousel
    
    if($('.team-member-slider').length > 0){
        $(".team-member-slider").owlCarousel({
            loop:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1,
                    margin:0
                },
                992:{
                    items:1,
                    margin:30
                }
            }
    });
}


});


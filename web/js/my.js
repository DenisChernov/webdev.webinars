/**
 * Created by denisch on 04.09.2015.
 */

$(window).on('scroll', function(){
    if ($(window).scrollTop() > 300) {
        $('.header_mnu').addClass('show_bg_header_mnu');
        $('.company_logo').css({
            width: "77px",
            height: "40px"
        });
        $('.header_mnu_buttons').css("margin", "10px 20px 0 0");
    }
    else {
        $('.header_mnu').removeClass('show_bg_header_mnu');
        $('.company_logo').css({
            width: "196px",
            height: "99px"
        });
        $('.header_mnu_buttons').css("margin", "30px 20px 0 0");
    }

    if ($(window).scrollTop() > 457) {

    }

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 560) {
        $('.speaker_data').css({
            opacity: "1",
            transform: 'translateY(-100px)'
        })
    }
    else {
        $('.speaker_data').css({
            opacity: "0",
            transform: 'translateY(0px)'
        })
    }
});

$('.scroll_to_speakers').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#speakers').offset().top},
        800
    );
});

$('#btn_speakers').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#speakers').offset().top},
        800
    );
});

$('#btn_main').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#main').offset().top},
        800
    );
});

$('#btn_listeners').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#listeners').offset().top},
        800
    );
});

$('#btn_register').on('click', function(){
    var width = $(window).width();
    var height = $(window).height();
    var left = ($(window).width() / 2) - (parseInt($('#form_register').css('width')) / 2);

    //$('.form_register').css({"left" : left, "top" : "100px"});
    $('#form_register').modal('show');
});

$(window).on('resize', function(){
    var left = ($(window).width() / 2) - (parseInt($('#form_register').css('width')) / 2);
    $('#form_register').css("left", left);

});

var file;
$('input[type=file]').change(function(){
    file = this.files;

    var data = new FormData();
    $.each(file, function(key, value){
        data.append(key, value);
    });

    $.ajax({
        url: '/uploadavatar.php?uploadfile',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(respond, textStatus, jqXHR) {
            if (typeof respond.error === 'undefined') {
                // все впорядке. файл загружен
                var file_path = respond.files;
                $.each(file_path, function(key, value) {
                        $('.avatar').prop("src", "/uploads/" + value);
                        file = value;
                });
            }
            else {
                console.log('php: ' + respond.error);
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log('ajax: ' + textStatus);
        }
    });

    console.log(file);
});

// запись пользователя
$('#btnRegisterUser').on('click', function(){
    email = $('#form_register').find('#email').val();
    pass = $('#form_register').find('#password').val();
    fio = $('#form_register').find('#fio').val();
    organisation = $('#form_register').find('#organisation').val();
    position = $('#form_register').find('#position').val();
    //file = $('#form_register').find('#avatar').val();

    regurl = "/app_dev.php/new/reguser/" + email + "/" + pass + "/" + file + "/" + fio +"/" + organisation + "/" + position;

    $.ajax({
        type: "POST",
        url: regurl,
        success: function(){
            $('.users_who_come').append(
                "<a href='#' class='view_full_info'>" +
                "<div class='reg_user_block table'>" +
                    "<div class='user_picture table-row animated_tablerow'>" +
                        "<img class='user_avatar' src='/uploads/" + file + "'/>" +
                    "</div>" +
                    "<div class='user_bio table-row'>" +
                        "<div class='user_fio'>" + fio + "</div>" +
                    "<div class='user_work'>" + position + " в " + organisation + "</div>" +
                "</div></div></a>"
            );
        }
    });

    $('#form_register').find('#email').val("");
    $('#form_register').find('#password').val("");
    $('#form_register').find('#fio').val("");
    $('#form_register').find('#organisation').val("");
    $('#form_register').find('#position').val("");
    $('#form_register').find('.avatar').prop("src", "/images/nofoto.png");
    $('#form_register').find('#avatar').val("");

    $('#form_register').modal('hide');
    $('html, body').animate({
            scrollTop: $('#listeners').offset().top},
        800
    );

});

$('.view_full_info').on('click', function(){

});
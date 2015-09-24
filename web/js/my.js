/**
 * Created by denisch on 04.09.2015.
 */

var arrWebinars = [];
var arrSpeakers = [];
var arrUsers = [];
var map;
var centerScreen;
var myMap;
var myPlacemark;

function init(){
    myMap = new ymaps.Map("map", {
        center: [68.95961673, 33.07782454],
        zoom: 16
    });

    myPlacemark = new ymaps.Placemark([68.95961673, 33.07782454], {
        hintContent: 'Семинар тут!',
        balloonContent: 'Отель Park-Inn'
    });

    myMap.geoObjects.add(myPlacemark);

    myMap.setType(YMaps.MapType.MAP);
}

$(function(){
    $('.datepicker').datetimepicker({
            locale: 'ru',
            format: 'DD MMMM YYYY',
            showTodayButton: true
        }
    );

    $('.timepicker').datetimepicker({
            locale: 'ru',
            format: 'HH:mm'
        }
    );

    $('input[type=file]').bootstrapFileInput();

    ymaps.ready(init);

    /**
     *  Приведение минут к верхнему индексу
     */
    $('.time_sup').each(function(){
        timeedit = $(this).text();
        l = timeedit.substr(0, timeedit.indexOf(':'));
        r = timeedit.substr(timeedit.indexOf(':') + 1, timeedit.length - timeedit.indexOf(':'));
        $(this).html(l + "<sup>" + r + "</sup>");
    });
    /**************************************/



    var countdown = new Countdown({
        year: 2015,
        month: 10,
        day: 14,
        hour: 10,
        minutes: 00,
        width: 440,
        height: 100,
        hideLabels : false,
        hideLine : false,
        style: "boring",
        inline: true,
        rangeHi: "month",
        target: "timer-area",
        //padding: 0.8,
        numbers : {
            font : "Arial",
            color : "#FFFFFF",
            bkgd : "#365D8B",
            rounded : 0.15, // percentage of size
            shadow : {
                x : 0, // x offset (in pixels)
                y : 3, // y offset (in pixels)
                s : 4, // spread
                c : "#000000", // color
                a : 0.4 // alpha
            }
        },
        labels : {
            font   : "Arial",
            color  : "#000000",
            offset : 0, // Number of pixels to push the labels down away from numbers.
            textScale  : 0.7, // Percentage of size
            weight : "normal" // < - no comma on last item!
        }
    });

});


$(window).on('scroll', function(){
    if ($(window).scrollTop() > 150) {
        $('.company_logo').css({
           height: "40px",
           padding: "0 0 0 10px"
        });
        $('.company_logo').attr("src", "/images/cpc-logo-full-color.png");
        $('.header_mnu').css({
           height: "40px",
           background: "rgba(255, 255, 255, 0.89)"
        });
        $('.header_mnu_buttons').css({
            margin : "10px 20px 0 0",
        });
        $('.header_mnu_btn').css({
           color: "orange"
        });
    }
    else {
        $('.company_logo').css({
            height: "70px",
            padding: "10px 0 0 10px"
        });
        $('.company_logo').attr("src", "/images/cpc-logo-white.png");
        $('.header_mnu').css({
            height: "80px",
            background: "rgba(255, 255, 255, 0)"
        });
        $('.header_mnu_buttons').css({
            margin : "30px 20px 0 0",
        });
        $('.header_mnu_btn').css({
            color: "white"
        });

    }

    if ($(window).scrollTop() > 457) {

    }

    //console.log($(window).scrollTop());
    console.log($(window).width());

/*    if ($(window).scrollTop() > 127) {
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
    }*/
});

$('.scroll_to_speakers').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#speakers').offset().top},
        800
    );
});

$('.scroll_to_anons').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#comming_webinar').offset().top},
        800
    );
});


$('#btn_speakers').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#speakers').offset().top},
        800
    );
});

$('#btn_anons').on('click', function(){
    $('html, body').animate({
            scrollTop: $('#comming_webinar').offset().top},
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

$('#btn_register_user').on('click', function(){
    var width = $(window).width();
    var height = $(window).height();
    var left = ($(window).width() / 2) - (parseInt($('#form_register').css('width')) / 2);

    //$('.form_register').css({"left" : left, "top" : "100px"});
    $('#form_register').modal('show');
});

$('#btn_newWebinar').on('click', function(){
    $('#form_createWebinar').modal('show');
});

$(window).on('resize', function(){
    var left = ($(window).width() / 2) - (parseInt($('#form_register').css('width')) / 2);
    $('#form_register').css("left", left);

    console.log($(window).width() + "x" + $(window).height());
    centerScreen = $(window).width() / 2 - $('.readmore').width() / 2;
    $('.readmore').css("left", centerScreen);
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
});

$('.upload_speakers_avatar').change(function(){
    file = this.files;

    img = $(this).parent().parent().find('.admin_speakers_avatar');
    console.log(img);
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
                    img.prop("src", "/uploads/" + value);
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
});

$('.upload_avatar').change(function(){
    file = this.files;


    img = $(this).parent().parent().find('.upload_avatar_img');
    console.log(img);
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
                    img.prop("src", "/uploads/" + value);
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
});

// запись пользователя
$('#btnRegisterUser').on('click', function(){
    email = $('#form_register').find('#email').val();
    //pass = $('#form_register').find('#password').val();
    fio = $('#form_register').find('#fio').val();
    organisation = $('#form_register').find('#organisation').val();
    position = $('#form_register').find('#position').val();
    if (position.length == 0)
        position = " ";
    isCommercial = $('#form_register').find("#section_commercial").prop("checked");
    isBudget = $('#form_register').find("#section_budget").prop("checked");
    //file = $('#form_register').find('#avatar').val();

    regurl = "/new/reguser/" + email + "/"
            + /*pass +*/ " /"
            + /*file +*/ " /"
            + fio + "/"
            + organisation + "/"
            + position + "/"
            + isCommercial + "/"
            + isBudget;

    $.ajax({
        type: "POST",
        url: regurl,
        success: function(){
            if (isCommercial) {
                $('.section_commercial').append(
                    "<a href='#' class='view_full_info'>" +
                    "<div class='reg_user_block table'>" +
//                    "<div class='user_picture table-row animated_tablerow'>" +
//                        "<img class='user_avatar' src='/uploads/" + file + "'/>" +
//                    "</div>" +
                    "<div class='user_bio table-row'>" +
                    "<div class='user_fio'>" + fio + "</div>" +
                    "<div class='user_work'>" + organisation + "</div>" +
                    "</div></div></a>"
                );
            }
            if (isBudget) {
                $('.section_budget').append(
                    "<a href='#' class='view_full_info'>" +
                    "<div class='reg_user_block table'>" +
//                    "<div class='user_picture table-row animated_tablerow'>" +
//                        "<img class='user_avatar' src='/uploads/" + file + "'/>" +
//                    "</div>" +
                    "<div class='user_bio table-row'>" +
                    "<div class='user_fio'>" + fio + "</div>" +
                    "<div class='user_work'>" + organisation + "</div>" +
                    "</div></div></a>"
                );
            }
        }
    });

    $('#form_register').find('#email').val("");
    $('#form_register').find('#password').val("");
    $('#form_register').find('#fio').val("");
    $('#form_register').find('#organisation').val("");
    $('#form_register').find('#position').val("");
    $('#form_register').find('#section_commercial').prop("checked", "false");
    $('#form_register').find('#section_budget').prop("checked", "false");
//    $('#form_register').find('.avatar').prop("src", "/images/nofoto.png");
//    $('#form_register').find('#avatar').val("");

    $('#form_register').modal('hide');
    $('html, body').animate({
            scrollTop: $('#listeners').offset().top},
        800
    );
});

$('.btnDeleteRecord').on('click', function(){
    var id;
    var deleteurl;



    switch ($(this).parent().parent().parent().parent().prop("id")) {
        case "table_webinars": {
            id = elmWebinars($(this))[0];
            deleteurl = "/delete/webinar/" + id;
            break;
        }
        case "table_speakers": {
            id = elmSpeakers($(this))[0];
            deleteurl = "/delete/speaker/" + id;
            break;
        }
        case "table_users": {
            id = elmUsers($(this))[0];
            deleteurl = "/delete/user/" + id;
            break;
        }
    }

    toDel = $(this).parent().parent();

    $.ajax({
       type: "POST",
       url: deleteurl,
       success: function(){
            toDel.remove();
       },
        error: function(){
            console.log("error delete by: " + deleteurl);
        }
    });


});

$('.view_full_info').on('click', function(){

});

$('#btnRegisterWebinar').on('click', function(){
   regurl = "/new/webinar/" +
       $('#form_createWebinar').find('#webinar_title').val() + "/" +
       $('#form_createWebinar').find('#webinar_dateBeg').val() + "/" +
       $('#form_createWebinar').find('#webinar_timeBeg').val() + "/" +
       $('#form_createWebinar').find('#webinar_regStatus').val() + "/" +
       $('#form_createWebinar').find('#webinar_description').val();

    console.log(regurl);
    $.ajax({
        type: "POST",
        url: regurl,
        success: function(){
            $('#table_webinars > tbody').append(
                '<tr class="table-row">' +
                '<td class="table-cell webinar_tbl_id">' +
                    '<label class="control-label">+</label>' +
                '</td>' +
                '<td class="table-cell webinar_tbl_title">' +
                    '<input class="form-control" value="' + $('#form_createWebinar').find('#webinar_title').val() + '"/>' +
                '</td>' +
                '<td class="table-cell webinar_tbl_dateBeg">' +
                    '<input class="form-control" value="' + $('#form_createWebinar').find('#webinar_dateBeg').val() + '"/>' +
                '</td>' +
                '<td class="table-cell webinar_tbl_timeBeg">' +
                    '<input class="form-control" value="' + $('#form_createWebinar').find('#webinar_timeBeg').val() + '"/>' +
                '</td>' +
                '<td class="table-cell webinar_tbl_registerStatus">' +
                    '<div class="selectContainer">' +
                        '<select name="language" class="form-control">' +
                            '<option value="0"' + ($('#form_createWebinar').find('#webinar_regStatus').val() == 0 ? ' selected' : '') + '>0 - Предстоит</option>' +
                            '<option value="1"' + ($('#form_createWebinar').find('#webinar_regStatus').val() == 1 ? ' selected' : '') + '>1 - В процессе</option>' +
                            '<option value="2"' + ($('#form_createWebinar').find('#webinar_regStatus').val() == 2 ? ' selected' : '') + '>2 - Окончен</option>' +
                        '</select>' +
                    '</div>' +
                '</td>' +
                '<td class="table-cell webinar_tbl_description">' +
                    '<textarea class="form-control" rows="4">' + $('#form_createWebinar').find('#webinar_description').val() +'</textarea>' +
                '</td>' +
                '</tr>'
            );
        }
    });

});

/*
    Хранит в себе массив элементов находящихся у родительской строки таблицы
    [id, title, dateBeg, timeBeg, registerStatus, description]
 */
function elmWebinars(parent){
            id = parent.parent().parent().find('.webinar_tbl_id > label').attr("id");
            title = parent.parent().parent().find('.webinar_tbl_title > input').val();
            dateBeg = parent.parent().parent().find('.datepicker > input').val();
            timeBeg = parent.parent().parent().find('.timepicker > input').val();
            registerStatus = parent.parent().parent().find('.webinar_tbl_registerStatus > div > select').val();
            description = parent.parent().parent().find('.webinar_tbl_description > textarea').val();
            pic = parent.parent().parent().find('.webinar_tbl_picture > img').attr("src");
            pic = pic.substr(pic.lastIndexOf("/") + 1, pic.length - pic.lastIndexOf("/"));

            return [id, title, dateBeg, timeBeg, registerStatus, description, pic];
}

function elmSpeakers(parent) {
            id = parent.parent().parent().find('.speakers_tbl_id > label').attr("id");
            avatar = parent.parent().parent().find('.speakers_avatar > img').attr("src");
            avatar = avatar.substr(avatar.lastIndexOf("/") + 1, avatar.length - avatar.lastIndexOf("/"));
            fio = parent.parent().parent().find('.speakers_tbl_fio > input').val();
            organisation = parent.parent().parent().find('.speakers_tbl_org > input').val();
            position = parent.parent().parent().find('.speakers_tbl_position > input').val();

            return [id, avatar, fio, organisation, position];
}

function elmUsers(parent) {
            id = parent.parent().parent().find('.users_tbl_id > label').attr("id");
            avatar = parent.parent().parent().find('.users_avatar > img').attr("id");
            fio = parent.parent().parent().find('.users_tbl_fio > input').val();
            organisation = parent.parent().parent().find('.users_tbl_org > input').val();
            position = parent.parent().parent().find('.users_tbl_position > input').val();
            email = parent.parent().parent().find('.users_tbl_email > input').val();
            password = parent.parent().parent().find('.users_tbl_password > input').val();

            return [id, avatar, fio, organisation, position, email, password];
}

$('.btnDoChange').on('click', function(){
    toggleEnabled($(this),false);

    switch ($(this).parent().parent().parent().parent().prop("id")) {
        case "table_webinars": {
            $('.no-pic').prop('visibility', 'visible');
            title = elmWebinars($(this))[1];
            dateBeg = elmWebinars($(this))[2];
            timeBeg = elmWebinars($(this))[3];
            registerStatus = elmWebinars($(this))[4];
            description = elmWebinars($(this))[5];
            arrWebinars[elmWebinars($(this))[0]] = [title, dateBeg, timeBeg, registerStatus, description];
            break;
        }
        case "table_speakers": {
            avatar = elmSpeakers($(this))[1];
            fio = elmSpeakers($(this))[2];
            organisation = elmSpeakers($(this))[3];
            position = elmSpeakers($(this))[4];
            
            arrSpeakers[elmSpeakers($(this))[0]] = [avatar, fio, organisation, position];
            break;
        }
        case "table_users": {
            avatar = elmUsers($(this))[1];
            fio = elmUsers($(this))[2];
            organisation = elmUsers($(this))[3];
            position = elmUsers($(this))[4];
            email = elmUsers($(this))[5];
            password = elmUsers($(this))[6];

            arrUsers[elmUsers($(this))[0]] = [avatar, fio, organisation, position, email, password];
            break;
        }
    }
});

function toggleEnabled(element, isDisabled) {
    /** блок кнопок
     *   $(this).parent();
     */

    /** строка таблицы
     *   $(this).parent().parent();
     */
    element.parent().find('.btnDoChange').prop("disabled", !isDisabled);
    element.parent().find('.btnApplyChange').prop("disabled", isDisabled);
    element.parent().find('.btnCancelChange').prop("disabled", isDisabled);
    element.parent().parent().find('.webinar_tbl_title > input').prop("readonly", isDisabled);
    element.parent().parent().find('.datepicker > input').prop("disabled", isDisabled);
    element.parent().parent().find('.timepicker > input').prop("disabled", isDisabled);
    element.parent().parent().find('.webinar_tbl_registerStatus > div > select').prop("disabled", isDisabled);
    element.parent().parent().find('.webinar_tbl_description > textarea').prop("readonly", isDisabled);
    element.parent().parent().find('#webinar_picture_upload').prop("disabled", isDisabled);

    element.parent().parent().find('.speakers_tbl_fio > input').prop("readonly", isDisabled);
    element.parent().parent().find('.speakers_tbl_org > input').prop("readonly", isDisabled);
    element.parent().parent().find('.speakers_tbl_position > input').prop("readonly", isDisabled);

    element.parent().parent().find('.users_tbl_fio > input').prop("readonly", isDisabled);
    element.parent().parent().find('.users_tbl_org > input').prop("readonly", isDisabled);
    element.parent().parent().find('.users_tbl_position > input').prop("readonly", isDisabled);
    element.parent().parent().find('.users_tbl_email > input').prop("readonly", isDisabled);
    element.parent().parent().find('.users_tbl_password > input').prop("readonly", isDisabled);
}

$('.btnApplyChange').on('click', function(){
    /** блок кнопок
     *   $(this).parent();
     */

    /** строка таблицы
     *   $(this).parent().parent();
     */
    switch ($(this).parent().parent().parent().parent().prop("id")) {
        case "table_webinars": {
            id = elmWebinars($(this))[0];
            title = elmWebinars($(this))[1];
            dateBeg = elmWebinars($(this))[2];
            timeBeg = elmWebinars($(this))[3];
            registerStatus = elmWebinars($(this))[4];
            description = elmWebinars($(this))[5];
            pic = elmWebinars($(this))[6];

            updateurl = "/update/webinar/"
                + id + "/"
                + title + "/"
                + dateBeg + "/"
                + timeBeg + "/"
                + registerStatus + "/"
                + description + "/"
                + pic;

            break;
        }

        case "table_speakers": {
            id = elmSpeakers($(this))[0];
            avatar = elmSpeakers($(this))[1];
            fio = elmSpeakers($(this))[2];
            organisation = elmSpeakers($(this))[3];
            position = elmSpeakers($(this))[4];

            updateurl = "/update/speakers/"
                + id + "/"
                + avatar + "/"
                + fio + "/"
                + organisation + "/"
                + position;
            break;
        }

        case "table_users": {
            id = elmUsers($(this))[0];
            avatar = elmUsers($(this))[1];
            fio = elmUsers($(this))[2];
            organisation = elmUsers($(this))[3];
            position = elmUsers($(this))[4];
            email = elmUsers($(this))[5];
            password =  elmUsers($(this))[6];
            updateurl = "/update/users/"
                + id + "/"
                + avatar + "/"
                + fio + "/"
                + organisation + "/"
                + position + "/"
                + email + "/"
                + password;

            break;
        }

    }


    $.ajax({
        type: "POST",
        url: updateurl
    });


    toggleEnabled($(this), true);
});

$('.btnCancelChange').on('click', function(){
    switch ($(this).parent().parent().parent().parent().prop("id")) {
        case "table_webinars": {
            id = elmWebinars($(this))[0];
            $(this).parent().parent().find('.webinar_tbl_title > input').val(arrWebinars[id][0]);
            $(this).parent().parent().find('.datepicker').data("DateTimePicker").date(arrWebinars[id][1]);
            $(this).parent().parent().find('.timepicker').data("DateTimePicker").date(arrWebinars[id][2]);
            $(this).parent().parent().find('.webinar_tbl_registerStatus > div > select').val(arrWebinars[id][3]);
            $(this).parent().parent().find('.webinar_tbl_description > textarea').val(arrWebinars[id][4]);
            break;
        }

        case "table_speakers": {
            id = elmSpeakers($(this))[0];
            $(this).parent().parent().find('.speakers_avatar > img').prop("src", "/uploads/" + arrSpeakers[id][0]);
            $(this).parent().parent().find('.speakers_tbl_fio > input').val(arrSpeakers[id][1]);
            $(this).parent().parent().find('.speakers_tbl_org > input').val(arrSpeakers[id][2]);
            $(this).parent().parent().find('.speakers_tbl_position > input').val(arrSpeakers[id][3]);

            break;
        }

        case "table_users": {

            id = elmUsers($(this))[0];

            $(this).parent().parent().find('.users_avatar > img').prop("src", "/uploads/" + arrUsers[id][0]);
            $(this).parent().parent().find('.users_tbl_fio > input').val(arrUsers[id][1]);
            $(this).parent().parent().find('.users_tbl_org > input').val(arrUsers[id][2]);
            $(this).parent().parent().find('.users_tbl_position > input').val(arrUsers[id][3]);
            $(this).parent().parent().find('.users_tbl_email > input').val(arrUsers[id][4]);
            $(this).parent().parent().find('.users_tbl_password > input').val(arrUsers[id][5]);

            break;
        }
    }


    toggleEnabled($(this), true);
});

$('.timepicker').on('click', function(){

});

$('.datapicker').on('click', function(){

});

$('#webinar_picture_upload').on('change', function(){
    file = this.files;
    var data = new FormData();
    $.each(file, function(key, value){
        data.append(key, value);
        console.log(value);
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
                    $('.no-pic').prop("src", "/uploads/" + value);
                    $(this).parent().find('.glyphicon').removeClass('glyphicon-circle-arrow-up');
                    console.log($(this).parent().find('.glyphicon'));
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
});

/*
$('#email').bind('input propertychange', function(){
    var enableRegister = false;
    $("input[type=text]").each(function(){
       if ($(this).val().length > 0) {
           enableRegister = true;
       } else {
           enableRegister = false;
           return false;
       }
    });

    if ($('#password').val().length == 0) {
        enableRegister = false;
    }


    $('#btnRegisterUser').prop("disabled", enableRegister);
}); */

$('.required_field').bind('input propertychange', function(){
    var disableRegister = true;
    $(".required_field").each(function(){
        if ($(this).val().length > 0) {
            disableRegister = false;
        } else {
            disableRegister = true;
            return false;
        }
    });

    if (!disableRegister) {
        if ($('#section_commercial').prop('checked') || $('#section_budget').prop('checked')) {
            disableRegister = false;
        } else {
            disableRegister = true;
        }
    }

    $('#btnRegisterUser').prop("disabled", disableRegister);
});

$('#section_commercial').on('click', function(){
   if ($(this).prop("checked")) {
       var disableRegister = true;
       $(".required_field").each(function(){
           if ($(this).val().length > 0) {
               disableRegister = false;
           } else {
               disableRegister = true;
               return false;
           }
       });
       $('#btnRegisterUser').prop("disabled", disableRegister);
   } else if ($('#section_budget').prop("checked") == false){
       $('#btnRegisterUser').prop("disabled", true);
   }

});

$('#section_budget').on('click', function(){
    if ($(this).prop("checked")) {
        var disableRegister = true;
        $(".required_field").each(function(){
            if ($(this).val().length > 0) {
                disableRegister = false;
            } else {
                disableRegister = true;
                return false;
            }
        });
        $('#btnRegisterUser').prop("disabled", disableRegister);
    } else if ($('#section_commercial').prop("checked") == false){
        $('#btnRegisterUser').prop("disabled", true);
    }

});
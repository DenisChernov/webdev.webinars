/**
 * Created by denisch on 26.08.2015.
 */

var modified = false;

/*
 * Добавление новой строки в таблицу файла locale
 */

$('.btnAdd').click(function(){
    console.log($(this).parent().find('table').prop('id'));
    var $count = $('tr.tr-row').length + 1;
    $('#' + $(this).parent().find('table').prop('id')).add("<tr class='tr-row'>" +
        "<td>" + $count + "</td>" +
        "<td><textarea class='form-control' id='fiTranslated' placeholder='Текст на русском' width='46%' style='word-wrap: break-word;'/></td>" +
        "<td id='fi'><textarea class='form-control' id='fiTranslated' placeholder='Перевод на финский' width='46%' style='word-wrap: break-word;'/></td>" +
        "<td width='2%' align='center'><input type='checkbox'>" +
        "</tr>").appendTo('#' + $(this).parent().find('table').prop('id'));
});

/*
 * Добавление записей в БД при потере фокуса
 */

/*
 * return newurl;
 */
function getParams(obj) {
    var id = obj.parent().parent().find("td:first").text();
    var ru = obj.parent().parent().find("td:eq(1) > label").text();
    if (ru == "")
        ru = obj.parent().parent().find("td:eq(1) > textarea").val();
    if (ru == "")
        ru = " ";
    var fi = obj.parent().parent().find("td:eq(2) > textarea").val();
    if (fi == "")
        fi = " ";
    var imported = obj.parent().parent().find('td:last > input').prop('checked');

    var newurl = "/translate/update/" + id + "/" + ru + "/" + fi + "/" + (imported ? "1" : "0") + "/" + obj.parent().parent().find('td:first').text();
    console.log(newurl);
    return newurl;
}

var tbody_0 = $('#tab_locale tbody');
tbody_0.on('blur', 'textarea',function(){

    getParams($(this));

    var id = $(this).parent().parent().find("td:first").text();
    var ru = $(this).parent().parent().find("td:eq(1) > label").text();
    if (ru == "")
        ru = $(this).parent().parent().find("td:eq(1) > textarea").val();
    if (ru == "")
        ru = " ";
    var fi = $(this).parent().parent().find("td:eq(2) > textarea").val();
    if (fi == "")
        fi = " ";
    var imported = $(this).parent().parent().find('td:last > input').prop('checked');

    var newurl = "/translate/update/" + id + "/" + ru + "/" + fi + "/" + (imported ? "1" : "0") + "/locale_fi";

    if (modified) {
        console.log("ajax open: %s", newurl);
        $.ajax({
           type: "POST",
            url: newurl
        });
    }
})
    /*
     * Разрешеине добавления, при изменении содержимого поля ввода
     */
   .on('input', 'textarea',function(e){
    if (e.target.value !== '') {
       console.log("changed %s", e.target.value.length);
   }
    modified = true;
});

var tbody_1 = $('#tab_mysql tbody');
tbody_1.on('blur', 'textarea',function(){
    //var id = $(this).parent().parent().attr('class');
    var id = $(this).parent().parent().find("td:first").text();
    var ru = $(this).parent().parent().find("td:eq(1) > label").text();
    if (ru == "")
        ru = $(this).parent().parent().find("td:eq(1) > textarea").val();
    if (ru == "")
        ru = " ";
    var fi = $(this).parent().parent().find("td:eq(2) > textarea").val();
    if (fi == "")
        fi = " ";
    var imported = $(this).parent().parent().find('td:last > input').prop('checked');

    var newurl = "/translate/update/" + id + "/" + ru + "/" + fi + "/" + (imported ? "1" : "0") + "/tab_mysql";

    if (modified) {
        console.log("ajax open: %s", newurl);
        $.ajax({
            type: "POST",
            url: newurl
        });
    }
})

    /*
     * Разрешеине добавления, при изменении содержимого поля ввода
     */
    .on('input', 'textarea',function(e){
        if (e.target.value !== '') {
            console.log("changed %s", e.target.value.length);
        }
        modified = true;
});

var tbody_2 = $('#tab_profile tbody');
tbody_2.on('blur', 'textarea',function(){
    //var id = $(this).parent().parent().attr('class');
    var id = $(this).parent().parent().find("td:first").text();
    var ru = $(this).parent().parent().find("td:eq(1) > label").text();
    if (ru == "")
        ru = $(this).parent().parent().find("td:eq(1) > textarea").val();
    if (ru == "")
        ru = " ";
    var fi = $(this).parent().parent().find("td:eq(2) > textarea").val();
    if (fi == "")
        fi = " ";
    var imported = $(this).parent().parent().find('td:last > input').prop('checked');

    var newurl = "/translate/update/" + id + "/" + ru + "/" + fi + "/" + (imported ? "1" : "0") + "/tab_profile";

    if (modified) {
        console.log("ajax open: %s", newurl);
        $.ajax({
            type: "POST",
            url: newurl
        });
    }
})

    /*
     * Разрешеине добавления, при изменении содержимого поля ввода
     */
    .on('input', 'textarea',function(e){
        if (e.target.value !== '') {
            console.log("changed %s", e.target.value.length);
        }
        modified = true;
    });

$('.setReadOnly').on('click', function(){
   $(this).parent().parent().find('td:eq(1) > textarea').prop('disabled', $(this).prop('checked'));
   $(this).parent().parent().find('td:eq(2) > textarea').prop('disabled', $(this).prop('checked'));

    var id = $(this).parent().parent().find("td:first").text();
    var ru = $(this).parent().parent().find("td:eq(1) > label").text();
    if (ru == "")
        ru = $(this).parent().parent().find("td:eq(1) > textarea").val();
    if (ru == "")
        ru = " ";
    var fi = $(this).parent().parent().find("td:eq(2) > textarea").val();
    if (fi == "")
        fi = " ";
    var imported = $(this).parent().parent().find('td:last > input').prop('checked');

    var newurl = "/translate/update/" + id + "/" + ru + "/" + fi + "/" + (imported ? "1" : "0") + "/" + $(this).parent().parent().parent().parent().parent().prop('id');

    $.ajax({
            type: "POST",
            url: newurl
    });

});

$('.btnUp').on('click', function(){
    $('html, body').animate({ scrollTop: 0}, 500);
});


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

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 560) {

    }
});

$('#scroll_to_speakers').on('click', function(){
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



$('#btnRegisterUser').on('click', function(){
    // запись пользователя

    email = $('#form_register').find('#email').val();
    pass = $('#form_register').find('#password').val();
    fio = $('#form_register').find('#fio').val();
    organisation = $('#form_register').find('#organisation').val();
    position = $('#form_register').find('#position').val();
    //file = $('#form_register').find('#avatar').val();



    regurl = "/app_dev.php/new/reguser/" + email + "/" + pass + "/" + file + "/" + fio +"/" + organisation + "/" + position;

    $.ajax({
        type: "POST",
        url: regurl
    });

    $('#form_register').find('#email').val("");
    $('#form_register').find('#password').val("");
    $('#form_register').find('#fio').val("");
    $('#form_register').find('#organisation').val("");
    $('#form_register').find('#position').val("");
    $('#form_register').find('.avatar').prop("src", "/images/nofoto.png");
});
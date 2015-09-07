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
    console.log($(window).scrollTop());
    if ($(window).scrollTop() > 200) {
        //$('.header_mnu').toggleEnable('show_bg_header_mnu');

    }
});


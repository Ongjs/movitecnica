﻿$.ajaxSetup({
    type: 'post',
    url: 'directory.php',
    error: function(data){ alert(data.responseText); }
});

$(document).ready(function(){
    var nav = eval($("#nav").height() - 30);
    if(nav > $("#content").height()) $("#content").css("min-height", nav + "px");
    var blank = ($(document).height() - $("#container").height()) - ($("#footer_admin").height() + 40);
    if(blank > 0) $("#content").css("min-height", ($("#content").height() + blank) + "px");

    var span_slide_status = new Array();
    $("#nav > ul > li").each(function(){
        var span_slide = $('<span />').click(function(){
            span_slide_status[$(this).parent().index()] = $(this).next().next().is(":visible");
            $(this).next().next().slideToggle();
        });
        if($("ul:visible", this).size()){
            span_slide_status[$(this).index()] = false;
            $(this).prepend(span_slide);
        }
    });
    $("#nav > ul > li").hover(function(){
        var span_slide = $('<span />').click(function(){
            span_slide_status[$(this).parent().index()] = $(this).next().next().is(":visible");
            $(this).next().next().slideToggle();
        });
        if($(this).html().search(/<\/ul>/) >= 0 && $("ul:hidden", this).size()) $(this).prepend(span_slide);
    }, function(){
        if($("ul:hidden", this).size() || span_slide_status[$(this).index()]) $("span", this).remove();
    });

    $("#form_login").submit(function(){
        if(!required('#username', 'Debe introducir un nombre de usuario.')) return false;
        if(!required('#password', 'Debe introducir una contraseña.')) return false;
        $.ajax({
            data: "mod=5&" + $(this).serialize()
        }).done(function(msg){
            if(msg != "") mo_error(msg);
            else document.location = "./";
        });
        return false;
    });
	
    $("#form_forgot_password").submit(function(){
        if(!required('#username2', 'Debe introducir un nombre de usuario.')) return false;
        $.ajax({
            data: "mod=6&" + $(this).serialize()
        }).done(function(msg){
            if(msg != "") mo_error(msg);
            else{
                $("#form_forgot_password, div.message").hide();
                $("div.error").remove();
                $("#form_login").fadeIn();
                $("div.message").html("Su contraseña ha sido enviada a su correo electrónico.").fadeIn();
            }
        });
        return false;
    });
    
    $("a.forgot_password").on("click", function(){
        $("#form_login").hide();
        $("div.error").remove();
        $("#form_forgot_password, div.message").fadeIn();
        return false;
    });
	
    $("a.login").on("click", function(){
        $("#form_forgot_password, div.message").hide();
        $("div.error").remove();
        $("#form_login").fadeIn();
        return false;
    });
	
    $("#header a.logout").click(function(){
        confirm("Está seguro que desea finalizar la sesión?", function(){
            $.ajax({ data: "mod=7" }).done(function(msg){
                document.location = "./"; 
            });
        });
        return false;
    });
});

function mo_error(text){
    if(!$("div.error").length) $("form:visible").before('<div class="error"></div>');
    $("div.error").hide().html('<strong>ERROR: </strong>' + text).fadeIn();
    if(location.href.search(/mod/) >= 0) $("html, body").animate({scrollTop: $("#content").offset().top}, 1000);
}

function mo_search(mod, fade_in){
    $.ajax({
        data: "mod=" + mod + "&search=" + $("#search").val() + "&select=" + $('#opt_cat :selected').val()
    }).done(function(html){
        if (fade_in) $("#list").hide();
        $("#list").html(html);
        if (fade_in) $("#list").fadeIn();
        Shadowbox.setup();
    });
}

function mo_addcat(mod, val, text, ext) {
    var td_label;
    $.ajax({
        data: "mod=" + mod + "&search=" + $("#search").val() + "&cat=" + val + (ext !== null ? "&ext=" + ext : "")
    }).done(function(html) {
        if (html === "") return;
        td_label = val === "" && text === "" ? '<label>Seleccione categoria a filtrar</label>' : '';
        $("#category").find('tbody').append($.parseHTML('<tr><td>' + td_label + '</td><td>' + html + '</td></tr>'));
        mo_style();
    });
}

function mo_list(mod, val){
    var add_data = $(".filter").length > 0 ? "&filter=" + $(".filter").val() : "";
    add_data += "&select=" + (val !== undefined ? val : $('#opt_cat :selected').val());
    $.ajax({
        data: "mod=" + mod + add_data
    }).done(function(html){
        $("#form, #list, .search, a.cancel").hide();
        $("#list").html(html);
        $(".search, #list, a.new").fadeIn();
        Shadowbox.setup();
        mo_style();
        $("textarea[class*=tinymce]").each(function(){ tinyMCE.execCommand('mceRemoveControl', false, $(this).attr("id")); });
        $("#content #list table.listing tbody tr:nth-child(odd)").addClass("odd");
        $("#content #list table.listing tbody tr").hover(
            function(){ $(this).addClass("hover"); },
            function(){ $(this).removeClass("hover"); }
        );
    });
}

function mo_new(mod, ncat, subcat){
    $.ajax({
        data: "mod=" + mod + "&select=" + $('#opt_cat :selected').val() + "&do=1&ncat=" + ncat + "&subcat=" + subcat
    }).done(function(html){
        if(html === ""){
            alert("No es posible crear un producto en la categoria actual");
        }else{   
            $("#form, .search, #list, a.new").hide();
            $("#form").html(html);
            $("#form, a.cancel").fadeIn();
            $.getScript("directory.php?mod=2");
            mo_style();
        }
    });
}

function mo_sub_cats(mod, id, val){
    $.ajax({
        data: "mod=" + mod + "&id=" + id + "&subs=1&hid=" + val
    }).done(function(html){
        $("#td_subs").html(html);
    });
}

function mo_update(mod, e, subcat){
    $.ajax({
        data: "mod=" + mod + "&select=" + $('#opt_cat :selected').val() + "&do=1&id=" + e.attr("id") + "&subcat=" + subcat
    }).done(function(html){
        if(html === ""){
            alert("No es posible crear un producto en la categoria actual");
        }else{
            $("#form, .search, a.new").hide();
            $("#list").empty();
            $("#form").html(html);
            $("#form, a.cancel").fadeIn();
            $.getScript("directory.php?mod=2");
            mo_style();
        }
    });
}

function mo_submit(mod, $do, ncat){
    if ($("textarea[class*=tinymce]").length > 0) tinyMCE.triggerSave();
    $.ajax({
        data: "mod=" + mod + "&do=" + $do + "&ncat=" + ncat + "&" + $("form").serialize()
    }).done(function(){ 
        mo_list(mod);
    });
}

function mo_submit_cat(mod, $do, category_value, $array){
    if ($("textarea[class*=tinymce]").length > 0) tinyMCE.triggerSave();
    $.ajax({
        data: "mod=" + mod + "&do=" + $do + "&ncat=" + category_value + "&" + $("form").serialize()
    }).done(function() {
        mo_list(mod, category_value); 
        $("#category").html('').append($.parseHTML('<tr><td><label>Introduzca el termino a buscar</label></td><td><input type="text" name="search" id="search" /></td></tr>'));
        for (var i = 0; i < $array.length; i++) {
            mo_addcat(mod, $array[i], '', $array[i + 1]);
        }
    });
}

function mo_status(mod, e){
    var value = e.attr("value");
    $.ajax({
        data: "mod=" + mod + "&do=3&id=" + e.attr("id") + "&value=" + value
    }).done(function(){
        e.attr("value", (value == 1 ? 0 : 1));
        e.attr("title", (value == 0 ? "Activate" : "Inactivate"));
        e.fadeOut(250, function(){ e.toggleClass("status_inactive").fadeIn(250); });
    });
}

function mo_delete(mod, e){
    confirm("Are you sure to delete the record?", function(){
        $.ajax({
            data: "mod=" + mod + "&do=4&id=" + e.attr("id")
        }).done(function(){
            e.parent().parent().fadeOut(function(){
                e.parent().parent().remove();
                $("#list tr").removeClass("odd").filter(":nth-child(odd)").addClass("odd");
                if($("#list tr").length == 1){
                    $('#list tbody').append('<tr><td colspan="10" class="row_error center">No se encontraron registros.</td></tr>');
                }
            });
        });
    });
}

function mo_style(){
    var width = 0;
    $("fieldset:visible > table > tbody > tr > td:first-child label").each(function(){ if($(this).width() > width) width = $(this).width(); });
    $("fieldset:visible > table > tbody > tr").addClass("texgray").each(function(){
        if($(this).children().filter(":nth-child(2)").size()){
            if($(this).children().filter(":nth-child(2)").html().search(/<input|<select|<textarea/) >= 0 && $(this).children().filter(":nth-child(2)").html().search(/type="hidden"/) < 0){
                $(this).children().filter(":nth-child(1)").attr("width", width + 10).css({"vertical-align": "top", "padding-top": 8});
            }else{
                $(this).children().attr("height", 34).css({"vertical-align": "top", "padding-top": 8});
                $(this).children().filter(":nth-child(1)").attr("width", width + 15);
            }
        }
    });
}

function mo_tinymce(){
    tinyMCE.init({
        mode : "textareas",
        theme : 'advanced', 
        skin : 'o2k7', 
        width: '100%', 
        height: '150px', 
        language : 'es', 
        docs_language : 'es', 
        skin_variant : 'silver', 
        editor_selector : "tinymce_mini", 
        document_base_url: 'http://www.movitecnica.com.pe/', 
        plugins: 'safari, pagebreak, style, layer, table, save, advhr, advimage, advlink, emotions, iespell, inlinepopups, insertdatetime, preview, media, searchreplace, print, contextmenu, paste, directionality, fullscreen, noneditable, visualchars, nonbreaking, xhtmlxtras, template, wordcount', 
        theme_advanced_buttons1 : 'bold, |, italic, |, underline, |, forecolor, |, link, |, unlink', 
        theme_advanced_buttons2: '', 
        theme_advanced_buttons3: '', 
        theme_advanced_toolbar_location: 'top', 
        theme_advanced_toolbar_align: 'left', 
        theme_advanced_resizing: false, 
        content_css : 'css/reset.css, css/text.css, style9d52.css'
    });
    tinyMCE.init({
        mode : "textareas",
        theme : 'advanced', 
        skin : 'o2k7', 
        width: '100%', 
        height: '450px', 
        language : 'es', 
        docs_language : 'es', 
        skin_variant : 'silver', 
        editor_selector : "tinymce", 
        document_base_url: 'http://www.movitecnica.com.pe/', 
        plugins : 'safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount', 
        theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect', 
        theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,selectall,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,|,insertdate,inserttime', 
        theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print', 
        theme_advanced_buttons4 : 'forecolor,backcolor,styleprops,|,insertlayer,moveforward,movebackward,absolute,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,|,template,|,preview,|,newdocument,|,fullscreen,|,code', 
        theme_advanced_toolbar_location : 'top', 
        theme_advanced_toolbar_align : 'left', 
        theme_advanced_statusbar_location : 'bottom', 
        plugin_insertdate_dateFormat : '%m-%d-%Y', 
        plugin_insertdate_timeFormat : '%H:%M:%S', 
        theme_advanced_resizing : false, 
        content_css : 'css/reset.css, css/text.css, style9d52.css', 
        file_browser_callback : 'mo_ajaxfilemanager'
    });
}

function mo_ajaxfilemanager(field_name, url, type, win){
    switch (type){
        case "image": break;
        case "media": break;
        case "flash": break;
        case "file":  break;
        default: return false;
    }
    tinyMCE.activeEditor.windowManager.open({
        url: "../lib/ajaxfilemanager/ajaxfilemanager.php?editor=tinymce&language=es",
        width: 800,
        height: 500,
        inline : "yes",
        close_previous : "no"
    },{
        window : win,
        input : field_name
    });	
    return false;
}

var key;
// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57 , '.' = 46, '-' = 45, ' ' = 32
function type_number(evt){
    (document.all) ? key = evt.keyCode : key = evt.which;
    return (key <= 13 || key == 46 || key == 45 || key == 32 || evt.ctrlKey || (key >= 48 && key <= 57));
}

function type_price(evt){
    (document.all) ? key = evt.keyCode : key = evt.which;
    return (key <= 13 || key == 46 || (key >= 48 && key <= 57));
}

function required(elem, msg, conten){
    if (conten == null) conten = "";
    if ($.trim($(elem).val()) == conten) { mo_error(msg); $(elem).focus(); return false; }
    return true;
}

function maxlength(elem, value, msg){
    if (msg == null) msg = "Debe introducir " + value + " caracteres.";
    if ($.trim($(elem).val()).length < value) { mo_error(msg); $(elem).focus(); return false; }
    return true;
}

function validateEmail(elem){
    if ($.trim($(elem).val()) != "" && !emailCheck($.trim($(elem).val()))) { $(elem).focus(); return false; }
    return true;
}

function emailCheck(email){
    var msg = "El correo electrónico es invalido.<br />";
    var atom = '\[^\\s\\(\\)<>@,;:\\\\\\\"\\.\\[\\]\]+';
    var word = "(" + atom + "|(\"[^\"]*\"))";
    var userPat = new RegExp("^" + word + "(\\." + word + ")*$");
    var domainPat = new RegExp("^" + atom + "(\\." + atom + ")*$");
    var matchArray = email.match(/^(.+)@(.+)$/);
    if (matchArray == null) {
        mo_error(msg + "(Verificar [@] y [.])");
        return false;
    }
    var user = matchArray[1];
    var domain = matchArray[2];
    if (user.match(userPat) == null) {
        mo_error(msg + "(Verificar datos antes de [@])");
        return false;
    }
    var IPArray = domain.match(/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/);
    if (IPArray != null) {
        for (var i = 1; i <= 4; i++) {
            if (IPArray[i] > 255) {
                mo_error(msg + "(Incorrecta IP de destino)");
                return false;
            }
        }
        return true;
    }
    if (domain.match(domainPat) == null) {
        mo_error(msg + "(Verificar datos despues de [@])");
        return false;
    }
    var atomPat = new RegExp(atom, "g");
    var domArr = domain.match(atomPat);
    var len = domArr.length;
    if (domArr[len - 1].length < 2 || domArr[len - 1].length > 3) {
        mo_error(msg + "(Verificar datos despues de [.])");
        return false;
    }
    if (len < 2) {
        mo_error(msg + "(Verificar datos despues de [.])");
        return false;
    }
    return true;
}
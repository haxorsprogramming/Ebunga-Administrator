// vue object
var divLogin = new Vue({
    el : '#divLogin',
    data : {

    },
    methods : {

    }
});

// inisialisasi
document.querySelector("#txtUsername").focus();

$("#pass").click(function() {
    $("#show").attr("type", "text");
    $(this).hide();
    $("#pass1").show();
});

$("#pass1").click(function() {
    $("#show").attr("type", "password");
    $(this).hide();
    $("#pass").show();
});

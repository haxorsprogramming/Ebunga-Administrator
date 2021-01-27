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
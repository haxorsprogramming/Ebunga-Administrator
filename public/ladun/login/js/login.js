// route
var rToLogin = server + "auth/login/proses";
// vue object
var divLogin = new Vue({
    el : '#divLogin',
    data : {

    },
    methods : {
      loginAtc : function()
      {
        let username = document.querySelector('#txtUsername').value;
        let password = document.querySelector('#txtPassword').value;
        let ds = {'username':username, 'password':password}
        axios.post(rToLogin, ds).then(function(res){
          let dr = res.data;
          console.log(dr);
        });
      }
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

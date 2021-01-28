// route
var rToLogin = server + "auth/login/proses";
var rToDashboard = server + "dashboard";
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
        if(username === '' || password === ''){
          pesanUmumApp('warning', 'Tolonglah ...', 'Isi username & passwordnya dong kakak ...');
        }else{
          let ds = {'username':username, 'password':password}
          document.querySelector('#btnLogin').classList.add('disabled');
          axios.post(rToLogin, ds).then(function(res){
            let dr = res.data;
            if(dr.status === 'no_user'){
              pesanUmumApp('warning', 'Failed!!!', 'Username tidak terdaftar ...');
              document.querySelector('#btnLogin').classList.remove('disabled');
              clearForm();
            }else if(dr.status === 'wrong_password'){
              pesanUmumApp('warning', 'Failed!!!', 'Username / password salah ...');
              document.querySelector('#btnLogin').classList.remove('disabled');
              clearForm();
            }else{
              window.location.assign(rToDashboard);
            }
          });
        }
      }
    }
});

// inisialisasi & fungsi
document.querySelector("#txtUsername").focus();

function clearForm()
{
  document.querySelector('#txtUsername').value = "";
  document.querySelector('#txtPassword').value = "";
  document.querySelector('#txtUsername').focus();
}

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

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

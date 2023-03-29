function validateEmail() {
    var email = document.getElementById('inputEmail_login').value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    var messEmail = document.getElementById('errorEmail_Login');
    if(atposition < 1 || dotposition < (atposition + 2)
            || (dotposition + 2) >= email.length) {
            messEmail.innerHTML = 'Vui lòng nhập email';
        return false;
    }
}

function validatePass() {
    var pass = document.getElementById('inputPass_Login').value;
    var mess = document.getElementById('errorPass_Login');
    if(pass == ""){
        mess.innerHTML = 'Pass không được để trống';
        return false;
    }
    if(pass.length < 6 || pass.length > 15){
        mess.innerHTML = 'Vui long nhập mật khẩu';
        return false;
    }else{
        mess.innerHTML = '';
    }
}
function validation_Login(){
    validateEmail();
    validatePass();
}

function validateName() {

}

function validateEmail_Register() {

}
function validatePhone() {

}
function validatePass_Register() {

}
function validate_Register() {
    validateName();
    validateEmail_Register();
    validatePhone();
    validatePass_Register();
}


















/*
function kiemtra() {
    var e = document.getElementById('email').value;
    var p = document.getElementById('pass').value;
    if( e == ""){
        document.getElementById('displayemail').innerHTML = '<i>Vui lòng nhập email</i>';
        return false;
    }
    if( p.length < 6 ){
        document.getElementById('checkpass').innerHTML = 'Vui lòng nhập password';
        return false;
    }
    return true;
}

function checkEmail() {
    var email = document.getElementById('email').value;
    var messemail = document.getElementById('displayemail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if( filter != email){
        alert("Nhập sai định dạng");
    }else {
        alert("Nhập đúng định dạng") 
    }
}
*/







function kiemtra() {
    var e = document.getElementById('email').value;
    var p = document.getElementById('pass').value;
    if( e == ""){
        document.getElementById('displayemail').innerHTML = '<i>Vui lòng nhập email</i>';
        return false;
    }
    if( p == ""){
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





function checkName(){
    switch(true){
        case document.getElementsByName("inputName")[0].value == '': 
            document.getElementById("alertName").innerHTML = '<i>Vui lòng nhập tên</i>';
            break;
        default:
            document.getElementById("alertName").innerHTML = '';
            break;
    }
}



function checkSex(){
    switch(true){
        case (document.getElementById('male').checked == false)
            && (document.getElementById('female').checked == false): 
            document.getElementById("alertSex").innerHTML = '<i>Vui lòng nhập giới tính</i>';
            break;
        default:
            document.getElementById("alertSex").innerHTML = '';
            break;
    }
}

function validateEmail(inputText){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.match(mailformat)) {return true;}
        else {return false;}
}

function checkEmail(){
    switch(true){
        case document.getElementsByName("inputEmail")[0].value == '': 
            document.getElementById("alertEmail").innerHTML = '<i>Vui lòng nhập Email</i>';
            break;
        case (validateEmail(document.getElementsByName("inputEmail")[0].value) == false):
            document.getElementById("alertEmail").innerHTML = '<i>Email không hợp lệ</i>';
            break;
        default:
            document.getElementById("alertEmail").innerHTML = '';
            break;
    }
}

function checkStreet(){
    switch(true){
        case document.getElementsByName("inputStreet")[0].value == '':
            document.getElementById("alertStreet").innerHTML = '<i>Vui lòng nhập địa chỉ</i>';
            break;
        default:
            document.getElementById("alertStreet").innerHTML = '';
            break;
    }
}

function checkCity(){
    switch(true){
        case document.getElementsByName("inputCity")[0].value == '':
            document.getElementById("alertCity").innerHTML = '<i>Vui lòng nhập tên công ty</i>';
            break;
        default:
            document.getElementById("alertCity").innerHTML = '';
            break;
    }
}

function checkRegion(){
    switch(true){
        case document.getElementById("inputRegion").value == 'NoValue':
            document.getElementById("alertRegion").innerHTML = '<i>Vui lòng nhập miền</i>';
            break;
        default:
            document.getElementById("alertRegion").innerHTML = '';
            break;
    }
}

function validateZIP(inputText){
    var zipformat = /^\d{5}$/;
    if(inputText.match(zipformat)) {return true;}
        else {return false;}
}

function checkZIP(){
    switch(true){
        case document.getElementsByName("inputZIP")[0].value == '': 
            document.getElementById("alertZIP").innerHTML = '<i>Vui lòng nhập Zip</i>';
            break;
        case (validateZIP(document.getElementsByName("inputZIP")[0].value) == false):
            document.getElementById("alertZIP").innerHTML = '<i>ZIP phải chỉ có 5 số</i>';
            break;
        default:
            document.getElementById("alertZIP").innerHTML = '';
            break;
    }
}

function validateDateFormat(inputText){
    var dateformat = /^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/;
    if(inputText.match(dateformat)) {return true;}
        else {return false;}
}

function validateDateRange(inputText){
        // Parse the date parts to integers
        var parts = inputText.split("/");
        var day = parseInt(parts[1], 10);
        var month = parseInt(parts[0], 10);
        var year = parseInt(parts[2], 10);
    
        // Check the ranges of month and year
        if(year < 1000 || year > 3000 || month <= 0 || month > 12)
            return false;
    
        var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
    
        // Adjust for leap years
        if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
            monthLength[1] = 29;
    
        // Check the range of the day
        return day > 0 && day <= monthLength[month - 1];
}

function checkBirthday(){
    switch(true){
        case document.getElementsByName("inputBirthday")[0].value == '': 
            document.getElementById("alertBirthday").innerHTML = '<i>Birthday không thể trống</i>';
            break;
        case (validateDateFormat(document.getElementsByName("inputBirthday")[0].value) == false):
            document.getElementById("alertBirthday").innerHTML = '<i>Birthday không hợp dạng (MM/DD/YYYY)</i>';
            break;
        case (validateDateRange(document.getElementsByName("inputBirthday")[0].value) == false):
            document.getElementById("alertBirthday").innerHTML = '<i>Birthday có giá trị không phù hợp</i>';
            break;
        default:
            document.getElementById("alertBirthday").innerHTML = '';
            break;
    }
}



function validateForm(){
    checkName();
    checkSex();
    checkEmail();
    checkBirthday();
    checkStreet();
    checkCity();
    checkRegion();
    checkZIP();
}

function clearForm(){
    document.getElementById("inputName").value = "";
    document.querySelector('input[name="sex"]:checked').checked = false;
    document.getElementById("inputEmail").value = "";
    document.getElementById("inputBirthday").value = "";
    document.getElementById("inputStreet").value = "";
    document.getElementById("inputCity").value = "";
    document.getElementById("inputRegion").value = "NoValue";
    document.getElementById("inputZIP").value = "";
}
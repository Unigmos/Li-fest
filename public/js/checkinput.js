function checkInput(){
    var phone_num = document.getElementsByName(phone_num).values;
    var password = document.getElementsByName(password).values;
    var login_button = document.getElementsByName(login_button);
    if(phone_num!="" && password!=""){
        login_button.removeAttribute("disable");
    }else{
        login_button.setAttribute("disable", true);
    }
}

// TODO:未完成あとでーーーーーーやる引数いれｔ
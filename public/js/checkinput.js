var button;
console.log(document.forms);
var formlength = document.forms[0].length;
// TODO:account_registerのほうでlengthがなぜかエラー
var inputs = new Array(formlength-1);
for (let i = 0; i < formlength; i++) {
    let input = document.forms[0].elements[i];
    if(input.type=="text" || input.type=="password"){
        inputs[i] = document.forms[0].elements[i];
        console.log(inputs[i]);
    }else if(input.type=="submit"){
        button = input;
    }
}


function buttonActivation(){
    if (inputs.every(checkInput)!="") {
        button.removeAttribute("disabled");
    }else{
        if (!button.hasAttribute("disabled")) {
            button.setAttribute("disabled","disabled");
        }
    }
}

function checkInput(input){
    return input.value!="";
}






var button;
var formlength = document.forms[0].length;
var inputs = new Array(formlength-1);
for (let i = 0; i < formlength; i++) {
    let elements = document.forms[0].elements[i];
    // タグ名がinputでかつtypeがtxstかpassword
    if(elements.tagName=="INPUT"){
        if(elements.type=="text" || elements.type=="password" || elements.type=="number"){
            inputs[i] = elements;
        }else if(elements.type=="submit"){
            button = elements;
            button.setAttribute("disabled", "disabled");
        }
    }
}


function buttonavAilability(){
    //配列の要素全てをcheckinput
    if (inputs.every(checkInput)) {
        // すべての欄が埋まっていると
        button.removeAttribute("disabled");
    }else{
        // 一つでも空欄があると
        button.setAttribute("disabled", "disabled");
    }
}
// inputのtxet||passwordの欄に文字が入っているか
function checkInput(input){
    // 空欄だったらfalseを返す
    // TODO:条件分岐でpasswordだったら8文字以上かどうかも追加
    return input.value!="";
}






function checkError(array){
    if (array!=null) {
        for (var key in array){
            const ele = document.getElementById(key);
            ele.innerText = array[key];
            ele.style.visibility = "visible";
        }
    }
    const ele = document.getElementsByClassName("error");
    for (let i = 0; i < ele.length; i++) {
        const element = ele[i];
        console.log(ele);
        element.innerText = "エラーメッセージなし";
        element.style.visibility = "hidden";
    }
}

function checkError(array){
    const ele = document.getElementsByClassName("error");
    for (let i = 0; i < ele.length; i++) {
        const element = ele[i];
        if(element.innerText==""){
            element.innerText = "エラーメッセージなし";
            element.style.visibility = "hidden";
        }
    }
}
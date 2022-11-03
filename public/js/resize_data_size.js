function resizeDataSize(){
    /* for関数で回す用のkeyとバリューの設定
     * key: getElementByIdで取得するid
     * value: keyの子要素数
    */
    var elem_list = {
        "day_div": document.getElementById("day_div").childElementCount,
        "week_div": document.getElementById("week_div").childElementCount,
        "month_div": document.getElementById("month_div").childElementCount,
        "year_div": document.getElementById("year_div").childElementCount
    };

    if(window.innerWidth < 960){
        for(i in elem_list){
            var elem_first = document.getElementById(i).firstElementChild;
            var elem = document.getElementById(i).children;
            if(getComputedStyle(elem_first).height == "54px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "162px"
                    elem[j].style.opacity = "1"
                }
            // 開かれていないデータはブラウザをリサイズしても変更しない
            } else if(getComputedStyle(elem_first).height == "0px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "0px"
                    elem[j].style.opacity = "0"
                }
            }
            
        }
    } else {
        for(i in elem_list){
            var elem_first = document.getElementById(i).firstElementChild;
            var elem = document.getElementById(i).children;
            if(getComputedStyle(elem_first).height == "162px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "54px"
                    elem[j].style.opacity = "1"
                }
            // 開かれていないデータはブラウザをリサイズしても変更しない
            } else if(getComputedStyle(elem_first).height == "0px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "0px"
                    elem[j].style.opacity = "0"
                }
            }
            
        }
    }
}

window.addEventListener('resize', resizeDataSize);

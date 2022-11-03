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
    //　ブラウザサイズ
    var browser_size = 960;
    // 縦並びの長さ
    var vertical_px = "162px";
    // 横並びの高さ
    var horizontal_px = "54px";

    if(window.innerWidth < browser_size){
        for(i in elem_list){
            var elem_last = document.getElementById(i).lastElementChild;
            var elem = document.getElementById(i).children;
            if(getComputedStyle(elem_last).height == horizontal_px){
                for(var j = 0; j < elem_list[i]; j++){
                    // 最初の要素はブラウザサイズに関係なく横並びのサイズ
                    if(j == 0){
                        elem[j].style.height = horizontal_px;
                    } else {
                        elem[j].style.height = vertical_px;
                    }
                    elem[j].style.opacity = "1";
                }
            // 開かれていないデータはブラウザをリサイズしても変更しない
            } else if(getComputedStyle(elem_last).height == "0px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "0px";
                    elem[j].style.opacity = "0";
                }
            }
            
        }
    } else {
        for(i in elem_list){
            var elem_last = document.getElementById(i).lastElementChild;
            var elem = document.getElementById(i).children;
            if(getComputedStyle(elem_last).height == vertical_px){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = horizontal_px;
                    elem[j].style.opacity = "1";
                }
            // 開かれていないデータはブラウザをリサイズしても変更しない
            } else if(getComputedStyle(elem_last).height == "0px"){
                for(var j = 0; j < elem_list[i]; j++){
                    elem[j].style.height = "0px";
                    elem[j].style.opacity = "0";
                }
            }
            
        }
    }
}

window.addEventListener('resize', resizeDataSize);

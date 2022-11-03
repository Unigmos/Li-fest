function Check(id) {
    var add_id = id + "_div";
    var elem_all = document.getElementById(add_id).children;
    var elem_lg = document.getElementById(add_id).childElementCount;
    //　ブラウザサイズ
    var browser_size = 960;
    // 縦並びの長さ
    var vertical_px = "162px";
    // 横並びの高さ
    var horizontal_px = "54px";

    if(document.getElementById(id).checked) {
        for(var i = 0; i < elem_lg; i++){
            if(window.innerWidth < browser_size){
                // 最初の要素はブラウザサイズに関係なく横並びのサイズ
                if(i == 0){
                    elem_all[i].style.height = horizontal_px;
                } else {
                    elem_all[i].style.height = vertical_px;
                }
                elem_all[i].style.opacity = "1";
            } else{
                elem_all[i].style.height = horizontal_px;
                elem_all[i].style.opacity = "1";
            }
        }

    } else {
        for(var i = 0; i < elem_lg; i++){
            elem_all[i].style.height = "0px";
            elem_all[i].style.opacity = "0";
        }
    }
}

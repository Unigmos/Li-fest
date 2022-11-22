function CalcCost(){
    /* 
     * for関数で回す用のkeyとバリューの設定
     * key: getElementByClassNameで取得するクラス名
     * value: クラス名に当てはまる要素の個数
    */
    const calc_list = {
        "day": document.getElementsByClassName("day_quantity").length
    };
    // TODO:週、月、年用のも対応させる
    /*const calc_list = {
        "day": document.getElementsByClassName("day_quantity").length,
        "week": document.getElementById("week_quantity").length,
        "month": document.getElementById("month_quantity").length,
        "year": document.getElementById("year_quantity").length
    };*/
    for(i in calc_list){
        for(var j = 0; j < calc_list[i]; j++){
            var count = parseInt(document.getElementsByClassName(i + "_quantity")[j].textContent);
            var cost = parseInt(document.getElementsByClassName(i + "_cost")[j].textContent);
            console.log(count * cost)
        }
    }
}

window.addEventListener('load', CalcCost);
function CalcCost(){
    /* 
     * for関数で回す用のkeyとバリューの設定
     * key: getElementByClassNameで取得するクラス名
     * value: クラス名に当てはまる要素の個数
    */
    const calc_list = {
        "day": document.getElementsByClassName("day_quantity").length,
        "week": document.getElementsByClassName("week_quantity").length,
        "month": document.getElementsByClassName("month_quantity").length,
        "year": document.getElementsByClassName("year_quantity").length
    };
    // 各要素(日、週、月、年)ごとの合計の連想配列
    var resp_cost = {
        "day_resp": 0,
        "week_resp": 0,
        "month_resp": 0,
        "year_resp": 0
    };
    // 文章データの連想配列
    var sentence_list = {
        "day": "日",
        "week": "週",
        "month": "月",
        "year": "年"
    };
    
    // 要素ごとの合計料金を求める
    for(i in calc_list){
        for(var j = 0; j < calc_list[i]; j++){
            var count = parseInt(document.getElementsByClassName(i + "_quantity")[j].textContent);
            var cost = parseInt(document.getElementsByClassName(i + "_cost")[j].textContent);
            // 直前の値読み取り、追加して上書き
            resp_cost[i + "_resp"] += count * cost;
        }
    }
    // innerHTMLで合計を画面に表示
    for(k in sentence_list){
        var access_id = k + "_total";
        var write_elem = document.getElementById(access_id);
        write_elem.innerHTML = `${sentence_list[k]}ごと合計:${resp_cost[k + "_resp"]}円`;
    }
    console.log(resp_cost)
}

window.addEventListener('load', CalcCost);

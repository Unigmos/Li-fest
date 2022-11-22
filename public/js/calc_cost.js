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
    /* 
     * 各要素(日、週、月、年)ごとの合計の連想配列
     * key: このJSファイル内のみで参照する値(クラス名やid名ではない)
     * value: それぞれの合計金額円(日、週、月、年)
    */
    var resp_cost = {
        "day_resp": 0,
        "week_resp": 0,
        "month_resp": 0,
        "year_resp": 0
    };
    /* 
     * 文章データの連想配列
     * key: 変数「calc_list」と同じ値→for関数で回すときに連想配列は異なっても同じ名前のkeyとvalueを取得するため
     * value: 書き換えに用いるそれぞれの要素(日、週、月、年)の文字列データ
    */
    var sentence_list = {
        "day": "日",
        "week": "週",
        "month": "月",
        "year": "年"
    };
    
    // 要素ごとの合計料金を求める
    for(i in calc_list){
        for(var j = 0; j < calc_list[i]; j++){
            // TODO:(数値のみ入力だが、仮に文字列が入った時用の例外処理)
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
}

window.addEventListener('load', CalcCost);

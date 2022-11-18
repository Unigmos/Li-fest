function Replace(){
    const browser_size = 960;
    const data_count = document.querySelector(".how_to_use_content").childElementCount;
    const datas = document.querySelector(".how_to_use_content").children;
    const check_class = "replace_data";
    if(window.innerWidth < browser_size){
        for(var i = 0; i < data_count; i++){
            // 子要素のクラス名を取得する
            var data = datas[i].children;
            // 「check_class」が含まれるデータに関しては、順番を入れ替える。
            if(datas[i].classList.contains(check_class)){
                console.log("True")
                // 画像→文章の並びの時のみ入れ替え
                if(data[0].className == "use_image" && data[1].className == "use_sentence"){
                    datas[i].insertBefore(data[1], data[0])
                }
            } else {
                console.log("False")
            }
        }
    } else {
        ;
        // TODO:元に戻す部分の追加
        // TODO:load時のも作る
    }
}

window.addEventListener('resize', Replace);
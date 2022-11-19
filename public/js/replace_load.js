function ReplaceLoad(){
    const browser_size = 960;
    const data_count = document.querySelector(".how_to_use_content").childElementCount;
    const datas = document.querySelector(".how_to_use_content").children;
    const check_class = "replace_data";
    const image_class = "use_image";
    const sentence_class = "use_sentence";
    if(window.innerWidth < browser_size){
        for(var i = 0; i < data_count; i++){
            // 子要素のクラス名を取得する
            var data = datas[i].children;
            // 「check_class」が含まれるデータに関しては、順番を入れ替える。
            if(datas[i].classList.contains(check_class)){
                // 画像→文章の並びの時のみ入れ替え
                if(data[0].className == image_class && data[1].className == sentence_class){
                    datas[i].insertBefore(data[1], data[0])
                }
            }
        }
    }
}

window.addEventListener('load', ReplaceLoad);
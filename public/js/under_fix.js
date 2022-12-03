function UnderFix(){
    // 各種高さの取得
    var container_height = document.querySelector(".main_container").clientHeight;
    var window_height = window.innerHeight;
    var footer_height = document.querySelector(".footer_container").clientHeight;
    var header_height = document.querySelector(".header_container").clientHeight;
    // スタイル指定用の要素
    var footer_elem = document.querySelector(".footer_container");

    // 調整用の定数
    const adjusted_value = 100;
    // 画面の高さからヘッダーとフッターの高さを引く(これで比較を行う)
    var check_height = window_height - header_height - footer_height - adjusted_value;
    // 要素の高さと画面の高さを比較し要素の高さの方が小さい場合は下部に固定する
    if (container_height < check_height){
        footer_elem.style.position = "fixed";
        footer_elem.style.bottom = "0";
    } else {
        // デフォルト値に戻す
        footer_elem.style.position = "static";
        footer_elem.style.bottom = "auto";
    }
}

window.addEventListener('load', UnderFix);
window.addEventListener('resize', UnderFix);

// confirmation.phpのチェックボックスが押されて要素サイズが変更した時も対応
var check_button = document.querySelectorAll("input[type='checkbox']");
for (var i = 0; i < check_button.length; i++){
    check_button[i].addEventListener('change', UnderFix);
}

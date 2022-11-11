window.addEventListener('load', function(){
    document.getElementById("three_button").addEventListener('click', Position);
});

function Position(event) {
    // 要素の大きさ分左上に要素を動かす
    const diff_left = 200;
    const diff_top = 75;
    var left_pos = event.pageX - diff_left;
    var top_pos = event.pageY - diff_top;
    document.getElementById('context_menu').style.left = left_pos + "px";
    document.getElementById('context_menu').style.top = top_pos + "px";
    document.getElementById('context_menu').style.display = "block";
}
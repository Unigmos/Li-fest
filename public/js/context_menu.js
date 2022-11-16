window.addEventListener('load', function(){
    document.addEventListener('click', (e) => {
        // ボタン以外を押したら非表示
        if(!e.target.closest('.three_bt')){
            document.getElementById('context_menu').style.display = "none";
        }
        else{
            document.getElementById("three_button").addEventListener('click', Position);
        }
    });
});

// コンテクストメニューを表示
function Position(event) {
    const html_code = `
    <div id="context_menu">
        <ul>
            <li>編集</li>
            <li>削除</li>
        </ul>
    </div>
    `;
    // 要素の大きさ分左上に要素を動かす
    const diff_left = 100;
    const diff_top = 75;
    var left_pos = event.pageX - diff_left;
    var top_pos = event.pageY - diff_top;
    document.getElementById('context_menu').style.left = left_pos + "px";
    document.getElementById('context_menu').style.top = top_pos + "px";
    document.getElementById('context_menu').style.display = "block";
}

function Context(acquisition_data){
    //var data = acquisition_data.currentTarget.dataset['index'];
    alert(`name:${acquisition_data.name} value:${acquisition_data.value}`)
    /*var button_data = document.getElementsByName("days");
    var button_pos = button_data.getBoundingClientRect();
    var button_x = button_pos.left;
    var button_y = button_pos.top;
    alert(button_x, button_y)*/
    // TODO: Context関数のみで完結させる
}

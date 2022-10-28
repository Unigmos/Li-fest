function Check(id) {
    var add_id = id + "_div";
    var elem_all = document.getElementById(add_id).children;
    var elem_lg = document.getElementById(add_id).childElementCount

    if (document.getElementById(id).checked) {
        for(var i = 0; i < elem_lg; i++){
            elem_all[i].style.height = "54px"
            elem_all[i].style.opacity = "1"
        }

    } else {
        for(var i = 0; i < elem_lg; i++){
            elem_all[i].style.height = "0px"
            elem_all[i].style.opacity = "0"
        }
    }
}

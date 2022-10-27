function Check(id) {
    var add_id = id + "_div";
    var elem = document.getElementById(add_id).firstElementChild;

    if (document.getElementById(id).checked) {
        elem.style.height = "54px"
        elem.style.opacity = "1"

    } else {
        elem.style.height = "0px"
        elem.style.opacity = "0"
    }
}
function resizeDataSize(){
    var check_day = document.getElementById("day_div").firstElementChild;
    var elem_day = document.getElementById("day_div").children;
    var elem_lg = document.getElementById("day_div").childElementCount

    if(window.innerWidth < 960){
        if(getComputedStyle(check_day).height == "54px"){
            for(var i = 0; i < elem_lg; i++){
                elem_day[i].style.height = "162px"
                elem_day[i].style.opacity = "1"
            }   
        }
    } else {
        if(getComputedStyle(check_day).height == "162px"){
            for(var i = 0; i < elem_lg; i++){
                elem_day[i].style.height = "54px"
                elem_day[i].style.opacity = "1"
            }
        }
    }
}

window.addEventListener('resize', resizeDataSize);
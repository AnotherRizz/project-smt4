window.onscroll = function(){
    const header = document.querySelector("nav")
    const fixednav = header.offsetTop;

    if(window.pageYOffset > fixednav){
        header.classList.add("blurr")
    }else{
        header.classList.remove("blurr")
    }
}
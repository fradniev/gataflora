function showMenu() {
    let element = document.getElementById("main-hidden-menu");
    element.classList.add("show-hidden-menu");
    element = document.getElementById("menu-image-bars");
    element.classList.add("closed");
    element.classList.remove("open");
    element = document.getElementById("menu-image-x");
    element.classList.remove("closed");
    element.classList.add("open");
    element = document.getElementsByClassName("digital-factory");
    element[0].classList.add("closed");
}
function hideMenu(){
    let element = document.getElementById("main-hidden-menu");
    element.classList.remove("show-hidden-menu");
    element = document.getElementById("menu-image-bars");
    element.classList.remove("closed");
    element.classList.add("open");
    element = document.getElementById("menu-image-x");
    element.classList.add("closed");
    element.classList.remove("open");
    element = document.getElementsByClassName("digital-factory");
    element[0].classList.remove("closed");
}
function expandPost(el){
    let post = el;
    post.getElementsByClassName("post-text-container")[0].classList.add("expand-post");
    post.getElementsByClassName("post-title")[0].classList.add("red-title");
    post.getElementsByClassName("post-description")[0].classList.add("show-post");
}
function contractPost(el){
    let post = el;
    post.getElementsByClassName("post-text-container")[0].classList.remove("expand-post");
    post.getElementsByClassName("post-title")[0].classList.remove("red-title");
    post.getElementsByClassName("post-description")[0].classList.remove("show-post");
}
function fixMenu(){
    let menuHeight = document.getElementById("masthead").scrollHeight;
    document.getElementById("main-hidden-menu").style.top = "-"+((menuHeight/2)-70)+"px";
    console.log(menuHeight/2);
}
window.onload = fixMenu;
var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}
ready(() => {
    document.querySelector(".header").style.height = window.innerHeight + "px";
})

//document.addEventListener("resize",ready);
function WindowResize(){
    document.querySelector(".header").style.height = window.innerHeight + "px";
}
    
// Attaching the event listener function to window's resize event
window.addEventListener("resize", WindowResize);

// Calling the function for the first time
WindowResize();
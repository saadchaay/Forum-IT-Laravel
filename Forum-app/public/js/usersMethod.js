let modal = document.getElementById("modal");
let confirmModal = document.getElementById("confirm-modal");
let body = document.getElementById("body-content");

// fadeOut(modal);
function modalHandler(val) {
    if (val) {
        fadeIn(modal);
    } else {
        fadeOut(modal);
    }
}
function fadeOut(el) {
    body.style.opacity = 1;
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
}
function fadeIn(el, display) {
    body.style.opacity = 0.3;
    el.style.opacity = 0;
    el.style.display = display || "flex";
    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}
// confirm msg delete
function confirmDelete(ID) {
    if(ID) {
        fadeIn(confirmModal);
    } else {
        fadeOut(confirmModal);
    }
}

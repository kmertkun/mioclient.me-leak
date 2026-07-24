function $(x) {
    if (x.startsWith(".")) {
        return document.getElementsByTagName("x")[0];
    }
    return document.getElementById(x);
}

var clicked = false;

function load() {
    hidePopup();
}

function sumbitForm() {
    if (clicked) return true;
    return false
}

function confirm() {
    hidePopup();
}

function showPopup() {
    // надо.
    let f = document.getElementsByTagName('form')[0];
    if(f.checkValidity()) {
        $("modal").inert = true
        $("modal").showModal()
        $("modal").inert = false
        $("modal").style.opacity = 1
        document.documentElement.style.setProperty("--alpha", 1);
    } else {
    }

}

function hidePopup() {
    if (clicked) return
    clicked = true;
    $("modal").style.opacity = 0
    document.documentElement.style.setProperty("--alpha", 0);
    setTimeout(() => {
        $("modal").close();
        clicked = false;
    }, 300)
}
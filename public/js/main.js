window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goTopButton").style.display = "block";
    } else {
        document.getElementById("goTopButton").style.display = "none";
    }
}

function goTop() {
    document.body.scrollTop = 0; // Para navegadores web
    document.documentElement.scrollTop = 0; // Para Internet Explorer, Edge, Firefox, Chrome, etc.
}

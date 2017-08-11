


var popWind = document.getElementById("myPopup");
var campK = document.getElementById("camp-btn");

var inline = document.getElementsByClassName("close")[0];

campK.onclick = function() {
    popWind.style.display = "block";
}

inline.onclick = function() {
    popWind.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == popWind) {
        popWind.style.display = "none";
    }
}











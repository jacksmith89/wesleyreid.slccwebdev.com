/*This function will change the display properties for the different content areas.*/
function hideShow(id) {
    document.getElementById("culture").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("tour").style.display = "none";
    document.getElementById("food").style.display = "none";
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

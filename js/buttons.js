function grow(id, mult) {
    mult*=100;
    element = document.getElementById(id);
    element.style.width = mult+"%";
}
function restore(id) {
    document.getElementById(id).style.width = "100%";
}
function shrink(id, mult) {
    mult = 100/mult;
    element = document.getElementById(id);
    element.style.width = mult+"%";
}

function hide(id) {
    document.getElementById(id).style.display = "none";
}
function show(id) {
    document.getElementById(id).style.display = "block";
}

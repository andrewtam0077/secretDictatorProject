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
function makeInvisible(id) {
    document.getElementById(id).style.visibility = "hidden";
}
function makeVisible(id) {
    document.getElementById(id).style.visibility = "visible";
}

function goHome() {
    if(confirm("Are you sure you want to leave?") == true) {
        location.href = "index.html";
    }
}
function goLobby() {
    location.href = "lobby.html";
}
function goGame() {
    location.href = "ingame.html";
}

function sendText(playername) {
    text = document.getElementById("sendtext").value;

    if(text.length <= 0) {
        document.getElementById("text_errmsg").innerHTML = "enter text before sending";
        return;
    } else if(text.length > 280) {
        document.getElementById("text_errmsg").innerHTML = "Message is too long";
        return;
    }
    document.getElementById("text_errmsg").innerHTML = "";

    var info = playername + ": " + text;
    var rowdata = [info];
    document.getElementById("sendtext").value = "";

    // find a <table> element to add row to (in this example, a table with id="zombieTable")
    var tableRef = document.getElementById("textchat");

    document.getElementById("addplayername").value = "";

    var rowCount = tableRef.rows.length;
    var newRow = tableRef.insertRow(rowCount);
    newRow.onmouseover = function() { 
        // rowIndex returns the position of a row in the rows collection of a table
        tableRef.clickedRowIndex = this.rowIndex;     
    };
    
    var newCell = "";       
    var i = 0;
    // insert new cells (<td> elements) at the 1st, 2nd, 3rd, 4th position of the new <tr> element
    // using insertCell(method) method        	      
    while (i < 1)
    {
        newCell = newRow.insertCell(i);
        newCell.innerHTML = rowdata[i];
        newCell.onmouseover = this.rowIndex;
        i++;
    }
}
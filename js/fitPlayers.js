function addPlayer() {
    alert("oop-1");
    pname = document.getElementById("addplayername").value
    
    //col = document.getElementById("playertable");
    // var newPlayer = document.createElement(pname);
    // newPlayer.classList.add("playercard");
    // newPlayer.classList.add("fitImg");

    // var newName = document.createElement("innername");
    // newName.classList.add("white_txt");
    // newName.style.display = "table-cell";
    // newName.style.verticalAlign = "middle";

    // newPlayer.appendChild(newName);
    // col.appendChild(newPlayer);

    alert("oop");
    var tableRef = document.getElementById("playertable");
    var newRow = tableRef.insertRow(tableRef.rows.length);
    alert("yay1");

    newRow.onmouseover = function() { 
        // rowIndex returns the position of a row in the rows collection of a table
        tableRef.clickedRowIndex = this.rowIndex;     
    };
    var newPlayer = document.createElement(pname);
    newPlayer.classList.add("playercard");
    newPlayer.classList.add("fitImg");

    var newName = document.createElement("innername");
    newName.classList.add("white_txt");
    newName.style.display = "table-cell";
    newName.style.verticalAlign = "middle";

    newPlayer.appendChild(newName);
    alert("yay2");
    newCell = newRow.insertCell(0);
    newCell.innerHTML = pname + "nice";
    newCell.onmouseover = this.rowIndex;

    alert("yay3");

};

function addStuff() {
    var playerName = document.getElementById("addplayername").value;
    var playercard = '<div id="player1" class="playercard fitImg" style="margin: 0; padding: 0; height: 150px; width: 150px;"><p class="white_txt" style="display: table-cell; vertical-align: middle;">' + playerName + '</p></div>'
    var removeoption = "<input type=button value=' X ' onClick='delRow()'>";

    // put all pieces of data in an array for later used to create cell content of a row 
    var rowdata = [playercard, removeoption];

    // clear data entries (in the form)
    document.getElementById("addplayername").value = "";

    // find a <table> element to add row to (in this example, a table with id="zombieTable")
    var tableRef = document.getElementById("playertable");

    // create an empty <tr> element and add it to the table
    // using insertRow(index) method
    var newRow = tableRef.insertRow(tableRef.rows.length);    // table_object.rows.length returns the number of <tr> elements in the collection
    // add event listener, on mouseover, set row index. This will be used when deleting a row
    newRow.onmouseover = function() { 
        // rowIndex returns the position of a row in the rows collection of a table
        tableRef.clickedRowIndex = this.rowIndex;     
    };
    alert(tableRef.rows.length);
    // alternatively, use data-index to store index of the line 
    //  (note: data-* attributes can store arbitrary data with elements)
    // eg: <div id="elem" data-index=3></div>
    
    var newCell = "";       
    var i = 0;
    // insert new cells (<td> elements) at the 1st, 2nd, 3rd, 4th position of the new <tr> element
    // using insertCell(method) method        	      
    while (i < 2)
    {
        newCell = newRow.insertCell(i);
        newCell.innerHTML = rowdata[i];
        newCell.onmouseover = this.rowIndex;
        i++;
    }
}
function delRow()
{
     // since deletion action is unrecoverable, add hesitation to minimize/avoid user error 
	 if (confirm("Press OK to remove player. This action is unrecoverable.") == true) {
        index = document.getElementById("playertable").clickedRowIndex;
        alert(index);
        document.getElementById("playertable").deleteRow(index);
     }
}
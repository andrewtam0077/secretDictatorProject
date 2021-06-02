function addPlayer() {
    var playername = document.getElementById("addplayername").value;
    addPlayerByName(playername);
}
function addPlayerByName(playername) {
    var playercard = '<div id="name" class="playercard fitImg"><input class="remove" type=button value=" X " onClick="delRow()"><p class="name white_txt" style="display: table-cell; vertical-align: middle;">' + playername + '</p></div>'
    var rowdata = [playercard];
    document.getElementById("addplayername").value = "";

    // find a <table> element to add row to (in this example, a table with id="zombieTable")
    var tableRef = document.getElementById("playertable");
    var tableId = "playertable";
    if(tableRef.rows.length >= 5) {
        tableRef = document.getElementById("playertable2");
        tableId = "playertable2";
    }

    var playercard = '<div id="name" class="playercard fitImg"><input class="remove" type=button value=" X " onClick="delRow(\'' + tableId +'\')"><p class="name white_txt" style="display: table-cell; vertical-align: middle;">' + playername + '</p></div>'
    var rowdata = [playercard];
    document.getElementById("addplayername").value = "";

    // create an empty <tr> element and add it to the table
    // using insertRow(index) method
    var rowCount = tableRef.rows.length;
    var newRow = tableRef.insertRow(rowCount);    // table_object.rows.length returns the number of <tr> elements in the collection
    // add event listener, on mouseover, set row index. This will be used when deleting a row
    newRow.onmouseover = function() { 
        // rowIndex returns the position of a row in the rows collection of a table
        tableRef.clickedRowIndex = this.rowIndex;     
    };
    // alternatively, use data-index to store index of the line 
    //  (note: data-* attributes can store arbitrary data with elements)
    // eg: <div id="elem" data-index=3></div>
    
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
function delRow(tableID)
{
     // since deletion action is unrecoverable, add hesitation to minimize/avoid user error 
	 if (confirm("Press OK to remove player. This action is unrecoverable.") == true) {
        index = document.getElementById(tableID).clickedRowIndex;
        document.getElementById(tableID).deleteRow(index);
     }
}
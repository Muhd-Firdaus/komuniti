document.getElementById("addRowBtn").addEventListener("click", function() {
    var table = document.getElementById("myTable");
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    
    var rowNumber = table.rows.length - 1; // Adjust for header row
    cell1.innerHTML = "<span>" + (rowNumber < 10 ? "0" : "") + rowNumber + "</span><br>";
    cell2.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0100]" id="0100' +  rowNumber + '"><br>';
    cell3.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0101]" id="0101' + rowNumber + '"><br>';
    cell4.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0102]" id="0102' + rowNumber + '"><br>';
    cell5.innerHTML = '<button class="deleteBtn"><span>Buang</span><br><span><i>Delete</i></span><br></button>';

    // setupDeleteButtons(); // Reinitialize delete buttons

    var table = document.getElementById("myTable2");
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    var cell10 = newRow.insertCell(9);
    
    var rowNumber = table.rows.length - 1; // Adjust for header row
    cell1.innerHTML = "<span>" + (rowNumber < 10 ? "0" : "") + rowNumber + "</span><br>";
    cell2.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0103]" id="0103' + rowNumber + '"><br>';
    cell3.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0104]" id="0104' + rowNumber + '"><br>';
    cell4.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0105]" id="0105' + rowNumber + '"><br>';
    cell5.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0106]" id="0106' + rowNumber + '"><br>';
    cell6.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0107]" id="0107' + rowNumber + '"><br>';
    cell7.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0108]" id="0108' + rowNumber + '"><br>';
    cell8.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0109]" id="0109' + rowNumber + '"><br>';
    cell9.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0110]" id="0110' + rowNumber + '"><br>';
    cell10.innerHTML = '<button class="deleteBtn2"><span>Buang</span><br><span><i>Delete</i></span><br></button>';
    
    var table = document.getElementById("tableA2A3");
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    var cell10 = newRow.insertCell(9);
    var cell11 = newRow.insertCell(10);
    var cell12 = newRow.insertCell(11);
    
    var rownumber = table.rows.length - 4; // Adjust for header row
    cell1.innerHTML = "<span>" + (rownumber < 10 ? "0" : "") + rownumber + "</span><br>";
    cell2.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0200]" ><br>';
    cell3.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0201]" ><br>';
    cell4.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0202]" ><br>';
    cell5.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0203]" ><br>';
    cell6.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0204]" ><br>';
    cell7.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0205]" ><br>';
    cell8.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0300]" ><br>';
    cell9.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0301]" ><br>';
    cell10.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0302]" ><br>';
    cell11.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0303]" ><br>';
    cell12.innerHTML = '<button id="deleteBtnA2A3" class="deleteBtnA2A3">Delete</button>';

    var table = document.getElementById("tableA4");
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    var cell10 = newRow.insertCell(9);
    
    var rownumber = table.rows.length - 4; // Adjust for header row
    cell1.innerHTML = "<span>" + (rownumber < 10 ? "0" : "") + rownumber + "</span><br>";
    cell2.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0400]" ><br>';
    cell3.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0401]" ><br>';
    cell4.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0402]" ><br>';
    cell5.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0403]" ><br>';
    cell6.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0404]" ><br>';
    cell7.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0405]" ><br>';
    cell8.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0406]" ><br>';
    cell9.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0407]" ><br>';
    cell10.innerHTML = '<button class="deleteBtnA4">Delete</button>';

    var table = document.getElementById("tableA5A6");
    var newRow = table.insertRow(table.rows.length);
    
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    
    var rownumber = table.rows.length - 4; // Adjust for header row
    cell1.innerHTML = "<span>" + (rownumber < 10 ? "0" : "") + rownumber + "</span><br>";
    cell2.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0500]" ><br>';
    cell3.innerHTML = '<input type="text" name="ac1['+ (rowNumber - 1) +'][0501]" ><br>';
    cell4.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0600]" ><br>';
    cell5.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0601]" ><br>';
    cell6.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0602]" ><br>';
    cell7.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0603]" ><br>';
    cell8.innerHTML = '<input type="number" name="ac1['+ (rowNumber - 1) +'][0604]" ><br>';
    cell9.innerHTML = '<button class="deleteBtnA5A6">Delete</button>';

    setupDeleteButtons(); // Reinitialize delete buttons
});


function setupDeleteButtons() {
    var deleteButtons = document.getElementsByClassName("deleteBtn");
    var deleteButtons2 = document.getElementsByClassName("deleteBtn2");
    var deleteButtons3 = document.getElementsByClassName("deleteBtnA2A3");
    var deleteButtons4 = document.getElementsByClassName("deleteBtnA4");
    var deleteButtons5 = document.getElementsByClassName("deleteBtnA5A6");
    for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener("click", function() {
        var row = this.parentNode.parentNode;
        if (row.rowIndex === 1) { // Exclude the first row
            return;
        }
        row.parentNode.removeChild(row);
        updateRowNumbers();
        });
    }
    for (var i = 0; i < deleteButtons2.length; i++) {
        deleteButtons2[i].addEventListener("click", function() {
        var row = this.parentNode.parentNode;
        if (row.rowIndex === 1) { // Exclude the first row
            return;
        }
        row.parentNode.removeChild(row);
        updateRowNumbers();
        });
    }
    for (var i = 0; i < deleteButtons3.length; i++) {
        deleteButtons3[i].addEventListener("click", function() {
          var row = this.parentNode.parentNode;
          row.parentNode.removeChild(row);
          updateRownumbers();
        });
    }
    
    for (var i = 0; i < deleteButtons4.length; i++) {
        deleteButtons4[i].addEventListener("click", function() {
            var row = this.parentNode.parentNode;
            row.parentNode.removeChild(row);
            updateRownumbers();
        });
    }

    for (var i = 0; i < deleteButtons5.length; i++) {
        deleteButtons5[i].addEventListener("click", function() {
            var row = this.parentNode.parentNode;
            row.parentNode.removeChild(row);
            updateRownumbers();
        });
    }
}

function updateRowNumbers() {
    var table = document.getElementById("myTable");
    var table2 = document.getElementById("myTable2");
    var table3 = document.getElementById("tableA2A3");
    var table4 = document.getElementById("tableA4");
    var table5 = document.getElementById("tableA5A6");
    
    var rows = table.getElementsByTagName("tr");
    var rows2 = table2.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) { // Start from 1 to skip header
        var span = rows[i].getElementsByTagName("span")[0];
        var number = i < 10 ? "0" + i : i;
        span.textContent = number;
    }
    for (var i = 1; i < rows2.length; i++) { // Start from 1 to skip header
        var span = rows2[i].getElementsByTagName("span")[0];
        var number = i < 10 ? "0" + i : i;
        span.textContent = number;
    }

    var rows3 = table3.getElementsByTagName("tr");
    for (var i = 4; i < rows3.length; i++) { // Start from 1 to skip header
        var span = rows3[i].getElementsByTagName("span")[0];
        var number = i < 10 ? "0" + (i - 3)  : (i - 3) ;
        span.numberContent = number;
    }

    var rows4 = table4.getElementsByTagName("tr");
    for (var i = 4; i < rows4.length; i++) { // Start from 1 to skip header
        var span = rows4[i].getElementsByTagName("span")[0];
        var number = i < 10 ? "0" + (i - 3)  : (i - 3) ;
        span.numberContent = number;
    }

    var rows5 = table5.getElementsByTagName("tr");
    for (var i = 4; i < rows5.length; i++) { // Start from 1 to skip header
        var span = rows5[i].getElementsByTagName("span")[0];
        var number = i < 10 ? "0" + (i - 3)  : (i - 3) ;
        span.numberContent = number;
    }
}

setupDeleteButtons(); // Initialize delete buttons on page load

// Get references to all buttons and divs
const toggleButtons = document.querySelectorAll(".toggleButton");
const myDivs = document.querySelectorAll(".myDiv");

// Add click event listeners to the buttons
toggleButtons.forEach((button, index) => {
    button.addEventListener("click", function () {
        // Toggle the "hidden" class on the clicked div
        myDivs[index].classList.toggle("hidden");

        // Close all other divs
        myDivs.forEach((div, i) => {
            if (i !== index) {
                div.classList.add("hidden");
            }
        });
    });
});
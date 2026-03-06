```html
<!DOCTYPE html>
<html>
<head>
<title>Liwaas POS Demo</title>

<style>

body{
font-family: Arial;
background:#f4f6f8;
margin:0;
}

header{
background:#111;
color:white;
padding:15px;
font-size:20px;
}

.container{
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
margin-top:10px;
}

th,td{
padding:10px;
border-bottom:1px solid #ddd;
text-align:center;
}

button{
padding:8px 15px;
background:#111;
color:white;
border:none;
cursor:pointer;
}

input{
padding:6px;
width:70px;
}

.section{
display:none;
}

.active{
display:block;
}

.totalBox{
margin-top:20px;
background:white;
padding:15px;
}

</style>

</head>

<body>

<header>LIWAAS Retail POS</header>

<div class="container">

<!-- STOCK PAGE -->

<div id="stockPage" class="section active">

<h2>Stock</h2>

<table>

<tr>
<th>Product</th>
<th>Color</th>
<th>Size</th>
<th>Stock</th>
<th>Select</th>
</tr>

<tbody id="stockTable"></tbody>

</table>

<br>

<button onclick="goToSale()">Create Sale</button>

</div>

<!-- SALE PAGE -->

<div id="salePage" class="section">

<h2>Create Sale</h2>

<table>

<tr>
<th>Product</th>
<th>Color</th>
<th>Size</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>
</tr>

<tbody id="saleTable"></tbody>

</table>

<div class="totalBox">

Tax % :
<input id="tax" value="5" onchange="calculateTotal()">

<br><br>

Advance Payment :
<input id="advance" value="0" onchange="calculateTotal()">

<br><br>

Due Date :
<input type="date" id="dueDate">

<br><br>

Grand Total : ₹ <span id="grandTotal">0</span>

<br><br>

Due : ₹ <span id="dueAmount">0</span>

<br><br>

<button onclick="createOrder()">Create Order</button>

</div>

</div>

<!-- INVOICE PAGE -->

<div id="invoicePage" class="section">

<h2>Invoice</h2>

<div id="invoiceContent"></div>

<br>

<button onclick="generatePDF()">Generate PDF</button>

</div>

</div>


<script>

/* ---------------------
DUMMY STOCK DATA
--------------------- */

const stockData = [

{ id:1, product:"Oversize T-shirt", color:"Black", size:"M", price:499, stock:12 },

{ id:2, product:"Oversize T-shirt", color:"Black", size:"L", price:499, stock:8 },

{ id:3, product:"Oversize T-shirt", color:"White", size:"M", price:499, stock:5 },

{ id:4, product:"Oversize T-shirt", color:"Olive", size:"L", price:499, stock:6 }

];

let selectedItems = [];


/* ---------------------
LOAD STOCK TABLE
--------------------- */

function loadStock(){

let html="";

stockData.forEach(item=>{

html+=`

<tr>

<td>${item.product}</td>

<td>${item.color}</td>

<td>${item.size}</td>

<td>${item.stock}</td>

<td>

<input type="checkbox" onchange="selectItem(${item.id})">

</td>

</tr>

`;

});

document.getElementById("stockTable").innerHTML = html;

}

loadStock();


/* ---------------------
SELECT ITEM
--------------------- */

function selectItem(id){

let item = stockData.find(x=>x.id===id);

let exists = selectedItems.find(x=>x.id===id);

if(exists){

selectedItems = selectedItems.filter(x=>x.id!==id);

}else{

selectedItems.push({...item, qty:1});

}

}


/* ---------------------
GO TO SALE PAGE
--------------------- */

function goToSale(){

document.getElementById("stockPage").classList.remove("active");

document.getElementById("salePage").classList.add("active");

loadSale();

}


/* ---------------------
LOAD SALE TABLE
--------------------- */

function loadSale(){

let html="";

selectedItems.forEach((item,index)=>{

html+=`

<tr>

<td>${item.product}</td>

<td>${item.color}</td>

<td>${item.size}</td>

<td>${item.price}</td>

<td>

<input type="number" value="${item.qty}"

onchange="updateQty(${index},this.value)">

</td>

<td id="itemTotal${index}">${item.price}</td>

</tr>

`;

});

document.getElementById("saleTable").innerHTML = html;

calculateTotal();

}


/* ---------------------
UPDATE QTY
--------------------- */

function updateQty(index,val){

selectedItems[index].qty = parseInt(val);

document.getElementById("itemTotal"+index).innerText = selectedItems[index].qty * selectedItems[index].price;

calculateTotal();

}


/* ---------------------
CALCULATE TOTAL
--------------------- */

function calculateTotal(){

let subtotal = 0;

selectedItems.forEach(item=>{

subtotal += item.qty * item.price;

});

let tax = parseFloat(document.getElementById("tax").value);

let taxAmount = subtotal * (tax/100);

let grand = subtotal + taxAmount;

let advance = parseFloat(document.getElementById("advance").value);

let due = grand - advance;

document.getElementById("grandTotal").innerText = grand.toFixed(2);

document.getElementById("dueAmount").innerText = due.toFixed(2);

}


/* ---------------------
CREATE ORDER
--------------------- */

function createOrder(){

document.getElementById("salePage").classList.remove("active");

document.getElementById("invoicePage").classList.add("active");

let html = "";

selectedItems.forEach(item=>{

html+=`

<p>

${item.product} (${item.color} ${item.size})

Qty : ${item.qty}

Total : ₹ ${item.qty * item.price}

</p>

`;

});

html+=`<hr>Grand Total : ₹ ${document.getElementById("grandTotal").innerText}`;

document.getElementById("invoiceContent").innerHTML = html;

}


/* ---------------------
MOCK PDF
--------------------- */

function generatePDF(){

alert("PDF Generated (Backend will handle real PDF)");

}

</script>

</body>

</html>
```

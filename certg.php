<?php require_once( 'config/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Online Certificate Verification System | CGV</title>
	<link rel="icon" href="img/logo.png" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
	<style>
	body {
	font-family: 'Source Serif Pro', serif;
	background-image: url(img/certg.png);
	/* background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);
	background: linear-gradient(to right, #E9E4F0, #D3CCE3); */
	/* height: auto;
	width: auto; */
	margin: 0;
	/* background-attachment: fixed */
	/* background-position: center; */
  	/* background-repeat: no-repeat; */
  	background-size: cover;
	height: 100%;
}
.des_logo {
	font-size: 30px;
	padding-top: 30px;
	text-align: center
}
.footer {
	font-size: 16px;
	padding-top: 120px
}
div.table-title {
	display: block;
	margin: auto;
	max-width: 600px;
	padding: 5px;
	width: 100%
}
.table-title h3 {
	color: green;
	font-size: 30px;
	font-weight: 400;
	font-style: normal;
	font-family: "Roboto", helvetica, arial, sans-serif;
	text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	text-transform: uppercase
}
.table-titl h3 {
	color: red;
	font-size: 30px;
	font-weight: 400;
	font-style: normal;
	font-family: "Roboto", helvetica, arial, sans-serif;
	text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	text-transform: uppercase
}
.table-fill {
	background: white;
	border-radius: 3px;
	border-collapse: collapse;
	height: 320px;
	margin: auto;
	max-width: 600px;
	padding: 5px;
	width: 100%;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
	animation: float 5s infinite
}
th {
	color: #D5DDE5;
	;
	background: #1b1e24;
	border-bottom: 4px solid #9ea7af;
	border-right: 1px solid #343a45;
	font-size: 23px;
	font-weight: 100;
	padding: 24px;
	text-align: left;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	vertical-align: middle
}
th:first-child {
	border-top-left-radius: 3px
}
th:last-child {
	border-top-right-radius: 3px;
	border-right: none
}
tr {
	border-top: 1px solid #C1C3D1;
	border-bottom-: 1px solid #C1C3D1;
	color: #666B85;
	font-size: 16px;
	font-weight: normal;
	text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1)
}
tr:hover td {
	background: #4E5066;
	color: #FFF;
	border-top: 1px solid #22262e
}
tr:first-child {
	border-top: none
}
tr:last-child {
	border-bottom: none
}
tr:nth-child(odd) td {
	background: #EBEBEB
}
tr:nth-child(odd):hover td {
	background: #4E5066
}
tr:last-child td:first-child {
	border-bottom-left-radius: 3px
}
tr:last-child td:last-child {
	border-bottom-right-radius: 3px
}
td {
	background: #FFF;
	padding: 20px;
	text-align: left;
	vertical-align: middle;
	font-weight: 300;
	font-size: 18px;
	text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	border-right: 1px solid #C1C3D1
}
td:last-child {
	border-right: 0px
}
th.text-left {
	text-align: left
}
th.text-center {
	text-align: center
}
th.text-right {
	text-align: right
}
td.text-left {
	text-align: left
}
td.text-center {
	text-align: center
}
td.text-right {
	text-align: right
}
html {
	overflow: scroll;
	overflow-x: hidden
}
::-webkit-scrollbar {
	width: 0px;
	background: transparent
}
::-webkit-scrollbar-thumb {
	background: #F00
}
		@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
	</style>
<script type="text/javascript"> 
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
</script>
</head>

<body>
	<div class="container">
		<br>
		<div class="row text-center">
		<button style="border:none;" type="button" class="btn btn-primary btn-lg no-print" onclick="myFunction()">Generate Certificate</button>
		<br><br>
		<div id="myDIV">
					<form class="form-inline no-print " method="POST">
						<div class="form-group">
							<input type="text" class="form-control input-lg" name="cert_no" placeholder="Enter Your Certificate ID" required>
						</div>&nbsp;&nbsp;
						<button type="submit" name="validate" class="btn btn-primary btn-lg">View</button>
					</form>
					</div>
					<br>
			<?php validate(); ?>
			<div class="row"></div>
		</div>
		<script src="js/script.js"></script>
		<script>
			function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
		</script>
</body>

</html>
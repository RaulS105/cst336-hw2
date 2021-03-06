<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<title>Lottery Machine</title>
	<style>
            @import url("css/styles.css");

     </style> 
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script> 
	<script src="js/main.js"></script>

<body>
<div class="jumbotron text-center">
		<div>

  		<h2 class="tittle"><strong>Slot Machine!</strong></h1>
  		<p>Do you have what it takes to win?</p> 
		</div>
		<table style ="width:100%">
			<tr>
				<th><strong> Three in a row</strong></th>
				<th><strong> Two in a row </strong></th>
				<th><strong> Three sevens </strong></th>
				<th><strong> Two Bombs </strong></th>
				<th><strong> Three Bombs </strong></th>
			</tr>
			<tr>
				<td> $200 </td>
				<td> $50 </td>
				<td> $777 </td>
				<td> -$50 </td>
				<td> -$100</td>

		</table>

		<div>

		<button class="btn btn-success btn-lg"> Play </button>
		<br >
		</div>


	<div>
	<hr>
	
	<h3><span id="lotteryImages"></span></h3>
	<div id="changeImages"></div>
	<div class="lottery1">

	<img src="img/3.png" alt="Seal 1" style= "float: left; padding:15px 5px 10px 100px; "class="luck1" id="slot1">
	<img src="img/3.png" alt="Seal 2" style= "float: middle; padding:15px 5px 10px 100px; "class="luck1" id="slot2">
	<img src="img/3.png" alt="Seal 3" style= "float: right; padding:15px 5px 10px 100px; "class="luck1"  id="slot3">


	<div id="Total"></div>
	<div id="Winnings"></div>

<div id="q5Feedback"></div>
</body>

<footer>
            <hr>
            CST 336 Internet Programming. 2020&copy; Sanchez <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictious. <br />
            It is used for academic purposes only. 
            <br /> <br />
            
        </footer>
</html>

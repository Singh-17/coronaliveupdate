<!DOCTYPE html>
<html>
<head>
	<title>FIGHT WITH CORONA</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg nav_style p-3">
  			<a class="navbar-brand pl-5" href="#">COVID-19</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto pr-5">
     				 <li class="nav-item active">
       					 <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
     				 </li>
     				 <li class="nav-item">
      					  <a class="nav-link" href="world.html">World</a>
      				 </li>
      				 <li class="nav-item">
      					  <a class="nav-link" href="india.php">Symptoms</a>
      				 </li>
      				 <li class="nav-item">
      					  <a class="nav-link" href="#">Prevention</a>
      				 </li>
      				 <li class="nav-item">
      					  <a class="nav-link" href="#">Contact</a>
      				 </li>
      
    			</ul>
    
  			</div>
		</nav>





		<!--******************WORLD UPDATE***************************** -->
		<section class="corona_update container-fluid">
			<div class="mb-3">
				<h3 class="text-uppercase text-center"> covid-19 update </h3>
			</div>

			<div class="table-responsive">

				<table class="table -border table-striped table-center" id="tbval">
					<tr>
						<th> Country </th>
						<th> TotalConfirmed </th>
						<th> TotalRecovered </th>
						<th> TotalDeaths </th>
						<th> NewConfirmed </th>
						<th> NewRecovered </th>
						<th> NewDeaths </th>
					</tr>
				</table>
				
			</div>
			
		</section>




</body>
</html>
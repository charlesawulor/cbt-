
<?php 
include("class/users.php");
$ans = new users;
$answer = $ans->answer($_POST);

?>

<!Doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>CBT</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/w3.css">

</head>

<body>


	
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row col-md-12" >
					<div class="col-md-12">
						<div class="row" style="margin-top:10px">
							<div class="col-md-12">
							<h1>Quiz Result</h1>
							<ul class="w3-navbar" style="border-bottom:1px Solid black">
  <li><a href="Home.php">Home</a></li>
  <li style="float:right"><a href="Home.php">Back</a></li>
</ul>
							</div>
							
									

<div class="col-md-8 col-sm-push-2" style="margin-top:10px" >
<h1 style="text-align:center">Your Quiz Results</h1>

<?php 
 $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer']; 
 $attempt_qus=$answer['right']+$answer['wrong'];
?>

	<table class="table table-bordered"> 
    <thead>
      <tr>
	    <th>Total Number Of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted Questions</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>Right Answer</td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong Answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	   <tr>
        <td>No Answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	   <tr>
        <td>Your Result</td>
        <td>
		<?php 
		$per=($answer['right']*100)/($total_qus);
		echo $per."%";
		?>
		</td>
      </tr>
    </tbody>
	</table>
</div>	
							</div>
							
								
						
						

							
						</div>
					</div>
				</div>
			</div>
		
		
		

		
		
		
		

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

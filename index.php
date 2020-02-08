<!doctype html>
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


</head>

<body>

	<div class="brand clearfix col-md-12" style="background-color:black;height:60px;position:relative">
		<label style="font-size:190%;margin-top:10px;color:white">Computer Based Test</label><span class="menu-btn"><i class="fa fa-bars"></i></span>
	</div>

	
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row col-md-12" >
					<div class="col-md-12">
						<div class="row" style="margin-top:10px">
							<div class="col-md-1">
				
							</div>
							<div class="col-md-12">
							
					
				
							<div class="panel panel-default" style="margin-bottom:30px">
										<div class="panel-heading" role="tab" id="headingOne" style="background-color:#325D88;border:1px Solid #325D88">
											<h4 class="panel-title">
											    
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="margin-top:-23px;">
		<h3 class="panel-title" style="color:white">Quiz In PHP</h3>
        
        </a>
      </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" >
										<div class="panel-body">
								
										</div>
									</div>
								</div>	
							</div>


							
							
										<div class="col-md-6" >
							
					
				
							<div class="panel panel-default" style="margin-bottom:30px;">
										<div class="panel-heading" role="tab" id="headingOne" style="background-color:#325D88;border:1px Solid #325D88">
											<h4 class="panel-title">
											    
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="margin-top:-23px;">
		<h3 class="panel-title" style="color:white">Login (Quiz in PHP)</h3>
        
        </a>
      </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" >
										<div class="panel-body">
						
		<?php
			if(isset($_GET['run'])&& $_GET['run']=="failed")
			{
				echo "<center><mark>Your Email and Password is Incorrect</mark><br></center>";
			}
			?>



						<form role="form" align='center' method="POST" action="signin_sub.php">
										
											<label style="float:left">Email Address</label><br>
											<input type="text" class="form-control" name="e">
											<br>
											<p>
											<label style="float:left">Password :</label><br>
											<input type="password" class="form-control" name="p">
											<br>
										
											<input type="submit" style="float:left;padding:10px;width:100px;background-color:#325D88;color:white;border:2px Solid #FFFFFF;border-radius:7px">
											
											</form>
										</div>
									</div>
								</div>	
							</div>
							
							
															<div class="col-md-6">
							
					
				
							<div class="panel panel-default" style="margin-bottom:30px;">
										<div class="panel-heading" role="tab" id="headingOne" style="background-color:#325D88;border:1px Solid #325D88">
											<h4 class="panel-title">
											    
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="margin-top:-23px;">
		<h3 class="panel-title" style="color:white">Sign Up (Quiz in PHP)</h3>
        
        </a>
      </h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" >
										<div class="panel-body">
										
			<?php
			if(isset($_GET['run'])&& $_GET['run']=="success")
			{
				echo "<center><mark>Your Registration Successfully Done</mark><br></center>";
			}
			?>
			
											<form align='center' method="POST" enctype="multipart/form-data" action="signup_sub.php">
													<label style="float:left" for="name">First Name</label><br>
	<input type="text" class="form-control" name="n" id="name">
											<br>
										
													<label style="float:left" for="email ">Email</label><br>
											<input type="email" class="form-control" placeholder="@gmail.com" style="text-align:right" name="e" id="email">
											<br>
													<label style="float:left" for="pwd">Password</label><br>
											<input type="password" class="form-control" name="p" id="pwd">
											<br>
											
											<label style="float:left;margin-left:5px;" for="pwd">Upload your Image</label><br>
											<input type="file" class="form-control" name="img">
											
											<br>
												<input type="submit" style="float:left;padding:10px;width:100px;background-color:#325D88;color:white;border:2px Solid #FFFFFF;border-radius:7px">
											
											
											
											</form>
										</div>
									</div>
								</div>	
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

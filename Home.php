<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
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
<style>
.city {display:none;}
</style>
</head>
<body style="margin:0px;background-image:url(img/background.png)">
		<div class="content-wrapper">
			<div class="container-fluid">
	<div class="row col-md-12" >
					<div class="col-md-12">
						<div class="row" style="margin-top:10px">
							<div class="col-md-12">
							
							<h1 style="color:white"><img src="" style="width:150px;height:100px;padding-right:20px;">ONLINE CBT SYSTEM</h1>
							<ul class="w3-navbar w3-black">
  <li><a href="#" class="tablink" onclick="openCity(event, 'Home');" >Back To Site</a></li>
  <li><a href="#" class="tablink" onclick="openCity(event, 'Profile');">Dashboard</a></li>
  <li style="float:right"><a href="#">Logout</a></li>
</ul>
							</div>
							

<div id="Home" class="w3-container city col-md-12" style="display:block;">
 
  <center style="background-color:rgba(225,225,225,0.5);height:300px" >
  
   <h2 style="margin-bottom:20px;color:white;text-align:center;margin-top:105px;padding-top:50px">Welcome <label name="">User</label></h2>
 <form action="quiz_show.php" Method="POST" > 


  <select CLASS="form-control" style="margin-top:10px;width:460px;border:none" name="cat">
  	  <option disable="disable" >Select Quiz</option> 
		<?php
		foreach($profile->cat as $category){
		?>
		<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name']; ?></option>
		
		
		<?php
		
		}
		
		?>

  <input type="submit" value="Start Quiz" style="color:white;background-color:rgba(24,114,144,0.8);border:none;padding:20px;width:200px;margin-top:5px">  </select>
  
  </form>
  
  </center>
</div> 


<div id="Profile" class="w3-container city">
 <div class="row">
							<div class="col-md-12" style="border:none;">
								<div class="panel panel-default" style="border:none;">
								<h1>Showing Profile</h1>
									<div class="panel-body" style="border:none;">
										<table class="table table-striped table-hover " style="border:none;">
											<thead>
												<tr>
													
													<th>id</th>
													<th>name </th>
													<th>email</th>
													<th>image</th>
												</tr>
											</thead>
											<tbody>
				<?php 
				foreach($profile->data as $prof)
				{
				 ?>
					
						<tr >
						<td><?php echo $prof['id']; ?></td>
						<td><?php echo $prof['name']; ?></td>
						<td><?php echo $prof['email']; ?></td>
						<td><img src="img/<?php echo $prof['img']; ?>" alt="" width="25px" height="20px"></td>
						</tr>
				<?php 
				};
				?>	
											</tbody>
										</table>
									</div>
								</div>
							</div>
</div>


</div>










<div id="Your Quiz" class="w3-container city">
  
  <h2>Your Quiz</h2>
  <p>This is a Sample Text This is a Sample Text This is a Sample Text This is a Sample Text </p>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].classList.remove("w3-red");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-red");
}
</script>

							
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

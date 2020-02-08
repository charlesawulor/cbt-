<?php 
include("class/users.php");
$qus=new users;
$cat = $_POST['cat'];
$qus->quiz_show($cat);
$_SESSION['cat']=$cat;


/*echo "<pre>";
print_r($qus->qus);*/


?>



<?php

 $link=mysqli_connect("localhost","root","","cbtdb");
 mysqli_select_db($link, "quiz_oops");
 $Timer ="";
 $res = mysqli_query($link, "select * from category Where id = 1");
 while($row=mysqli_fetch_array($res)){	
        $Timer = $row["Timer"]; 
	}

$_SESSION["Timer"] = $Timer;
$_SESSION["start_time"] = date('Y-m-d H:i:s');


$end_time = $end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["Timer"].'minutes', strtotime($_SESSION["start_time"])));

$_SESSION["end_time"] = $end_time;


?>




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


<!--------------------------------------------End Paging CSS---------------------------------------------------------------->
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

<script type="text/javascript">
	function timeout(){
		var hours=Math.floor('00');
		//var minute=Math.floor(('<?php echo $Timer ?>')/60);
		var minute=Math.floor(<?php echo $Timer ?>);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var min=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0){
			clearTimeout(tm);
		   document.getElementById("form1").submit();
		}else
		{
			if(minute<10){
				minute="0"+minute;
			}
			document.getElementById("time").innerHTML=hrs+":"+min+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	
	function checktime(msg){
		if(msg<10){
			msg="0"+msg; 
		}
		return msg;
	}
	</script>
</head>

<body onLoad="timeout()">

	
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row col-md-12" >
					<div class="col-md-12">
						<div class="row" style="margin-top:10px">
							<div class="col-md-12">
		
							
							
							<h1> Quiz in <i>PHP</i>
				<script type="text/javascript"> 
				var timeLeft=2*60*60;
				</script>
								<Div id="time" style="float:right;">timeout</Div></h1>
															<ul class="w3-navbar" style="border-bottom:1px Solid black;width:100%">
								  <li style="float:left"><a href="Home.php">Home</a></li>
								  <li style="float:right"><a href="index.php">Back</a></li>
								</ul>
															</div>
															
								<h1 style="text-align:center;">Questions</h1> 

											<form action="answer.php" method="POST" id="form1" > 
											
								<?php 
								$i=1;
								foreach($qus->qus as $qust) {							
								?>
								
									<table  class="display table table-striped table-bordered table-hover" cellspacing="0">
									
									<thead style="background-color:#193D80;color:white">
									<tr>
									 <th>
								
									 
	<?php echo $i; ?> . <?php echo htmlspecialchars_decode(htmlspecialchars_decode($qust['question']));?>
									 
									 
									 
									 
									 </th>
									</tr>
									</thead>
									
								  
									  <tbody>

									<?php
									if(isset($qust['ans1'])){?>
									 <tr>
									  <td>&nbsp;A.&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>"> <?php echo $qust['ans1']; ?></td>
									  </tr>
									<?php } ?>
									
									<?php
									if(isset($qust['ans2'])){?>
									  <tr>
									  <td>&nbsp;B.&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>"> <?php echo $qust['ans2']; ?></td>
									  </tr>
									<?php } ?>

									<?php
									if(isset($qust['ans3'])){?>
									  <tr>
									  <td>&nbsp;C.&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>"> <?php echo $qust['ans3']; ?></td>
									  </tr>
									<?php } ?>
									  
									<?php
									if(isset($qust['ans4'])){?>	 
									 <tr>
									  <td>&nbsp;D.&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>"> <?php echo $qust['ans4']; ?></td>
									  </tr>
									<?php } ?>
									
									<tr>
								   <td><input type="radio" checked="checked" style="display:none;" value="no_attempt" name="<?php echo $qust['id']; ?>"></td>
									</tr>


									</tbody>
									
								
									
									
								  </table>

								  

								<?php 
								$i++;}
								?>

								  <center>
								  <input type="submit" value="Submit Query" class="btn btn-success">
								  </center>

								  </form>






			
						</div>



					</div>
				</div>
			</div>
		</div>
		
		
		
		

		
		
		
		
<!------------------------------------------------Paging---------------------------------------------------------------------->
	

<!------------------------------------------------End Paging----------------------------------------------------------------->
		
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
<script>
setInterval(function()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET", "response.php",false);
	xmlhttp.send(null);
	document.getElementById("response").innerHTML=xmlhttp.responseText;
},1000);



</script>
</body>

</html>

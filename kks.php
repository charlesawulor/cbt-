<!doctype html>
<html lang="en" class="no-js">
<head>

	<script type="text/javascript">
	function timeout(){
		var minute=Math.floor(timeLeft/60);
		var second=timeLeft%60;
		if(timeLeft<=0){
			clearTimeout(timeout);
		   document.getElementById("form1").submit();
		}else{
			document.getElementById("time").innerHTML=minute+":"+second;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	</script>
</head>

<body onLoad="timeout">



<h1 style="text-align:center;">
Questions
 <script type="text/javascript">
	var timeLeft=2*60;
 </script>
	<Div id="time" style="float:right;">Timeout : </Div>
	</h1> 


</body>
</html>
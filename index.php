<html>
	<head>
		<title>OBS Database</title>
		<link href=bootstrap-3.3.7-dist/css/bootstrap.min.css rel=stylesheet>
		<script src=jquery/jquery-1.12.4.min.js></script>
		<script src=bootstrap-3.3.7-dist/js/bootstrap.min.js></script>
		<link href=css/tab_form.css rel=stylesheet>
		<script src=js/tab_form.js></script>
	</head>
	
	
	<body>
	
		<div class="container" style="width:100%">
			<div class="row">
				<div class="bhoechie-tab-container" style="margin-left:0%">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
					  <div class="list-group">
						<a href="#" class="list-group-item active text-center">
						  <h4 class="glyphicon glyphicon-plane"></h4><br/>Introduction
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-road"></h4><br/>Medical History
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-home"></h4><br/>Gyn OBS history
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Current Pregnancy
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Complications
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Diabetes
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Hypertension
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Overview
						</a>
						<a href="#" class="list-group-item text-center">
						  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Baby
						</a>
					  </div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
						<!-- flight section -->
						<div class="bhoechie-tab-content active">
							
							  <!--<h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
							  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
							  <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>-->
							  <div id="frmIntroduction"></div>
							  
							
						</div>
						<!-- train section -->
						<div class="bhoechie-tab-content">
							<!--<center>
							  <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
							  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
							  <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
							</center>-->
							<div id="frmMedHistory"></div>
						</div>
			
						<!-- hotel search -->
						<div class="bhoechie-tab-content">
							<center>
							  <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
							  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
							  <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
							</center>
						</div>
						<div class="bhoechie-tab-content">
							<center>
							  <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
							  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
							  <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
							</center>
						</div>
						<div class="bhoechie-tab-content">
							<center>
							  <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
							  <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
							  <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</body>
	
	<script> 
		$(function(){
		  $("#frmIntroduction").load("introduction.php"); 
		  $("#frmMedHistory").load("medical_history.php"); 
		});
    </script> 
</html>
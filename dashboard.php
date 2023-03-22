<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

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
	
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row" >
					<div class="col-md-12">

						<h2 class="page-title" style="margin-top:10%">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">My Profile</div>
													
												</div>
											</div>
											<a href="my-profile.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">My Room</div>
													
												</div>
											</div>
											<a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
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
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
      <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-header text-center">
          <h4>Pricing</h4>
          <h2>Here we are with our comprehensive services!</h2>
        </div>
       <div class="row no-gutters">
          <div class="col-lg-4 box">
            <h3>BASIC</h3>
            <div class="cstm-free">
              <h4>Free</h4>
            </div>
            <ul>
              <li><i class="fa fa-check"></i> Active and passive voice analysis.</li>
              <li><i class="fa fa-check"></i> V-METER captures the decibels of your voice.</li>
              <li class="na"><i class="fa fa-close"></i> Custom volume data (within the last 3 days) at minute level.</li>
              <li class="na"><i class="fa fa-close"></i>Hourly/Daily/Weekly/Monthly volume data.</li>
              <!-- <li class="na"><i class="fa fa-close"></i>Speak with a certified voice expert.</li> -->
            </ul>
            <a href="#" class="get-started-btn hvr-sweep-to-bottom">Get Started</a>
          </div>

          <div class="col-lg-4 box">
            <div class="cstm-price-title">
              <h3>MONTHLY</h3>
              <h4><?= $symbol?><?= $monthly ?><span>Per Month</span></h4>
            </div>
            <ul>
               <li><i class="fa fa-check"></i> Active and passive voice analysis.</li>
              <li><i class="fa fa-check"></i> V-METER captures the decibels of your voice.</li>
              <li><i class="fa fa-check"></i> Custom volume data (within the last day) at minute level.</li>
              <li><i class="fa fa-check"></i> Hourly/Daily/Weekly/Monthly volume data.</li>
              <!-- <li class="na"><i class="fa fa-close"></i>Free consultation with a certified voice expert.</li> -->
            </ul>
            <a href="#" class="get-started-btn hvr-sweep-to-bottom">Get Started</a>
          </div>

          <div class="col-lg-4 box featured">
            <div class="ribbon"><span>Limited Offer</span></div>
            <div class="cstm-price-title">
              <h3 style="margin-bottom: 5px !important;">ANNUAL</h3>
              
              <h4><small><del><?= $symbol?><?= $annualy ?></del></small><?= $symbol?><?= $annualy ?><span>Per Year</span></h4>
            </div>
            <ul>
              <li><i class="fa fa-check"></i> Active and passive voice analysis.</li>
              <li><i class="fa fa-check"></i> V-METER captures the decibels of your voice.</li>
              <li><i class="fa fa-check"></i> Custom volume data (within the last day) at minute level.</li>
              <li><i class="fa fa-check"></i> Hourly/Daily/Weekly/Monthly volume data.</li>
              <!-- <li><i class="fa fa-check"></i>Free consultation with a certified voice expert.</li> -->
            </ul>
            <a href="#" class="get-started-btn hvr-sweep-to-bottom re-an-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section>
</body>

</html>
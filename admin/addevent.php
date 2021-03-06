<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cityfair</title>
	<meta name="description" content="Ela Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="apple-touch-icon" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.png">

	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">


	<link href="assets/weather/css/weather-icons.css" rel="stylesheet" />
	<link href="assets/calendar/fullcalendar.css" rel="stylesheet" />

	<link rel="stylesheet" href="assets/css/style.css">
	<link href="assets/css/charts/chartist.min.css" rel="stylesheet">
	<link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">


	<style>
		#weatherWidget .currentDesc {
			color: #ffffff !important;
		}

		.traffic-chart {
			min-height: 335px;
		}

		#flotPie1 {
			height: 150px;
		}

		#flotPie1 td {
			padding: 3px;
		}

		#flotPie1 table {
			top: 20px !important;
			right: -10px !important;
		}

		.chart-container {
			display: table;
			min-width: 270px;
			text-align: left;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#flotLine5 {
			height: 105px;
		}

		#flotBarChart {
			height: 150px;
		}

		#cellPaiChart {
			height: 160px;
		}

	</style>

</head>

<body>


	<!-- Left Panel -->
	<?php include("include/menu.php");
    ?>
	<!-- /#left-panel -->
	<!-- Left Panel -->



	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">

		<!-- Header-->
		<?php include("include/header.php");
        ?>
		<!-- /header -->
		<!-- Header-->

		<div class="col-lg-12 d-flex justify-content-center p-3">
			<div class="card w-50 m-3">
				<div class="card-header">Event Name</div>
				<div class="card-body card-block">
					<form action="event_insert.php" enctype="multipart/form-data" method="post" class="">
					
						<div class="form-group">
							<input type="text" id="eventname" name="title" placeholder="Event Name" class="form-control">
						</div>
						
						<div class="form-group">
							<textarea class="form-control" id="description"  placeholder="Description" name="description" rows="5"></textarea>
						</div>
						
						
						<div class="form-group">
							<input type="datetime-local" id="description" name="datetime" placeholder="Date Time" class="form-control">
						</div>
						
						<div class="form-group">
							<input type="text" id="ticketprice" name="venue" placeholder="Location" class="form-control">
						</div>


						<div class="form-group">
							<input type="text" id="ticketprice" name="ticketprice" placeholder="Ticket Price" class="form-control">
						</div>

						<div class="form-group">
							<input type="text" id="ticketprice" name="organize" placeholder="organize by" class="form-control">
						</div>
						
						
						<div class="form-group">

							<select name="category" class="form-control">
								

							<?php 
							
							include("include/Database.php");
							$db = new Database();

							
							$selectCategoryQuery =  "SELECT * FROM `category`";
								
							$result = mysqli_query($db->db_connect(),$selectCategoryQuery);
							
							
							while($row = mysqli_fetch_row($result))
							{
							?>
							
							<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
							
							<?php	
							}
							
							?>
							
							</select>
						
						</div>


						<div class="form-group">
							<input type="file" id="ticketprice" name="image" class="form-control">
						</div>
						
						
						
						
						<div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm" name="sbmt">Submit</button>


						</div>
					</form>
				</div>
			</div>
		</div>



		<div class="clearfix"></div>

		<?php include("include/footer.php");
        ?>

	</div>
	<!-- /#right-panel -->


	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>

	<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>


	<!--Chartist Chart-->
	<script src="assets/js/lib/chartist/chartist.min.js"></script>
	<script src="assets/js/lib/chartist/chartist-plugin-legend.js"></script>


	<script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
	<script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
	<script src="assets/js/lib/flot-chart/jquery.flot.spline.js"></script>


	<script src="assets/weather/js/jquery.simpleWeather.min.js"></script>
	<script src="assets/weather/js/weather-init.js"></script>


	<script src="assets/js/lib/moment/moment.js"></script>
	<script src="assets/calendar/fullcalendar.min.js"></script>
	<script src="assets/calendar/fullcalendar-init.js"></script>






	<script>
		jQuery(document).ready(function($) {
			"use strict";

			// Pie chart flotPie1 
			var piedata = [{
					label: "Desktop visits",
					data: [
						[1, 32]
					],
					color: '#5c6bc0'
				},
				{
					label: "Tab visits",
					data: [
						[1, 33]
					],
					color: '#ef5350'
				},
				{
					label: "Mobile visits",
					data: [
						[1, 35]
					],
					color: '#66bb6a'
				}
			];

			$.plot('#flotPie1', piedata, {
				series: {
					pie: {
						show: true,
						radius: 1,
						innerRadius: 0.65,
						label: {
							show: true,
							radius: 2 / 3,
							threshold: 1
						},
						stroke: {
							width: 0
						}
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				}
			});

			// Pie chart flotPie1  End




			var cellPaiChart = [{
					label: "Direct Sell",
					data: [
						[1, 65]
					],
					color: '#5b83de'
				},
				{
					label: "Channel Sell",
					data: [
						[1, 35]
					],
					color: '#00bfa5'
				}
			];
			$.plot('#cellPaiChart', cellPaiChart, {
				series: {
					pie: {
						show: true,
						stroke: {
							width: 0
						}
					}
				},
				legend: {
					show: false
				},
				grid: {
					hoverable: true,
					clickable: true
				}

			});









			// Line Chart  #flotLine5
			var newCust = [
				[0, 3],
				[1, 5],
				[2, 4],
				[3, 7],
				[4, 9],
				[5, 3],
				[6, 6],
				[7, 4],
				[8, 10]
			];

			var plot = $.plot($('#flotLine5'), [{
				data: newCust,
				label: 'New Data Flow',
				color: '#fff'
			}], {
				series: {
					lines: {
						show: true,
						lineColor: '#fff',
						lineWidth: 2
					},
					points: {
						show: true,
						fill: true,
						fillColor: "#ffffff",
						symbol: "circle",
						radius: 3
					},
					shadowSize: 0
				},
				points: {
					show: true,
				},
				legend: {
					show: false
				},
				grid: {
					show: false
				}
			});

			// Line Chart  #flotLine5 End





			// Traffic Chart using chartist
			if ($('#traffic-chart').length) {
				var chart = new Chartist.Line('#traffic-chart', {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
					series: [
						[0, 18000, 35000, 25000, 22000, 0],
						[0, 33000, 15000, 20000, 15000, 300],
						[0, 15000, 28000, 15000, 30000, 5000]
					]
				}, {
					low: 0,
					showArea: true,
					showLine: false,
					showPoint: false,
					fullWidth: true,
					axisX: {
						showGrid: true
					}
				});

				chart.on('draw', function(data) {
					if (data.type === 'line' || data.type === 'area') {
						data.element.animate({
							d: {
								begin: 2000 * data.index,
								dur: 2000,
								from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
								to: data.path.clone().stringify(),
								easing: Chartist.Svg.Easing.easeOutQuint
							}
						});
					}
				});
			}
			// Traffic Chart using chartist End




			//Traffic chart chart-js 
			if ($('#TrafficChart').length) {
				var ctx = document.getElementById("TrafficChart");
				ctx.height = 150;
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
						datasets: [{
								label: "Visit",
								borderColor: "rgba(4, 73, 203,.09)",
								borderWidth: "1",
								backgroundColor: "rgba(4, 73, 203,.5)",
								data: [0, 2900, 5000, 3300, 6000, 3250, 0]
							},
							{
								label: "Bounce",
								borderColor: "rgba(245, 23, 66, 0.9)",
								borderWidth: "1",
								backgroundColor: "rgba(245, 23, 66,.5)",
								pointHighlightStroke: "rgba(245, 23, 66,.5)",
								data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
							},
							{
								label: "Targeted",
								borderColor: "rgba(40, 169, 46, 0.9)",
								borderWidth: "1",
								backgroundColor: "rgba(40, 169, 46, .5)",
								pointHighlightStroke: "rgba(40, 169, 46,.5)",
								data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
							}
						]
					},
					options: {
						responsive: true,
						tooltips: {
							mode: 'index',
							intersect: false
						},
						hover: {
							mode: 'nearest',
							intersect: true
						}

					}
				});
			}
			//Traffic chart chart-js  End 



			// Bar Chart #flotBarChart
			$.plot("#flotBarChart", [{
				data: [
					[0, 18],
					[2, 8],
					[4, 5],
					[6, 13],
					[8, 5],
					[10, 7],
					[12, 4],
					[14, 6],
					[16, 15],
					[18, 9],
					[20, 17],
					[22, 7],
					[24, 4],
					[26, 9],
					[28, 11]
				],
				bars: {
					show: true,
					lineWidth: 0,
					fillColor: '#ffffff8a'
				}
			}], {
				grid: {
					show: false
				}
			});
			// Bar Chart #flotBarChart End

		}); // End of Document Ready

	</script>




	<div id="container">



	</div>



</body>

</html>

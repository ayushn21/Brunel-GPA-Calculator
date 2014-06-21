<!DOCTYPE html>
<html>
	<head>
		<title>Brunel GPA Calculator</title>
		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<script type="text/javascript">
			$(document).ready(function(){
				$("#body_id").fadeIn("slow");
			});

			function calculate_result()
			{
				var grades_yr2 = {};
				var grades_yr3 = {};

				$("tr.grade-row-yr2").each(function(){

					$this = $(this);
					grades_yr2[$this.find("td.module").html()] = $this.find("select.grade-value").val();
				});


				$("tr.grade-row-yr3").each(function(){

					$this = $(this);
					grades_yr3[$this.find("td.module").html()] = $this.find("select.grade-value").val();
				});

				var grades_yr2_json = JSON.stringify(grades_yr2);
				var grades_yr3_json = JSON.stringify(grades_yr3);

				$.post("calculator.php",
				{
					grades_yr2:grades_yr2_json, grades_yr3:grades_yr3_json
				},
				function(data,status){
					if(data == "error" && status == "success")
					{
						$("#status").css("display","none");
						$("#status").text("Error. Please try again").addClass("bg-danger");
						$("#status").slideDown(300);
					}
					else if(status == "success")
					{
						$("#status").css("display","none");
						$("#status").text("Success").addClass("bg-success");
						$("#status").slideDown(300);

						var response = JSON.parse(data);

						$("#uk-gpa").css("display","none");
						$("#us-gpa").css("display","none");

						$("#uk-gpa").text(response["UK"]);
						$("#us-gpa").text(response["US"]);

						$("#uk-gpa").fadeIn(300);
						$("#us-gpa").fadeIn(300);
					}
					else
					{						
						$("#status").css("display","none");
						$("#status").text("Error. Please try again").addClass("bg-danger");
						$("#status").slideDown(300);
					}
				});
			}

		</script>
	</head>

	<body id="body_id" style="display:none;">
		<div class="col-md-8 col-md-offset-2">
			<h1 style="text-align:center;">GPA Calculator</h1>
			<br>
			<h4>Enter your grades here:</h4>
			<br>
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover" id="grades">
						<thead>
							<tr>
								<th colspan="2" style="text-align:center; font-size:15pt;">Second Year</th>
							</tr>
						</thead>
						<tbody>
							<tr class="grade-row-yr2">
								<td class="module">Group Project</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr2">
								<td class="module">Software Development and Management</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr2">
								<td class="module">Usability Engineering</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr2">
								<td class="module">Elective - I</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr2">
								<td class="module">Elective - II</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr2">
								<td class="module">Work Placement Portfolio</td>
								<td>
									<select class="form-control grade-value">
										<option>N/A</option>
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>
						</tbody>

						<thead>
							<tr>
								<th colspan="2" style="text-align:center; font-size:15pt;"><br>Final Year</th>
							</tr>
						</thead>
						<tbody>
							<tr class="grade-row-yr3">
								<td class="module">Final Year Project</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr3">
								<td class="module">Software Project Management</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr3">
								<td class="module">Advanced Topics in CS/IS</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr3">
								<td class="module">Elective - I</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>

							<tr class="grade-row-yr3">
								<td class="module">Elective - II</td>
								<td>
									<select class="form-control grade-value">
										<option>A*</option>
										<option>A+</option>
										<option>A</option>
										<option>A-</option>
										<option>B+</option>
										<option>B</option>
										<option>B-</option>
										<option>C+</option>
										<option>C</option>
										<option>C-</option>
										<option>D+</option>
										<option>D</option>
										<option>D-</option>
									</select>
								</td>
							</tr>
							<tr><td colspan="2">&nbsp;</td></tr>
						</tbody>
					</table>
					<div style="text-align:center;">
						<button type="button" class="btn btn-success btn-lg" onClick="calculate_result();">Calculate</button>
					</div>
				</div>
			</div>

			<p id="status" style="text-align:center; font-style:italic;"></p>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Results</h3>
				</div>
				<br>
				<div class="panel-body">
					<table class="table table-hover">
						<tr class="success">
							<td>GPA (17-point scale)</td>
							<td style="font-weight:bold;" id="uk-gpa"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr class="success">
							<td>GPA (4-point scale/US System)</td>
							<td style="font-weight:bold;" id="us-gpa"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
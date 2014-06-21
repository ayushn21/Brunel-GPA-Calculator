<!DOCTYPE html>
<html>
	<head>
		<title>Brunel GPA Calculator</title>
		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="bootstrap-3.1.1/js/bootstrap.min.js"></script>		
		<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/css/bootstrap.min.css">
	</head>

	<body>
		<div class="col-md-8 col-md-offset-2">
			<h1 style="text-align:center;">GPA Calculator</h1>
			<br>
			<h4>Enter your grades here:</h4>
			<br>
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th colspan="2" style="text-align:center; font-size:15pt;">Second Year</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Group Project</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Software Development and Management</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Usability Engineering</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Elective - I</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Elective - II</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Work Placement Portfolio</td>
								<td>
									<select class="form-control">
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
							<tr>
								<td>Final Year Project</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Software Project Management</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Advanced Topics in CS/IS</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Elective - I</td>
								<td>
									<select class="form-control">
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

							<tr>
								<td>Elective - II</td>
								<td>
									<select class="form-control">
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
						<button type="button" class="btn btn-success btn-lg">Calculate</button>
					</div>
				</div>
			</div>

			<p id="status"></p>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Results</h3>
				</div>
				<br>
				<div class="panel-body">
					<table class="table table-hover">
						<tr class="success">
							<td>GPA (17-point scale)</td>
							<td style="font-weight:bold;"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr class="success">
							<td>GPA (4-point scale/US System)</td>
							<td style="font-weight:bold;"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
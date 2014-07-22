<?php

require_once("grades_to_points.php");

if(isset($_POST['grades_yr2']) && isset($_POST['grades_yr3']))
{
	$grades_yr2 = $_POST['grades_yr2'];
	$grades_yr3 = $_POST['grades_yr3'];

	$grades_yr2_array = json_decode($grades_yr2,true);
	$grades_yr3_array = json_decode($grades_yr3,true);

	$uk_gpa = calculate_uk_gpa($grades_yr2_array,$grades_yr3_array);
	$us_gpa = calculate_us_gpa($grades_yr2_array,$grades_yr3_array);

	$response = array(
		"UK" => round($uk_gpa,2),
		"US" => round($us_gpa,2)
		);

	echo json_encode($response);
}
else
{
	echo "error";
}

function calculate_uk_gpa($grades_yr2_array, $grades_yr3_array)
{
	$numerator = 0;
	$denominator = 0;

	global $second_year_credits, $grade_point_array_uk, $third_year_credits;
	$is_placement = true;

	foreach ($grades_yr2_array as $module => $grade) 
	{
		if($grade == "N/A")
		{
			$is_placement = false;
			continue;
		}
		else
		{
			$numerator += $second_year_credits[$module] * $grade_point_array_uk[$grade];
			$denominator += $second_year_credits[$module];
		}
	}

	foreach ($grades_yr3_array as $module => $grade) 
	{
		if(!$is_placement)
		{
			$numerator += $third_year_credits[$module] * $grade_point_array_uk[$grade];
			$denominator += $third_year_credits[$module];
		}
		else
		{
			$numerator += ($third_year_credits[$module] * 2) * $grade_point_array_uk[$grade];
			$denominator += $third_year_credits[$module] * 2;
		}
	}

	return $numerator/$denominator;
}

function calculate_us_gpa($grades_yr2_array, $grades_yr3_array)
{
	$numerator = 0;
	$denominator = 0;

	global $second_year_credits, $grade_point_array_us, $third_year_credits;
	$is_placement = true;

	foreach ($grades_yr2_array as $module => $grade) 
	{
		if($grade == "N/A")
		{
			$is_placement = false;
			continue;
		}
		else
		{
			$numerator += $second_year_credits[$module] * $grade_point_array_us[$grade];
			$denominator += $second_year_credits[$module];
		}
	}

	foreach ($grades_yr3_array as $module => $grade) 
	{
		if(!$is_placement)
		{	
			$numerator += $third_year_credits[$module] * $grade_point_array_us[$grade];
			$denominator += $third_year_credits[$module];
		}
		else
		{
			$numerator += ($third_year_credits[$module] * 2) * $grade_point_array_us[$grade];
			$denominator += $third_year_credits[$module] * 2;
		}
	}

	return $numerator/$denominator;
}


?>
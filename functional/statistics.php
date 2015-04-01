<?php
function print_table()
{
	echo("<table>\n");

	$table_name = "EXERCISES_". $_SESSION["session_user_id"];
	$query = "SHOW COLUMNS FROM `$table_name`";
	$result  = mysql_query($query);
	$row = mysql_fetch_row($result);
	
	echo("<tr>");
	while ($row = mysql_fetch_row($result))
	{
		echo("<td>" . $row[0] . "</td>");
	}
	echo("</tr>\n");
	
	$query = "SELECT * FROM `$table_name`";
	$result  = mysql_query($query);	
	
	while ($row = mysql_fetch_row($result))
	{
		echo("<tr>");
		for ($i = 1; $i < count($row); $i++) 
		{
			echo("<td>" . $row[$i] . "</td>");
		}
		echo("</tr>\n");
	}

	echo("</table>");
}

function draw()
{
	include("pData.class");
	include("pChart.class");

	$table_name = "EXERCISES_". $_SESSION["session_user_id"];
	$query = "SELECT * FROM `$table_name`";
	$result  = mysql_query($query);	
	 
	// Dataset definition   
	$DataSet = new pData;
	while ($row = mysql_fetch_row($result))
	{
		for ($i = 0; $i < 1; $i++) 
		{
			$DataSet->AddPoint($row[$i], "Serie");
		}
	}
	$DataSet->AddAllSeries();

	// Initialise the graph   
	$Test = new pChart(700,230);

	// Draw the line graph
	$Test->drawLineGraph($DataSet->GetData(),$DataSet->GetDataDescription());   
	$Test->drawPlotGraph($DataSet->GetData(),$DataSet->GetDataDescription(),3,2,255,255,255);

	// Finish the graph   
	$Test->Render("statistics.png");
}
?>
<html>

<style>
	span#bonus {
		text-decoration: bold;
	}
</style>

<div>
<form action=''  method="post" enctype="multipart/form-data">
<?php

require_once 'PHPExcel.php';
require_once 'methods.php';

$mode = $_POST['filter'];

//Amount of start bonus for the first place
$BONUSES = 125;

//Show data
for ($i = 3; $i <= 7; $i++) {
 
  if ($BONUSES != 0) {
	$BONUSES -= 25;
  }

  if ($mode == 'success') {
	$prefix = "%";
	$name = read_str($i, $i, 'B');
  	$percent = read_int($i, $i, 'F', false);  
	echo $name[0] . " - " . $percent[0] . $prefix . " " . "<span id='bonus'>" . "+" . strval($BONUSES) . " баллов" . "</span>" . "<br>";
  
  } else if ($mode == 'avg_conv') {
	$prefix = "";
	$name = read_str($i, $i, 'B');
	$time = read_time($i, $i, 'E');
	echo $name[0] . " - " . $time[0] . $prefix . " " . "<span id='bonus'>" . "+" . strval($BONUSES) . " баллов" . "</span>" . "<br>";

  } else if ($mode == 'call') {
	$prefix = "";
	$name = read_str($i, $i, 'B');
	$calls = read_int($i, $i, 'D', true);
	echo $name[0] . " - " . $calls[0] . $prefix . " " . "<span id='bonus'>" . "+" . strval($BONUSES) . " баллов" . "</span>" . "<br>";
  }

}
 

/*
///////////////////////////////////////////////////////////////////////////
///////////////////////////DRAWING CHART AREA//////////////////////////////
///////////////////////////////////////////////////////////////////////////
**/

$dataPoints = [];

for ($i = 3; $i <= 7; $i++) {

	if ($mode == 'success') {
		
		$name = read_str($i, $i, 'B');
		$percent = read_int($i, $i, 'F', false);  
		
		array_push($dataPoints, 

    	["y" => $percent[0], "label" => $name[0]]
  
  		);
	  
	  } else if ($mode == 'avg_conv') {
		
		$name = read_str($i, $i, 'B');
		$time = strval(read_time($i, $i, 'E'));
		
		array_push($dataPoints, 

		["y" => $time[0], "label" => $name[0]]
	
		);

	  } else if ($mode == 'call') {
		
		$name = read_str($i, $i, 'B');
		$calls = read_int($i, $i, 'D', true);
		
		array_push($dataPoints, 

		["y" => $calls[0], "label" => $name[0]]
	
		);

	  }
  
}
 
?>

<select name = 'filter'>
	<option value='success'>Успешность в %</option>
	<option value='avg_conv'>Среднее время разговора</option>
	<option value='call'>Дозвоны</option>
</select>
<input type="submit">
</form>
</div>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Рейтинг продавцов"
	},		
	axisY: {
		title: <?php if ($_POST['filter'] == 'success') {echo "'Успешность в %'";}
					else if ($_POST['filter'] == 'avg_conv') {echo "'Разговоры в минутах'";}
					else if ($_POST['filter'] == 'call') {echo "'Количество дозвонов'";}?>,
		includeZero: true,
		prefix: "",
		suffix:  <?php if ($_POST['filter'] == 'success') {echo "'%'";}
					else if ($_POST['filter'] == 'avg_conv') {echo "''";}
					else if ($_POST['filter'] == 'call') {echo "''";}?>
	},
	data: [{
		type: "bar",
		yValueFormatString: 
		
		<?php if ($_POST['filter'] == 'success') {echo "'##,#0%'";}
					else if ($_POST['filter'] == 'avg_conv') {echo "''";}
					else if ($_POST['filter'] == 'call') {echo "''";}?>

		,
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
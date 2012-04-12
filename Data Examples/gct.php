<?php

/* 	genera un arreglo $data con 100 numeros 
	mt_rand($m,$n) retorna un numero aleatorio entre $m y $n */
for( $i = 0; $i < 100; $i++ )	
	$data[] = 1.5*$i + mt_rand(1,100);
	
?>
<html>
<head>
<title>Usando Google Chart Tools</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'fecha');
        data.addColumn('number', 'metros');
        
        data.addRows([
		<?php
			/* el siguiente codigo imprime cosas del tipo
				" ['16-06-2011', 123], "
				- el eje x corresponde a fechas que van aumentando con x
				- el eje y corresponde a los valores generados al comienzo
			*/
			foreach ($data as $key => $value) {
				$fecha = date('d-m-Y', mktime(0, 0, 0, date("m")  , date("d") - count($data) + $key, date("Y")));
				echo "['{$fecha}', {$value}],";
			}
		?>          
        ]);

        var options = {
          title: 'Visualizando datos con Google Chart Tools',          		  
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
	<div id="chart_div" style="width: 100%; height: 500px;"></div>
</body>
</html>
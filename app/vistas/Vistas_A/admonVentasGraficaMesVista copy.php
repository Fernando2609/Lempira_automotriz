<?php include_once("encabezado.php");?>
<div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script>
  //
  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(grafica_dia);

  function grafica_dia() {
    // Poblamos la gráfica
    var data = google.visualization.arrayToDataTable([
      ["Fecha","Lps."],
      <?php  
      $n = count($datos["data"]);
      for ($i=0; $i<$n; $i++) {
        print "['".substr($datos["data"][$i]["fecha"],0,10)."', ";
        print $datos["data"][$i]["venta"]."]";
        if($i<$n) print ",";
      }
      ?>
    ]);
    var options = {
          title: 'VENTAS TOTALES EN LEMPIRAS SEGUN EL MES',
          hAxis: {title: 'Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div id="chart_div" style="width: 100%; height: 500px;"></div> 
<?php include_once("piepagina.php"); ?>
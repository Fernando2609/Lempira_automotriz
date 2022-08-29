<?php include_once("encabezado.php");?>
<div>

<div id="grafica"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(grafica);

      function grafica() {
        var data = google.visualization.arrayToDataTable([
          ["Fecha","Ventas Lps"],
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
          chart: {
            title : 'Ventas Por Día',
            subtitle: 'Lempira Automotriz',
            textStyle:{color: "Gray", fontSize:80, bold: true, italic:true},
           
          },
          colors: ["DeepSkyBlue"],
      fontSize: 20,
      fontName: "Times",
      height: 500,
      width:800,
      hAxis: {
        title: "Fecha",
        titleTextStyle: { color: 'Gray', fontSize:30},
        textPosition: "out",
        textStyle: {color: "Gray", fontSize:20, bold: true, italic:true}
      },
      vAxis: {
        title: "Ventas Lempiras",
        titleTextStyle: { color: 'gray', fontSize:30},
        textPosition: "out",
        textStyle: {color: "gray", fontSize:20, bold: true, italic:true},
        gridlines: {color: "gray"}
      },
      legend: {position: "none"},
      titleTextStyle: {color: "gray", fontSize: 40, italic:true}
        };

        var chart = new google.charts.Bar(document.getElementById('grafica'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="grafica" style="width: 800px; height: 500px; font: size 12px;"></div>
    </div>
<?php include_once("piepagina.php"); ?>
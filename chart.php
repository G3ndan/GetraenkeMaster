<?php
require "../PHP/checkValidUser.php";
require_once "../PHP/statfuncs.php";
?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawBar);

    function drawBar() {
      var data = google.visualization.arrayToDataTable([
        ["Monat", "Gesamt", "Du"],
        <?php $action = 'user'; include "../PHP/stats.php"; ?>
        ]);

      var options = {
        chart: {
          title: 'Vergleich',
          subtitle: 'Du vs. das gesamte SOC',
        },
        bars: 'horizontal' // Required for Material Bar Charts.
      };

      var chart = new google.charts.Bar(document.getElementById('barchart_div'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawPie);

      function drawPie() {

        var data = google.visualization.arrayToDataTable([
          ['Sorten', 'Anzahl'],
          <?php $action = 'month'; include "../PHP/stats.php"; ?>
        ]);

        var options = {
          title: 'Aktivität in diesem Monat'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          var data = google.visualization.arrayToDataTable([
            ['Sorten', 'Anzahl'],
            <?php $action = 'year'; include "../PHP/stats.php"; ?>
          ]);

          var options = {
            title: 'Aktivität in diesem Jahr'
          };

          var chart = new google.visualization.PieChart(document.getElementById('year_div'));

          chart.draw(data, options);
        }
      </script>
</head>


  <body>
    <!--Div that will hold the pie chart-->
    <h1>Statistik</h1>
    <div id="barchart_div" style="width: 450px; height: 300px;"></div>

    <div id="piechart_div" style="width: 450px; height: 300px;"></div>

    <div id="year_div" style="width: 450px; height: 300px;"></div>

    </div>
  </body>
</html>

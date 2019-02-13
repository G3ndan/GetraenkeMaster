<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sorte');
        data.addColumn('number', 'Anzahl');
        data.addRows([
          <?php error_reporting(0);
          include "../PHP/stats.php"; ?>
        ]);

        // Set chart options
        var options = {'title':'Anzahl der geholten Getränke',
                       'width':1200,
                       'height':900};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <h1>Statistik</h1>

    <form  onsubmit="return false;" method="post">
      <table id="ch">
        <thead>
          <tr>
            <th>Jahr</th>
            <th>Monat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td>
            <select name="year" class="date">
              <?php
              $time = getdate();
              $year = $time['year'];
              echo "<option>$year</option>";
              ?>
            </select>
            </td>
            <td>
              <select name="month" class="date">
                <?php for ($i=1; $i <= 12 ; $i++) {
                  echo "<option>$i</option>";
                } ?>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
      <button type="submit" id="submit" name="button">Sumbit</button>
    </form>
    <div id="chart_div"></div>
  </body>
</html>
